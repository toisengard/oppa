
jQuery(document).ready(function() {

    clickVideo();
     scrollLogo();
     scrolltodiv();
     notTransparent();
     changeHeaderOnScroll();
     //youtube()
});
$( window ).resize(function() {
     changeHeaderOnScroll()
  
});

// function language(){
//     jQuery('.language a').click(function(e){
//         var clicked = jQuery(this);
//         if(clicked.hasClass('on')){
//             clicked.removeClass('on')
//             clicked.siblings('.language a').addClass('on');
//         }
//     })
// }


// function onPlayerReady(event) {
//         event.target.playVideo();
//       }
function clickVideo(){


	$('#videobtn').on('click', function(ev) {
	  	
      player.playVideo();
  	});
}
function notTransparent(){
  if(jQuery("#header").hasClass('.not-transparent')){
    
  }else{
    
  }
}
function changeHeaderOnScroll(){
    $("#header").find(".logo").addClass("on");
  if($(window).width() < 1023){
      console.log("naklebia 1023")


        $(window).scroll(function() {

        var scroll = $(window).scrollTop();
        
        if(scroll > 0){
            $('#header').removeClass("transparent").addClass('not-transparent');
            $("#header").find(".logo").removeClass("on");
          $("#header").find(".logo-two").addClass("on");
        }else{
            $('#header').removeClass('not-transparent').addClass("transparent");
            $("#header").find(".logo").addClass("on");
            $("#header").find(".logo-two").removeClass("on");

        }

    });
  }else{
      console.log("metia 1023")

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var div1 = $('#firstscroll').offset().top;
        var div1height = $('#firstscroll').height();
        if(scroll > div1 + div1height - 80){
            $('#header').removeClass("transparent").addClass('not-transparent');
            $("#header").find(".logo").removeClass("on");
          $("#header").find(".logo-two").addClass("on");
        }else{
            $('#header').removeClass('not-transparent').addClass("transparent");
            $("#header").find(".logo").addClass("on");
            $("#header").find(".logo-two").removeClass("on");

        }

    });

  }
}
function scrollLogo(){

        
        jQuery(window).scroll(function(){
            
            if(jQuery(window).scrollTop() >0)
            {
                $.scrollify.move("#secondscroll");
                
            }
            else
            {
            }
        });
    
    
}



window.onload = function() {
  Gifffer();
}

// window.addEventListener('wheel', function(e) {
//   if (e.deltaY < 0) {
//     console.log('scrolling up');
//   }
//   if (e.deltaY > 0) {
//     console.log('scrolling down');
//   }
// });

//Slider Control
  function scrolltodiv(){
  	$.scrollify.move("#secondscroll")
          
  }  
//smooth scrolling

    
