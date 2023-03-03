$(document).ready(function(){
  $('.carousel.carousel-slider').carousel({fullWidth: true});
 });
     

/* Paralax */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.parallax');
      var instances = M.Parallax.init(elems, options);
    });
    // Or with jQuery
    $(document).ready(function(){
      $('.parallax').parallax();
    });
 /* Slider */
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems, options);
    });
    // Or with jQuery
    $(document).ready(function(){
      $('.slider').slider();
    });
/*Material Box*/
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
    });
    // Or with jQuery
    $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
/* Full Width Slider */
    var instance = M.Carousel.init({
      fullWidth: true
    });
    // Or with jQuery
    $('.carousel.carousel-slider').carousel({
      fullWidth: true
    });
