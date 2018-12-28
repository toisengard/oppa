
jQuery(document).ready(function() {

    clickVideo();
     scrollLogo()
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
	  	alert('clicked');
	  	$("#videobtn").hide();
	  	$("#videobtn").siblings(".video-btn-before").hide();
 	$("#video").addClass("playing");
    $("#video")[0].src += "?autoplay=1";
    ev.preventDefault();
 
  });
}

function scrollLogo(){

        
        jQuery(window).scroll(function(){
            
            if(jQuery(window).scrollTop() >0)
            {
                jQuery('.header').removeClass('transparent').addClass('not-transpare');
                
            }
            else
            {
                jQuery('.header').removeClass('not-transparent').addClass('transparent');
            }
        });
    
    
}