// BACK TO TOP BUTTON

$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.btt').fadeIn();
    } else {
      $('.btt').fadeOut();
    }
  });
  $('.btt').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});
