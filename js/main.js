$(document).ready(function(){
  var touch = $('#touch-menu');
  var menu = $('.menu');

  $(touch).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  })
  $(window).resize(function(){
    var wid = $(window).width();
    if(wid > 760 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });
  var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        bulletClass: 'swiper-pagination-dots',
        bulletActiveClass: 'swiper-pagination-dots-active',
      },
    });
});

