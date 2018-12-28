@extends('pages.master')


@section('content')

	
	<div class="section first vh-100 rel flex column flex-vhcenter" id="firstscroll">
		<div class="background fullh abs bg-cover" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/background-one.jpg')">
		</div>
		<header class="flex flex-vhcenter header transparent">
			<div class="header-inner-holder flex flex-between flex-vcenter"> 
				<div class="logo on rel flex flex-center bg-cover" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/main-logo.png')">
					<a href="" alt=""  class="abs">
					</a>
				</div>
				<div class="logo-two rel flex flex-center bg-cover" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/logo-01.png')">
					<a href="" alt=""  class="abs">
					</a>
				</div>

				<div class="language rel flex center" style="">
					<a href="{{$url}}" alt="" class="title s white on flex flex-vhcenter abs">
						{{$lan}}
					</a>
					
				</div>
			</div>
		</header>
		<div class="first-section-holder flex flex-vhcenter column">
			<div class="first-section-content flex flex-center column center flex-between">
				<div class="main-title title xl white">
					{{$main_title}}
				</div>
				<div class="main-title-description text m white">
					{{$main_title_description}}
				</div>
			</div>
			<div class="main-description text white">
					{{$main_description}}
			</div>
			<div class="first-section-benefits flex flex-between">
				@foreach($main_features as $feature)
				<div class="section-benefit-holder   flex flex-vhcenter">
					<div class="benefit-icon" style="background-image:url( {{$feature['main_feature_icon']['url']}} )">
					</div>
					<div class="benefit-text text m">
						{{$feature['main_feature_one']}}
					</div>
				</div>
				@endforeach
				
			</div>
			<div class="claim-holder">
				<a href="{{$button_one_url}}" class="claim btn btn-round title s flex flex-vhcenter white rel">
		    		{{$button_one_text}}
				</a>
			</div>
		</div>
	</div>
	<div class="main-content section second flex flex-center column rel pat" id="secondscroll">
				<div class="section-with-video-holder flex rel">
			<div class="section-with-video second flex row rel flex-between flex-vcenter">
				<div class="second-section-content flex column rel">
					<div class="second-content-holder">
						<div class="main-title title l blue">
							{{$video_holder_main_title}}
						</div>
						<div class="main-description text blue">
							{{$video_holder_main_text}}
						</div>
					</div>
					<div class="claim-holder">
						<a href="{{$button_two_url}}" class="claim btn btn-round title s flex flex-vhcenter white rel">
							{{$button_two_text}}
						</a>
						
					</div>
				</div>
				<div class="video-holder rel">
					@if(!empty($video_holder)){

					<div class="video-inner-holder">
						<!-- <video controls class="abs" id="video">
						  <source src="{{$video_holder}}" type="video/mp4">
						</video> -->
						<iframe class="abs" id="video"
							src="{{$video_holder}}" frameborder="0" gesture="media" allow="encrypted-media;" allowfullscreen>
						</iframe>
						<span class="video-btn-before abs vh-align">
						</span>
						<a class="video-btn abs vh-align flex flex-vhcenter" id="videobtn">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 191.255 191.255" style="enable-background:new 0 0 191.255 191.255;" xml:space="preserve">
							<path d="M162.929,66.612c-2.814-1.754-6.514-0.896-8.267,1.917s-0.895,6.513,1.917,8.266c6.544,4.081,10.45,11.121,10.45,18.833
								s-3.906,14.752-10.45,18.833l-98.417,61.365c-6.943,4.329-15.359,4.542-22.512,0.573c-7.154-3.97-11.425-11.225-11.425-19.406
								V34.262c0-8.181,4.271-15.436,11.425-19.406c7.153-3.969,15.569-3.756,22.512,0.573l57.292,35.723
								c2.813,1.752,6.513,0.895,8.267-1.917c1.753-2.812,0.895-6.513-1.917-8.266L64.512,5.247c-10.696-6.669-23.661-7-34.685-0.883
								C18.806,10.48,12.226,21.657,12.226,34.262v122.73c0,12.605,6.58,23.782,17.602,29.898c5.25,2.913,10.939,4.364,16.616,4.364
								c6.241,0,12.467-1.754,18.068-5.247l98.417-61.365c10.082-6.287,16.101-17.133,16.101-29.015S173.011,72.899,162.929,66.612z"/>

							</svg>
						</a>
					</div>
					@endif

					@if(!empty($image_holder))

					<div class="gif-inner-holder">
						
							<img data-gifffer="{{$image_holder['url']}}" data-gifffer-width="100%" data-gifffer-height="100%" />
							<!-- <span class="video-btn-before abs vh-align">
							</span> -->
							<!-- <a class="video-btn gif abs vh-align flex flex-vhcenter" id="gifbtn">
								
								<?xml version="1.0" encoding="utf-8"?>
								<svg version="1.1" id="Layer_1"  fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 62.5 62.5" style="enable-background:new 0 0 62.5 62.5;" xml:space="preserve">
								<style type="text/css">
									.st0{fill:#ffffff;}
								</style>
								<g>
									<path class="st0" d="M22,30.6v2.2h2.9v2.9c-0.3,0.2-0.7,0.3-1,0.4c-0.5,0.1-1,0.2-1.6,0.2c-1.5,0-2.6-0.4-3.3-1.2
										c-0.7-0.8-1.1-2.1-1.1-3.7c0-1.7,0.4-2.9,1.1-3.8c0.7-0.8,1.9-1.2,3.3-1.2c0.8,0,1.5,0.1,2.2,0.4c0.7,0.3,1.4,0.7,2,1.2l0.6,0.5
										v-2.9l-0.2-0.1c-0.7-0.4-1.4-0.8-2.2-1c-0.8-0.2-1.7-0.3-2.5-0.3c-2.1,0-3.9,0.6-5.1,1.9c-1.2,1.3-1.8,3-1.8,5.3
										c0,2.2,0.6,4,1.8,5.3c1.2,1.3,2.9,1.9,5.1,1.9c1,0,1.9-0.1,2.8-0.4c0.9-0.3,1.7-0.6,2.4-1.2l0.2-0.1v-6.2H22z"/>
									<rect x="30.8" y="24.3" class="st0" width="2.5" height="13.9"/>
									<polygon class="st0" points="45.3,26.6 45.3,24.3 37,24.3 37,38.2 39.5,38.2 39.5,31.9 44.7,31.9 44.7,29.7 39.5,29.7 39.5,26.6 	
										"/>
								</g>
								<g>
									<circle class="st0" cx="60.7" cy="31.3" r="1.7"/>
									<circle class="st0" cx="60.3" cy="36.5" r="1.7"/>
									<circle class="st0" cx="58.8" cy="41.6" r="1.7"/>
									<circle class="st0" cx="56.5" cy="46.4" r="1.7"/>
									<circle class="st0" cx="53.4" cy="50.7" r="1.7"/>
									<circle class="st0" cx="49.6" cy="54.4" r="1.7"/>
									<circle class="st0" cx="45.2" cy="57.3" r="1.7"/>
									<circle class="st0" cx="40.3" cy="59.4" r="1.7"/>
									<circle class="st0" cx="35.1" cy="60.6" r="1.7"/>
									<circle class="st0" cx="29.8" cy="60.8" r="1.7"/>
									<circle class="st0" cx="24.6" cy="60.1" r="1.7"/>
									<circle class="st0" cx="19.5" cy="58.4" r="1.7"/>
									<circle class="st0" cx="14.9" cy="55.9" r="1.7"/>
									<circle class="st0" cx="10.7" cy="52.6" r="1.7"/>
									<circle class="st0" cx="7.2" cy="48.6" r="1.7"/>
									<circle class="st0" cx="4.5" cy="44.1" r="1.7"/>
									<circle class="st0" cx="2.7" cy="39.1" r="1.7"/>
									<circle class="st0" cx="1.7" cy="33.9" r="1.7"/>
									<circle class="st0" cx="1.7" cy="28.6" r="1.7"/>
									<circle class="st0" cx="2.7" cy="23.4" r="1.7"/>
									<circle class="st0" cx="4.5" cy="18.4" r="1.7"/>
									<circle class="st0" cx="7.2" cy="13.9" r="1.7"/>
									<circle class="st0" cx="10.7" cy="9.9" r="1.7"/>
									<circle class="st0" cx="14.9" cy="6.6" r="1.7"/>
									<circle class="st0" cx="19.5" cy="4.1" r="1.7"/>
									<circle class="st0" cx="24.6" cy="2.4" r="1.7"/>
									<circle class="st0" cx="29.8" cy="1.7" r="1.7"/>
									<circle class="st0" cx="35.1" cy="2" r="1.7"/>
									<circle class="st0" cx="40.3" cy="3.1" r="1.7"/>
									<circle class="st0" cx="45.2" cy="5.2" r="1.7"/>
									<circle class="st0" cx="49.6" cy="8.1" r="1.7"/>
									<circle class="st0" cx="53.4" cy="11.8" r="1.7"/>
									<circle class="st0" cx="56.5" cy="16.1" r="1.7"/>
									<circle class="st0" cx="58.8" cy="20.9" r="1.7"/>
									<circle class="st0" cx="60.3" cy="26" r="1.7"/>
								</g>
								</svg>

							</a> -->
						</div>
					</div>
					@endif
					@if(!empty($image_holder_in_video_box) )
						
					<div class="image-inner-holder">
						<div class="image-holder-one  bg-cover rel" style="background-image:url({{$image_holder_in_video_box['url']}})" >
							
						</div>
					</div>
					@endif
				</div>

			</div>
		</div>
		<div class="features-holder grey-bg flex flex-vhcenter">
		 	<div class="feature-box flex flex-between wrapper-l">
		 		<div class="feature-main-description flex flex-center column">
			 		<div class="main-title title m blue">
						{{$secondary_title}}
					</div>
					<div class="main-description text m blue">
						{{$secondary_description}}
					</div>
			 	</div>
			 	<div class="features flex flex-between">
			 		@foreach($secondary_features as $feature)
					<div class="feature flex column">
						<div class="feature-icon" style="background-image:url({{$feature['second_feature_icon']['url']}})">
							
						</div>
						<div class="flex column">

							<div class="feature-title title s green ">
								{{$feature["second_feature_title"]}}
							</div>
							<div class="feature-description text s green ">
								{{$feature["second_feature_text"]}}
							</div>
						</div>
					</div>
					@endforeach
				</div>
		 	</div>
		 </div> 
	</div>
	<div class="section third flex flex-center column pat">
		<div class="image-blocks-holder flex flex-between wrapper">
			<?php $i=1 ?>
			@foreach($features_with_image as $feature)
			<div class="image-block rel">
				<div class="image-holder bg-cover" style="background-image:url({{$feature['feature_with_image_image']['url']}})">
					
				</div>
				<div class="image-text-holder flex column rel">
					<div class="image-text-holder-title flex">
						<div class="text-number  flex title xxl blue">
							
								<?php echo("<span>0".$i."</span>") ?>
							
							<span>
								.
							</span>
						</div>
						<div class="text-title title s blue">
							{{$feature["feature_with_image_title"]}}
						</div>
					</div>
					<div class="image-text blue text m">
						{{$feature["feature_with_image_text"]}}
					</div>
				</div>
			</div>
			<?php $i++ ?>
			@endforeach
		</div>
		<div class="claim-holder">
			<a href="{{$button_three_url}}" class="claim btn btn-round title s flex flex-vhcenter white rel">
				{{$button_three_text}}
			</a>
		</div>
		<div class="text-holder-one flex-center center">
			<div class="main-title title l blue">
				{{$third_title}}
			</div>
			<div class="main-description text  m blue">
				{{$third_text}}
			</div>
		</div>
		<div class="third-section-benefits flex flex-between wrapper-l">
			@foreach($third_features as $feature)
			<div class="section-benefit-holder flex flex-vhcenter">
				<div class="benefit-icon" style="background-image:url({{$feature['third_feature_icon']['url']}})">
				</div>
				<div class="benefit-text title s blue">
					{{$feature["third_feature_text"]}}
				</div>
			</div>
			@endforeach
			
		</div>


	</div>
	<div class="section fourth flex  flex-vhcenter column">
		<div class="text-holder-two flex-center center">
			<div class="main-title title l blue ">
				{{$fourth_title}}
			</div>
			<div class="main-description text m blue">
				{{$fourth_text}}
			</div>
		</div>
		<div class="claim-holder">
			<a href="{{$button_four_url}}" class="claim btn btn-round title s flex flex-vhcenter white rel">
				{{$button_four_text}}
			</a>
		</div>
	</div>
	<div class="footer flex rel">
		<div class="follow-us flex flex-between abs">
			<span class="title xs grey">
				{{$socials_text}}
			</span>
			<div class="socials flex  flex-between">
				<a href="{{$facebook}}">
					
					<?xml version="1.0" encoding="utf-8"?>
					<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
					<path d="M70,0H20C9,0,0,9,0,20v50c0,11,9,20,20,20h26.4c-0.9,0-1.6-0.7-1.6-1.6v-32H34.7c-0.9,0-1.6-0.7-1.6-1.6V42.2
						c0-0.9,0.7-1.6,1.6-1.6h10.1v-8.8c0-11.5,7.3-19,18.5-19l10,0c0.9,0,1.6,0.7,1.6,1.6v11.8c0,0.9-0.7,1.6-1.6,1.6l-6.7,0
						c-4.6,0-5.5,1.8-5.5,5.4v7.4h11.8c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.5,0.7,0.5,1.1l0,12.7c0,0.9-0.7,1.6-1.6,1.6H61.1v32
						c0,0.9-0.7,1.6-1.6,1.6H70c11,0,20-9,20-20V20C90,9,81,0,70,0z"/>
					</svg>

				</a>
				<a href="{{$linkedin}}">
					
					<?xml version="1.0" encoding="utf-8"?>
					<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
					<g>
						<path d="M49.3,39.7v-0.1c0,0-0.1,0.1-0.1,0.1H49.3z"/>
						<path d="M70,0H20C9,0,0,9,0,20v50c0,11,9,20,20,20h50c11,0,20-9,20-20V20C90,9,81,0,70,0z M25.4,79.3H10V33h15.4V79.3z M17.7,26.7
							h-0.1c-5.2,0-8.5-3.6-8.5-8c0-4.5,3.4-8,8.7-8c5.3,0,8.5,3.5,8.6,8C26.4,23.1,23.1,26.7,17.7,26.7z M80.9,79.3H65.5V54.5
							c0-6.2-2.2-10.5-7.8-10.5c-4.3,0-6.8,2.9-7.9,5.6c-0.4,1-0.5,2.4-0.5,3.8v25.8H33.9c0,0,0.2-41.9,0-46.3h15.4v6.6
							c2-3.1,5.7-7.6,13.9-7.6c10.1,0,17.7,6.6,17.7,20.8V79.3z"/>
					</g>
					</svg>

				</a>
			</div>
		</div>
		
	</div>
</html>
</body>



@endsection
