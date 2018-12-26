<!DOCTYPE html>

<html {{ language_attributes() }}>
	<head>
	    <meta charset="{{ bloginfo( 'charset' ) }}">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <title>WP BASE</title>

	    <link href="{{ get_template_directory_uri() . '/favicon.ico' }}" rel="icon" type="image/x-icon">
	    
	    <!-- Facebook OG Tags -->
	    <meta property="og:type" content=""/>
	    <meta property="og:title" content=""/>
	    <meta property="og:description" content=""/>
	    <meta property="og:image" content=""/>
	    <meta property="og:url" content=""/>
	    <meta property="og:locale" content=""/>
	    <!-- / Facebook OG Tags -->
	    
	    <!-- WP Head -->
		{{ wp_head() }}
	    <!-- / WP Head -->
	</head>

	<body {{ body_class() }}>
