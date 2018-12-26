<?php
namespace Library;

class ACF
{
	/**
	 * Save ACF as JSON File and Load to SYNC when available.
	 */
	public static function toJson()
	{
		// Save ACF as JSON File
		self::save();

		// Load ACF JSON File
		self::load();
	}

	/**
	 * Save ACF as JSON File.
	 */
	protected static function save()
	{
		add_filter( 'acf/settings/save_json', function() {
			return ABSPATH . 'wp-content/acf-json';
		} );
	}

	/**
	 * Load ACF JSON to SYNC when available.
	 */
	protected static function load()
	{
		add_filter('acf/settings/load_json', function( $paths ) {
		    unset($paths[0]);										// remove original path (optional)
		    $paths[] = ABSPATH . 'wp-content/acf-json';				// append path

		    return $paths;
		});
	}
}
