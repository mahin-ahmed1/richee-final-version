jQuery(document).ready(function($){

 
      
      //PROGRESS-BAR PLUGIN RUN

     if ( $.isFunction($.fn.ProgressBar) ) {
        $(".progress-bar").ProgressBar(); 
    }




  //PROGRESS CIRCLE WITH SCROLLING EFFECTS
  if($.isFunction($.fn.circlechart)){
    $(window).on('scroll',function(){
            if($(window).scrollTop()>=600){
            $('.circlechart').circlechart();

      }
      });
  }


  
  //ONE PAGE PLUGIN RUN

  if ( $.isFunction($.fn.onePgaeNav) ){
    
    $('.header-area .menu-item-type-custom .nav-link').onePgaeNav({
      wrapper: '.navbar-nav',
      speed: 400,
    });
  }




  //OWL CAROUSEL FOR TESTIMONIALS

  if ( $.isFunction($.fn.owlCarousel) ){
    
    $(".owl-carousel").owlCarousel({

      autoplay:true,
      autoplayTimeout:4000,
      nav:true,
      items:3,
      responsiveClass:true,
            responsive:{
                // breakpoint from 0 up
                0:{
                    items:1,
                    nav:false,
                    dots:true
                },
                580:{
                  items:1,
                  nav:true,
                  dots:false,
                },
                // breakpoint from 768 up
                768:{
                    items:2,
                    nav:true,
                    dots:false,
                },
                // breakpoint from 1000 up
                1000:{
                    items:3,
                    nav:true,
                    dots:false,
                }
            }
    });

 }


  //Auto filter plugin initialize


if($.isFunction($.fn.autofilter)){
    
    $.autofilter({

      // duration in ms
      duration: 400
      
    });
}
 

//STICKY NAV WITH SCROLLING EFFECTS
 $(window).on('scroll',function(){

  if($(window).scrollTop()>=150 && !$('.header-area').hasClass('sticky')){
   $('.header-area').addClass('sticky');
   $('.sticky').slideDown();
  }


  else if($(window).scrollTop()<=80){
    
   $(".header-area").css("display","");
   if($('.header-area').hasClass('sticky')){
    $('.header-area').removeClass("sticky");
   }
  }

  else if($(window).scrollTop()<150 && $('.header-area').hasClass('sticky')){
  
   $('.header-area').removeClass("sticky");
  }

 });

//TOGGLE MENU SETTINGS

 $('.menu-btn-icon').click(function(){
  $('.nav-bar-area').toggle(400);

 })

$( window ).resize(function() {
     var wid=$(window).width();
     if(wid>992){
      $('.nav-bar-area').removeAttr('style');
     }
});
 


//menu item active class
 $('#menu-primary-menu li .nav-link').click(function(){
    $('li .nav-link').removeClass("active");
    $(this).addClass("active");
});


// Submenu show on hover

$('.nav-item-has-children').hover(function(){
  $(this).find('.sub-menu').first().show();
},function(){
  $(this).find('.sub-menu').first().hide();
  
});

// Submenu show on Focus


$('.nav-item-has-children a').focusin(function(){

  
  $(this).parent().find('.sub-menu').first().css('display','block');

 
  $(this).parent().find('.nav-item .nav-link').last().focusout(function(){
    $(this).closest('.sub-menu').css('display','none');
    $(this).closest('.sub-menu').css('z-index','222');
   $('.sub-menu').css('display','none');
  });


});






$(window).resize(function(){
  
  var display_size = $(window).width();

  if(display_size<988){


    $('.nav-item-has-children').find('.nav-item-has-children').find('.sub-menu').css({'left':'3%','top':'100%','border-top':'1px solid #dde7db'});

  }else{

    $('.nav-item-has-children').find('.nav-item-has-children').find('.sub-menu').css({'left':'-100%','top':'5px'});

  }

});






 //portfolio button active class

 $('.portfolio-button #portfolio-category').click(function(){
  
    $('.portfolio-button #portfolio-category').removeClass("active");

    $(this).addClass("active");
    
});

});
