$(document).ready(function() {


  var ic_width = $('.info-circle').width();
  $('.info-circle').css({'height':ic_width+'px'});

  var sv_width = $('.serv-circle').width();
  $('.serv-circle').css({'height':sv_width+'px'});




  $(window).resize(function() {
    var ic_width = $('.info-circle').width();
    $('.info-circle').css({'height':ic_width+'px'});

    var sv_width = $('.serv-circle').width();
    $('.serv-circle').css({'height':sv_width+'px'});

    
  });

  var teamImgSize = $('.team-img-fixed').parent().width();
  $('.team-img-fixed').css("width", teamImgSize+'px');

  $('.card').flip({
    trigger: 'hover'
  });

  $(".menu-btn").click(function(){
    var nav = $(".nav-collapse");
    if (nav.hasClass("display")) {
      nav.removeClass("display");

    }
    else {
      nav.addClass("display");

    }
    nav.toggle(500);


  });
	$('.fader').delay(200).css('opacity', 1);
});

$(window).load(function(){

});
