<?php namespace Library;


use \Library\CPT;

class Flugegegenxolen
{
	/**
	 * Init.
	 */
	public static function init()
	{
		$content = self::readJSON();

		self::updateDB( $content );
	}

	/**
	 * Read Flugegegenxolen JSON File.
	 */
	protected static function readJSON()
	{
		$fileLocation = ABSPATH . 'flugegegenxolen.json';

		$file 	 	  = fopen( $fileLocation, 'r' );
		$content 	  = fread( $file, filesize( $fileLocation ) );
		fclose( $file );

		$content = json_decode( $content, true );

		return $content;
	}

	/**
	 * Add Pages and Custom Post Types in DB.
	 *
	 * @param $content
	 */
	protected static function updateDB( $content )
	{
		foreach ( $content as $row )
		{
			if ( isset( $row[ 'template' ] ) )
			{
				self::updatePage( $row[ 'template' ] );
			}
			else if ( isset( $row[ 'single' ] ) )
			{
				self::updatePostType( $row[ 'single' ] );
			}
		}
	}

	/**
	 * Update Page in DB.
	 *
	 * @param $template
	 */
	protected static function updatePage( $template )
	{
		if ( ! get_page_by_title( ucfirst( $template ) ) )
		{
			wp_insert_post( [
				'post_type'   	=> 'page',
				'post_name'   	=> $template,
				'post_title'  	=> ucfirst( $template ),
				'post_status' 	=> 'Publish',
				'page_template' => $template . '.php'
			] );
		}
	}

	/**
	 * Update Post Type in DB.
	 *
	 * @param $postType
	 */
	protected static function updatePostType( $postType )
	{
		CPT::create( $postType );
	}
}
