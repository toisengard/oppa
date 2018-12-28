
jQuery(document).ready(function() {

    clickVideo();
     scrollLogo();
     scrolltodiv();
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
function clickVideo(){

	$('#videobtn').on('click', function(ev) {
	  	$("#videobtn").hide();
	  	$("#videobtn").siblings(".video-btn-before").hide();
	 	$("#video").addClass("playing");
	    $("#video")[0].src += "?autoplay=1&mute=1";
  	});
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

    
