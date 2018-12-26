@extends('pages.master')


@section('content')

	
	<div class="section first vh-100 rel flex column flex-vhcenter">
		<div class="background fullh abs bg-cover" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/background-one.jpg')">
		</div>
		<header class="flex flex-vhcenter header">
			<div class="header-inner-holder flex flex-between flex-vcenter"> 
				<div class="logo rel flex flex-center bg-cover" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/main-logo.png')">
					<a href="" alt=""  class="abs">
					</a>
				</div>

				<div class="language rel flex center" style="">
					<a href="{{$uri}}" alt="" class="title s white on flex flex-vhcenter abs">
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
				<div class="section-benefit-holder   flex flex-vhcenter">
					<div class="benefit-icon" style="background-image:url('{{$main_background["url"]}}')">
					</div>
					<div class="benefit-text text m">
						ფონდი ვიკიმედია, ვიკიპედიის ორგანიზატორი
					</div>
				</div>
				<div class="section-benefit-holder flex flex-vhcenter">
					<div class="benefit-icon" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/value.png'))">
					</div>
					<div class="benefit-text text m">
						მფლობელი კომპანია ასევე ახორციელებს
					</div>
				</div>
				<div class="section-benefit-holder flex flex-vhcenter">
					<div class="benefit-icon" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/value.png'))">
					</div>
					<div class="benefit-text text m">
						პუბლიკაციის სხვა თავისუფალ პროექტებს
					</div>
				</div>
				<div class="section-benefit-holder flex flex-vhcenter">
					<div class="benefit-icon" style="background-image:url('{{ get_template_directory_uri() }}/assets/dist/images/value.png'))">
					</div>
					<div class="benefit-text text m">
						საერთაშორისო უნივერსიტეტი, დისტანციური
					</div>
				</div>
			</div>
			<div class="claim-holder">
				<a href="{{$button_one_url}}" class="claim btn btn-round title s flex flex-vhcenter white rel">
		    		{{$button_one_text}}
				</a>
			</div>
		</div>
	</div>
	<div class="main-content section second flex flex-center column rel pat">
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
						<a href="" class="claim btn btn-round title s flex flex-vhcenter white rel">
							{{$button_two_text}}
						</a>
						
					</div>
				</div>
				<div class="video-holder rel">
					<video controls class="abs" id="video">
					  <source src="./video/grendaizer.mp4" type="video/mp4">
					  Your browser does not support the video tag.
					</video>
					<span class="video-btn-before abs vh-align">
					</span>
					<a class="video-btn abs vh-align flex flex-vhcenter">
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
					<div class="feature flex column">
						<div class="feature-icon" style="background-image:url('./images/features_icon-01.svg')">
							
						</div>
						<div class="feature-title title s green ">
							გიფიქრია ელვირა
						</div>
						<div class="feature-description text s green ">
							ყველა მათგანს უფლება აქვს დაწეროს სტატია ნებისმიერ თემაზე და შეასწოროს სხვის მიერ უკვე დაწერილი სტატია.
						</div>
					</div>
					<div class="feature flex column">
						<div class="feature-icon" style="background-image:url('./images/features_icon-01.svg')">
							
						</div>
						<div class="feature-title title s green ">
							არ მიფიქრია არაფერზე
						</div>
						<div class="feature-description text s green ">
							მეტ ვალდებულებებს აკისრებს, ვიდრე რაიმე უფლებებს ანიჭებს.
						</div>
					</div>
					<div class="feature flex column">
						<div class="feature-icon" style="background-image:url('./images/features_icon-01.svg')">
							
						</div>
						<div class="feature-title title  s green ">
							ვიკიპედიას არ ჰყავს რედაქტორთა
						</div>
						<div class="feature-description text s green ">
							ვიკიპედიას არ ჰყავს რედაქტორთა ცენტრალიზებული შემადგენლობა, მთელი მასალა ივსება მონაწილეების
						</div>
					</div>
				</div>
		 	</div>
		 </div> 
	</div>
	<div class="section third flex flex-center column pat">
		<div class="image-blocks-holder flex flex-between wrapper">
			<div class="image-block rel">
				<div class="image-holder bg-cover" style="background-image:url('./images/1.png')">
					
				</div>
				<div class="image-text-holder flex column rel">
					<div class="image-text-holder-title flex">
						<div class="text-number  flex title xxl blue">
							<span>
								01
							</span>
							<span>
								.
							</span>
						</div>
						<div class="text-title title s blue">
							გიფიქრია ელვირა შეიტანეს
							ქონებაც ამქვეყნად 
						</div>
					</div>
					<div class="image-text blue text m">
						ნარცისიზმში გვიყურებს მემატიანემ მათგან მენტებს, მოტირალენი წევრი ნარცისიზმში გვიყურებს ტიანემ მათგან აბონემენტებს, მოტირალენი წევრი თითი ხლება თითი ნარცისიზმში გვიყურებს მემატიანემ მათგან აბონემენტებს, მოტირალენი წევრი ცისიზმში ყურებს მემატიანემ მათგან.
					</div>
				</div>
			</div>
			<div class="image-block rel">
				<div class="image-holder bg-cover" style="background-image:url('./images/1.png')">
					
				</div>
				<div class="image-text-holder flex column rel">
					<div class="image-text-holder-title flex">
						<div class="text-number flex  title xxl blue">
							<span>
								02
							</span>
							<span>
								.
							</span>
						</div>
						<div class="text-title  title s blue">
							გიფიქრია ელვირა შეიტანეს
							ქონებაც ამქვეყნად 
						</div>
					</div>
					<div class="image-text blue text m">
						ნარცისიზმში გვიყურებს მემატიანემ მათგან მენტებს, მოტირალენი წევრი ნარცისიზმში გვიყურებს ტიანემ მათგან აბონემენტებს, მოტირალენი წევრი თითი ხლება თითი ნარცისიზმში 
					</div>
				</div>
			</div>
			<div class="image-block rel">
				<div class="image-holder bg-cover" style="background-image:url('./images/1.png')">
					
				</div>
				<div class="image-text-holder flex column rel">
					<div class="image-text-holder-title flex">
						<div class="text-number flex  title xxl blue">
							<span>
								03
							</span>
							<span>
								.
							</span>
						</div>
						<div class="text-title  title s blue">
							გიფიქრია ელვირა შეიტანეს
							ქონებაც ამქვეყნად 
						</div>
					</div>
					<div class="image-text blue text m">
						ნარცისიზმში გვიყურებს მემატიანემ მათგან მენტებს, მოტირალენი წევრი ნარცისიზმში გვიყურებს ტიანემ მათგან აბონემენტებს, მოტირალენი წევრი თითი ხლება თითი ნარცისიზმში გვიყურებს მემატიანემ მათგან აბონემენტებს, მოტირალენი წევრი ცისიზმში ყურებს მემატიანემ მათგან.
					</div>
				</div>
			</div>
		</div>
		<div class="claim-holder">
			<a href="" class="claim btn btn-round title s flex flex-vhcenter white rel">
				განაცხადი
			</a>
		</div>
		<div class="text-holder-one flex-center center">
			<div class="main-title title l blue">
				გიფიქრია ელვირა შეიტანეს ქონებაც ამქვეყნად მაგალითად 
			</div>
			
			<div class="main-description text  m blue">
				დღეს ფულის მართვა საკმაოდ დიდი თავის ტკივილია - უამრავი ვალდებულება, დაგროვების ბარათი და მოულოდნელი ტრანზაქცია ცხოვრებას, უბრალოდ
			</div>

		</div>
		<div class="third-section-benefits flex flex-between wrapper-l">
			<div class="section-benefit-holder flex flex-vhcenter">
				<div class="benefit-icon" style="background-image:url('./images/value.png')">
				</div>
				<div class="benefit-text title s blue">
					მფლობელი კომპანია ასევე ახორციელებს ინტერნეტში
				</div>
			</div>
			<div class="section-benefit-holder flex flex-vhcenter">
				<div class="benefit-icon" style="background-image:url('./images/value.png')">
				</div>
				<div class="benefit-text title s blue">
					პუბლიკაციის სხვა თავისუფალ პროექტებს
				</div>
			</div>
			<div class="section-benefit-holder flex flex-vhcenter">
				<div class="benefit-icon" style="background-image:url('./images/value.png')">
				</div>
				<div class="benefit-text title s blue">
					საერთაშორისო უნივერსიტეტი, დისტანციური სწავლებით
				</div>
			</div>
		</div>


	</div>
	<div class="section fourth flex  flex-vhcenter column">
		<div class="text-holder-two flex-center center">
			<div class="main-title title l blue ">
				გიფიქრია ელვირა შეიტანეს ქონებაც ამქვეყნად მაგალითად 
			</div>
			<div class="main-description text m blue">
				დღეს ფულის მართვა საკმაოდ დიდი თავის ტკივილია - უამრავი ვალდებულება, დაგროვების ბარათი და მოულოდნელი ტრანზაქცია ცხოვრებას, უბრალოდ
			</div>
		</div>
		<div class="claim-holder">
			<a href="" class="claim btn btn-round title s flex flex-vhcenter white rel">
				განაცხადი
			</a>
		</div>
	</div>
	<div class="footer flex rel">
		<div class="follow-us flex flex-between abs">
			<span class="title xs grey">
				შემოგვიერთდი
			</span>
			<div class="socials flex  flex-between">
				<a href="">
					
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
				<a href="">
					
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
