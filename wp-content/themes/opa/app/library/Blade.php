<?php
namespace Library;

class Blade
{
	/**
	 * Load Blade Template.
	 *
	 * @param $pageView
	 * @param $data
	 */
	public static function loadPage( $pageView, $data = NULL )
	{
		if ( ! $data)
		{
			$data = [];
		}

		render_blade_view( $pageView, $data );

		die();
	}
}
