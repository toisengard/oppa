<?php
namespace Library;

class ImageResizer
{
	/**
	 * Init Image Resizer.
	 */
	public function init( $image_resize_array )
	{
		$class = __CLASS__;

		// Run after ACF saves the $_POST['acf'] data
		add_action('acf/save_post', function() use ( $image_resize_array, $class ) {
			// global $image_resize_array;

		    // Foreach field to be saved get as fieldName and fieldValue
		    foreach ($image_resize_array as $fieldKey => $sizesArray) {
		        // Get field object with together with value
		        $fieldObj = get_field_object($fieldKey, $post_id);

		        // End this iteration and continue with foreach loop early if field has no value
		        if (!$fieldObj['value']) {
		            continue;
		        }

		        if ($fieldObj['type'] == 'image' || $fieldObj['type'] == 'gallery') {
		            $class::image_resizer($fieldObj['type'], $fieldObj['value'], $sizesArray);
		        }

		        if ($fieldObj['type'] == 'flexible_content' || $fieldObj['type'] == 'repeater') {
		            $class::iterative_image_resizer($fieldObj, $sizesArray);
		        }
		    }
		}, 20);
	}

	protected static function iterative_image_resizer($values, $sizesArray) {
	    foreach ($values as $key => $value) {
	        if ($key == 'type' && $value == 'image') {
	            self::image_resizer('image', $values, $sizesArray);
	        }

	        if ($key == 'type' && $value == 'gallery') {
	            self::image_resizer('gallery', $values, $sizesArray);
	        }

	        if (is_array($value)) {
	            self::iterative_image_resizer($value, $sizesArray);
	        }
	    }
	}

	protected static function image_resizer($type, $resultArray, $sizesArray) {
	    // If we have single image thing
	    if ($type == 'image') {
	        // If we have an uploaded image (otherwise we will have NULL in attachmentID)
	        if ($resultArray) {
	            $attachmentID = $resultArray['ID'];

	            foreach ($sizesArray as $sizes) {
	                self::my_generate_attachment_metadata($attachmentID, $sizes[0], $sizes[1], $sizes[2]);
	            }
	        }
	    }

	    // If we have gallery thing
	    if ($type == 'gallery') {
	        // If we have uploaded image(s) (otherwise we will have NULL in resultArray)
	        if ($resultArray) {

	            foreach ($resultArray as $value) {
	                $attachmentID = $value['ID'];

	                foreach ($sizesArray as $sizes) {
	                    self::my_generate_attachment_metadata($attachmentID, $sizes[0], $sizes[1], $sizes[2]);
	                }
	            }
	        }
	    }
	}

	// Add image size to attachment. YO YO YO + multiple YOs
	protected static function my_generate_attachment_metadata($attachment_id, $width, $height, $crop) {
	    // Get full image file url
	    $file = wp_get_attachment_image_src($attachment_id, 'full');
	    $file = $file[0];

	    // Make the file path relative to the upload dir /image_make_intermediate_size calls wp_get_image_editor - which needs basedir
	    // servers basedir not url
	    $upload = wp_upload_dir();
	    $upload = $upload['basedir'];
	    $relativeFile = explode('uploads', $file);
	    $relativeFile = $relativeFile[1];
	    $relativeFileBase = $upload . $relativeFile;

	    // Add our new (or probably not, in this case it will just overwrite the value in sizes array) size
	    $associativeKey = 'wh' . $width . 'x' . $height;
	    $sizeAlreadyExists = false;

	    // Only generate image if it does not already exist
	    $attachment_meta = wp_get_attachment_metadata($attachment_id);
	    $attachmentSizes = $attachment_meta['sizes'];

	    // In this array we will store already existing size names as keys .. values will be just dummy array()s because we just
	    // Need to compare keys to learn if the size already exists.
	    foreach ($attachmentSizes as $sizeName => $sizeMeta) {
	        if ($associativeKey == $sizeName) {
	            $sizeAlreadyExists = true;
	            return $associativeKey;
	        }
	    }

	    if (!$sizeAlreadyExists) {
	        $resized = image_make_intermediate_size($relativeFileBase, $width, $height, $crop);

	        if ($resized) {
	            $attachment_meta['sizes'][$associativeKey] = $resized;
	        }
	    }

	    wp_update_attachment_metadata($attachment_id, $attachment_meta);
	    return $associativeKey;
	}
}
