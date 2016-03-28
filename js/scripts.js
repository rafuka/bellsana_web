$(document).ready(function() {
  $(window).load(function(){
    $('.fader').delay(200).css('opacity', 1);
  });

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

  $(".burgerbtn").click(function(){
    var nav = $(".nav-mobile");

    nav.toggle(500);
    if ($('body').hasClass('no-scroll')) {
      $('body').removeClass('no-scroll');
    }
    else {
      $('body').addClass('no-scroll');
    }

    if ($('.burgerbtn').hasClass('pressed')) {
      $('.burgerbtn').removeClass('pressed');
    }
    else {
      $('.burgerbtn').addClass('pressed');
    }
  });

  if ($(window).scrollTop() < 300) {
    $('.team-img-fixed').css('opacity', 0);
  }


  $(window).scroll(function() {
    if ($(window).scrollTop() < 300) {
      $('.team-img-fixed').css('opacity', 0);
    }

    if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
       $('.team-img-fixed').css('opacity', 0);
    }

    else {
      if (($(window).scrollTop() > 300) && ($(window).scrollTop()  + $(window).height() < $(document).height() - 200)
          && ($('.team-img-fixed').css('opacity') == 0)) {
        $('.team-img-fixed').css('opacity', 1);
      }
    }


  });

});
