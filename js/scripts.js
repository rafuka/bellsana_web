$(document).ready(function() {

  

  var ic_width = $('.info-circle').width();
  $('.info-circle').css({'height':ic_width+'px'});

  var sv_width = $('.serv-circle').width();
  $('.serv-circle').css({'height':sv_width+'px'});

  var fontSize = (parseInt($('.info-circle').height()) * 0.15) + "px";
  $('.info-circle p').css('font-size', fontSize);

  $(window).resize(function() {
    var ic_width = $('.info-circle').width();
    $('.info-circle').css({'height':ic_width+'px'});

    var sv_width = $('.serv-circle').width();
    $('.serv-circle').css({'height':sv_width+'px'});

    var fontSize = (parseInt($('.info-circle').height()) * 0.15) + "px";
    $('.info-circle p').css('font-size', fontSize);
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
});

$(window).load(function(){

});
