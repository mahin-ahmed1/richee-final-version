jQuery(document).ready(function($){


if ( typeof ProgressBar == 'function' ) { 
      
      //PROGRESS-BAR PLUGIN RUN
     $(".progress-bar").ProgressBar(); 
}
  
  
if ( typeof circlechart == 'function') {

  //PROGRESS CIRCLE WITH SCROLLING EFFECTS

 $(window).on('scroll',function(){
        if($(window).scrollTop()>=600){
         $('.circlechart').circlechart();

   }
   });

}


if ( typeof onePgaeNav == 'function') {
  
  //ONE PAGE PLUGIN RUN
 $('.header-area .menu-item-type-custom .nav-link').onePgaeNav({
  wrapper: '.navbar-nav',
  speed: 400,
 });
}


if ( typeof owlCarousel == 'function') {

  //OWL CAROUSEL FOR TESTIMONIALS

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


if ( typeof autofilter == 'function' ) {

  //Auto filter plugin initialize

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
    $(this).parent().parent().css('display','none');
   // $(this).parent().parent().find('.sub-menu').css('display','none');
  });
});






$('.nav-item-has-children').find('.nav-item-has-children').find('.sub-menu').css({'left':'-100%','top':'5px'});



 //portfolio button active class

 $('.portfolio-button #portfolio-category').click(function(){
  
    $('.portfolio-button #portfolio-category').removeClass("active");

    $(this).addClass("active");
    
});

});
