$(document).ready(function() {

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
