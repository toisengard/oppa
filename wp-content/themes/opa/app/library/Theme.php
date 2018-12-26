<?php
namespace Library;

class Theme
{
	/**
	 * Add Theme Support.
	 */
	public static function addThemeSupport()
	{
		self::addMenuSupport();
		self::addThumbnailSupport();
	}

	/**
	 * Add Menu Support.
	 */
	protected static function addMenuSupport()
	{
		add_theme_support( 'menus' );
	}

	/**
	 * Add Thumbnail Support
	 */
	protected static function addThumbnailSupport()
	{
		add_theme_support( 'post-thumbnails' );
	}
}
