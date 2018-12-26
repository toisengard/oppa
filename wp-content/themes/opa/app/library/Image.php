<?php
namespace Library;

use \Library\ImageResizer;

class Image
{
	// Image Resizer
	protected $imageResizer = false;

	/**
	 * Arguments Array For Custom Image Resizer Function
	 *
	 * Example:
	 *
	 * $args = array(
	 *    // Page name for identification
	 *    'ACF_Key' => array(
	 *      // Width, Height, Crop
	 *      array(int, int, boolean),
	 *      // If you add second array, function will create image with desire sizes
	 *      array(int, int, boolean),
	 *      // And so on
	 *      array(int, int, boolean),
	 *    ),
	 * );
	 *
	 */
	protected $image_resize_array = array(
	    // Products
	    // 'field_56c0c8df92a7c' => array(
	        // Width, Height, Crop
	        // array( 697, 512, false ),
	        // array( 368, 358, false ),
	        // array( 292, 140, false ),
	        // array( 113, 152, false)
	    // ),
	);

	/**
	 * This function returns image source from image field
	 *
	 * @param [array|int] $field_data - ACF field name and post ID | Image ID
	 * @param [array|string] $image_size - image width and height or WP default size (thumbnail, medium, etc)
	 *
	 * @return [string] - empty string or image source
	 */
	protected static function get( $field_data, $image_size = array() )
	{
		$image_src = '';
		// If POST ID is not defined set to `false` to target the current post
		$post_id = ! empty( $field_data[1] ) ? $field_data[1] : false;

		if ( is_array( $image_size ) ) {
			$width      = ! empty( $image_size[0] ) ? $image_size[0] : '9999';
			$height     = ! empty( $image_size[1] ) ? $image_size[1] : '9999';
			$dimensions = 'wh' . $width . 'x' . $height;
		} else {
			$dimensions = isset( $image_size ) ? $image_size : 'thumbnail';
		}

		if ( is_array( $field_data ) ) {
			$field_name = ! empty( $field_data[0] ) ? $field_data[0] : '';

			if ( ! empty( $field_name ) ) {
				$image = get_field( $field_name, $post_id );

				if ( $image ) {
					$image_id = $image['ID'];
				}
			}
		} else {
			$image_id = $field_data;
		}

		if ( isset( $image_id ) && $image_id > 0 ) {
			$attachment = wp_get_attachment_image_src( $image_id, $dimensions );

			if ( $attachment ) {
				$image_src = esc_url( $attachment[0] );
			}
		}

		return $image_src;
	}

	/**
	 * Add Image Resizer.
	 *
	 * @param $item
	 */
	public function addResize( $item = [] )
	{
		$this -> image_resize_array[] = $item;
	}

	/**
	 * Perform Resize.
	 */
	public function resize()
	{
		if ( ! $this -> imageResizer )
		{
			$this -> imageResizer = new ImageResizer();
		}

		$this -> imageResizer -> init( $this -> image_resize_array );
	}
}
