<?php 
namespace Library;

class CPT
{
	/**
	 * Create Custom Post Type.
	 *
	 * @param $name
	 * @param $attributes
	 */
	public static function create( $name, $attributes = [] )
	{
		add_action( 'init', function() use ( $name, $attributes ) {
			register_post_type( $name,
				[
					'labels' 	  		 => [
						'name' 			 => __( ucfirst( $name . 's' ) ),
						'singular_name'  => __( ucfirst( $name ) )
					],
					'public' 	  		 => isset( $attributes[ 'public' ] ) ? $attributes[ 'public' ] : true,
					'publicly_queryable' => isset( $attributes[ 'publicly_queryable' ] ) ? $attributes[ 'publicly_queryable' ] : true,
					'show_ui' 	  		 => isset( $attributes[ 'show_ui' ] ) ? $attributes[ 'show_ui' ] : true,
					'show_in_menu' 	  	 => isset( $attributes[ 'show_in_menu' ] ) ? $attributes[ 'show_in_menu' ] : true,
					'query_var' 	  	 => isset( $attributes[ 'query_var' ] ) ? $attributes[ 'query_var' ] : true,
					'rewrite' 	  		 => isset( $attributes[ 'rewrite' ] ) ? $attributes[ 'rewrite' ] : [ 'slug' => $name . 's' ],
					'capability_type' 	 => isset( $attributes[ 'capability_type' ] ) ? $attributes[ 'capability_type' ] : 'post',
					'has_archive' 		 => isset( $attributes[ 'has_archive' ] ) ? $attributes[ 'has_archive' ] : true,
					'hierarchical' 		 => isset( $attributes[ 'hierarchical' ] ) ? $attributes[ 'hierarchical' ] : false,
					'menu_position' 	 => isset( $attributes[ 'menu_position' ] ) ? $attributes[ 'menu_position' ] : NULL,
					'supports' 			 => isset( $attributes[ 'supports' ] ) ? $attributes[ 'supports' ] : [ 'title', 'editor', 'thumbnail', 'excerpt' ]
				]
			);
		} );
	}
}
