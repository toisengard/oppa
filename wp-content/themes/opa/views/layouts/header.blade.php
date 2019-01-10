<!DOCTYPE html>

<html {{ language_attributes() }}>
	<head>
	    <meta charset="{{ bloginfo( 'charset' ) }}">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <title>{{$meta_title}}</title>
    	<meta class="og_title" property="og:title" content="{{$meta_title}}">
		<meta name="description" content="{{$meta_descr}}">
    	<meta class="og_description" property="og:description" content="{{$meta_descr}}">
    	<meta property="og:image" content="{{$meta_image[url]}}">
	    <link href="{{ get_template_directory_uri() . '/assets/dist/images/favicon.svg' }}" rel="icon" type="image/x-icon">
	    
	    <!-- Facebook OG Tags -->
	    <meta property="og:type" content=""/>
	    <meta property="og:title" content="{{$meta_title}}"/>
	    <meta property="og:description" content="{{$meta_descr}}"/>
	    <meta property="og:image" content="{{$meta_image[url]}}"/>
	    <meta property="og:url" content="{{$page_url}}"/>
	    <meta property="og:locale" content=""/>
	    <!-- / Facebook OG Tags -->
	    
	    <!-- WP Head -->
		{{ wp_head() }}
	    <!-- / WP Head -->
	</head>

	<body {{ body_class() }}>
