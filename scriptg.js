function galeria() {
  $(".gallery img").each(function() {
    var x = $(this).offset().left - $(window).scrollLeft();
    var y = $(this).offset().top - $(window).scrollTop();
    $(this).click(function() {
      $(this).addClass("grande").css({
        'left': x,
        'top': y
      });
      var ancho = $(this).width();
      var alto = $(this).height();
      $(this).next(".placeholder").addClass('activ').css({
        'width': ancho,
        'height': alto
      });
      $("#tapame").addClass("abierto");
    });
  });
}

$(window).on("load", function(e) {
  $(".gallery img").each(function() {
    $(this).after("<div class='placeholder'/>");
  });
  $("#tapame").click(function() {
    $(".gallery img").removeClass("grande");
    $(".placeholder").removeClass('activ');
    $(this).removeClass("abierto");
  });
  $(".spinner").fadeOut(300);
  galeria();
});

$(window).on("scroll resize", function(e) {
  galeria();
});