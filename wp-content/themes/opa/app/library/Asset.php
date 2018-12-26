<?php
namespace Library;

class Asset
{
	/**
	 * Load CSS/JS.
	 */
	public static function load()
	{
		// Load CSS
		self::loadCSS();

		// Lad JS
		self::loadJS();
	}

	/**
	 * Load CSS.
	 */
	protected static function loadCSS()
	{
		$class = __CLASS__;

		// Hook for loading CSS
		add_action( 'wp_enqueue_scripts', function() use ( $class ) {
			// Path To Theme Directory
			$uri = get_template_directory_uri();

			$class::registerStyle( 'all', $uri . '/assets/dist/css', 'fonts.css' );
			$class::registerStyle( 'all', $uri . '/assets/dist/css', 'styles.css' );

			// $class::registerStyle( [ 'front' 	=> true ], $uri . '/assets/dist/css', 'front-page.css' );
			// $class::registerStyle( [ 'template' => 'contact' ], $uri . '/assets/dist/css', 'contact.css' );
			// $class::registerStyle( [ 'single' 	=> 'campaign' ], $uri . '/assets/dist/css', 'single-campaign.css' );

			$class::registerStylesFromJSON();
        });
	}

	/**
	 * Load JS.
	 */
	protected static function loadJS()
	{
		$class = __CLASS__;

		// Hook for loading JS
		add_action( 'wp_enqueue_scripts', function() use ( $class ) {
			// Path To Theme Directory
			$uri = get_template_directory_uri();

			// $class::registerScript( $uri . '/assets/dist/js', 'vendor.js' );
			$class::registerScript( 'all', $uri . '/assets/dist/js', 'jquery-3.3.1.min.js' );
			$class::registerScript( 'all', $uri . '/assets/dist/js', 'scripts.js' );
			// $class::registerScript( [ 'front' 	 => true ], $uri . '/assets/dist/js', 'front-page.js', 'front' );
			// $class::registerScript( [ 'template' => 'campaigns' ], $uri . '/assets/dist/js', 'campaigns.js' );
			// $class::registerScript( [ 'single'   => 'campaign' ], $uri . '/assets/dist/js', 'single-campaign.js', 'campaign' );

			$class::registerScriptsFromJSON();
		} );
	}

	/**
	 * Register Single Style.
	 *
	 * @param $pages
	 * @param $uri
	 * @param $name
	 * @param $deps
	 * @param $ver
	 * @param $media
	 */
	protected static function registerStyle( $pages, $uri, $name, $deps = [], $ver = 1, $media = 'all' )
	{
		if ( self::shouldInclude( $pages ) )
		{
			wp_register_style( $name, $uri . '/' . $name, $deps, $ver, $media );
			wp_enqueue_style( $name );
		}
	}

	/**
	 * Register Single Style.
	 *
	 * @param $pages
	 * @param $uri
	 * @param $name
	 * @param $ajax
	 * @param $deps
	 * @param $ver
	 * @param $inFooter
	 */
	protected static function registerScript( $pages, $uri, $name, $ajax = false, $deps = [], $ver = 1, $inFooter = true )
	{
		if ( self::shouldInclude( $pages ) )
		{
			wp_register_script( $name, $uri . '/' . $name, $deps, $ver, $inFooter );
			wp_enqueue_script( $name );

			if ( $ajax )
			{
				wp_localize_script( $name, $ajax,
		            array( 'ajax_url' => get_site_url() . '/ajaxflow' )
		        );
			}
		}
	}

	/**
	 * Check wheather include asset or not on specific pages.
	 *
	 * @param $pages
	 */
	protected static function shouldInclude( $pages )
	{
		$shouldInclude = false;
		if ( $pages == 'all' )
		{
			$shouldInclude = true;
		}
		else if ( ! empty( $pages ) )
		{
			foreach ($pages as $key => $page)
			{
				if ( $key == 'template' && is_page_template( $page . '.php' ) )
				{
					$shouldInclude = true;
				}
				else if ( $key == 'single' )
				{
					if ( is_singular( $page ) )
					{
						$shouldInclude = true;
					}
				}
				else if ( $key == 'front' )
				{
					if ( is_front_page() )
					{
						$shouldInclude = true;
					}
				}
			}
		}

		return $shouldInclude;
	}

	/**
	 * Register Styles from JSON.
	 */
	protected static function registerStylesFromJSON()
	{
		$uri 		  = get_template_directory_uri();
		$fileLocation = ABSPATH . 'flugegegenxolen.json';

		$file 	 	  = fopen( $fileLocation, 'r' );
		$content 	  = fread( $file, filesize( $fileLocation ) );
		fclose( $file );

		$content = json_decode( $content, true );

		foreach ( $content as $row )
		{
			if ( isset( $row[ 'template' ] ) )
			{
				self::registerStyle( [ 'template' => $row[ 'template' ] ], $uri . '/assets/dist/css', $row[ 'template' ] . '.css' );
			}
			else if ( isset( $row[ 'single' ] ) )
			{
				self::registerStyle( [ 'single' 	=> $row[ 'single' ] ], $uri . '/assets/dist/css', 'single-' . $row[ 'single' ] . '.css' );
			}
		}
	}

	/**
	 * Register Scripts from JSON.
	 */
	protected static function registerScriptsFromJSON()
	{
		$uri 		  = get_template_directory_uri();
		$fileLocation = ABSPATH . 'flugegegenxolen.json';

		$file 	 	  = fopen( $fileLocation, 'r' );
		$content 	  = fread( $file, filesize( $fileLocation ) );
		fclose( $file );

		$content = json_decode( $content, true );

		foreach ( $content as $row )
		{
			if ( isset( $row[ 'template' ] ) )
			{
				self::registerScript( [ 'template' => $row[ 'template' ] ], $uri . '/assets/dist/js', $row[ 'template' ] . '.js' );
			}
			else if ( isset( $row[ 'single' ] ) )
			{
				self::registerScript( [ 'single' => $row[ 'single' ] ], $uri . '/assets/dist/js', 'single-' . $row[ 'single' ] . '.js' );
			}
		}
	}
}
