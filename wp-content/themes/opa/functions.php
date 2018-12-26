<?php
// Composer autoload Classes
require ABSPATH . "vendor/autoload.php";

// Use Classes
use \Library\Asset;
use \Library\Theme;
use \Library\CPT;
use \Library\ACF;
use \Library\Image;
use \Library\Flugegegenxolen;

// Init Flugegegenxolen
Flugegegenxolen::init();


// Load CSS/JS
Asset::load();


// Add Theme Support
Theme::addThemeSupport();


// Create Custom Post Type
// CPT::create( 'product', [ 'public' => true ] );


// ACF JSON
ACF::toJson();


// Image Resizer
// $image = new Image();
// $image -> addResize( ['a' => 'b' ] );
// $image -> addResize( ['c' => 'd' ] );
// $image -> resize();


// AJAX
// add_action( 'ajaxflow_test', 'test' );
// add_action( 'ajaxflow_nopriv_test', 'test' );
// function test()
// {
// 	wp_send_json(['a' => $_GET['ID']]);
//
// 	die('XXXXX');
// }
