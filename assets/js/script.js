$(function(){

  /*== smooth scroll ====================*/
  var headerHeight = $('.header').outerHeight();
  var urlHash = location.hash;
  if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({scrollTop:position}, 500);
    }, 100);
  }
  $('a[href^="#"],area[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500);
  });

  /*== header ====================*/
  var mvHeight = $('.section-mv').height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > mvHeight) {
      $(".header").css('border-bottom','1px solid #103A7D');
    } else {
      $(".header").css('border-bottom','none');
    }
  });

  /*== drawer ====================*/
  $(".menuTrigger").on('click',function(){
    $(this).toggleClass("menuTrigger--active");
    $(".drawer").stop().fadeToggle();
  });
  $(".drawer a").on('click',function(){
    $(".menuTrigger").toggleClass("menuTrigger--active");
    $(".drawer").stop().fadeToggle();
  });

  /*== faq ====================*/
  $(".faq").on('click',function(){
    $(this).children(".faq__question").children(".switchIcon").stop().toggleClass("switchIcon--active");
    $(this).children(".faq__answer").stop().slideToggle();
  });

  /*== form ====================*/
  $(".item__select").on('click',function(){
    $(this).css("color","#212121");
  });

  /*== plugin ====================*/
  // swiper
  var mySwiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 14,
    pagination: {
    	el: '.swiper-pagination',
    	type: 'bullets',
    	clickable: true
  	},
    navigation: {
  		nextEl: '.swiper-button-next',
  		prevEl: '.swiper-button-prev'
	  },
    breakpoints: {
  		640: {
  			slidesPerView: 1,
  			spaceBetween: 0
  		}
	  },
  });
  // jQuery RWD Image Maps
  $('img[usemap]').rwdImageMaps();
  // DateTimePicker
  $.datetimepicker.setLocale('ja');
  $('#reserve01,#reserve02').datetimepicker({
    minDate: 0,
    step:30,
  });

// end function
});
