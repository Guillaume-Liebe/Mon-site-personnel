

  /*Apparitions photo de profil*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".profil").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  /*Apparitions titre de niveau III*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $("h3").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });


  /*Apparitions vignettes images PORTFOLIO*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".col-md-4").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  /*Apparitions vignettes images COMPETENCES*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".col-md-6").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  /*Apparitions vignettes images FORMATION et EXPERIENCE*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".couleur_de_fond").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  /*Apparitions vignettes images FORMATION et EXPERIENCE*/
  $(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $("tbody").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  /*Parallax images
  var parallax = document.querySelector('#immeuble');
  window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = - window.scrollY / 4 + "px";
  });

Parallax
  var parallax_2 = document.querySelector('#galaxie');
  window.addEventListener('scroll', () => {
    parallax_2.style.backgroundPositionY = - window.scrollY / 4 + "px";
  });*/
    
    $(document).ready(function() {

      var getMax = function() {
        return $(document).height() - $(window).height();
      }
    
      var getValue = function() {
        return $(window).scrollTop();
      }
    
      if ('max' in document.createElement('progress')) {
        var progressBar = $('progress');
        
        progressBar.attr({
          max: getMax()
        });
    
        $(document).on('scroll', function() {
          progressBar.attr({
            value: getValue()
          });
        });
    
        $(window).resize(function() {
          
          progressBar.attr({
            max: getMax(),
            value: getValue()
          });
        });
    
      } else {
    
        var progressBar = $('.progress-bar'),
          max = getMax(),
          value, width;
    
        var getWidth = function() {
          
          value = getValue();
          width = (value / max) * 100;
          width = width + '%';
          return width;
        }
    
        var setWidth = function() {
          progressBar.css({
            width: getWidth()
          });
        }
    
        $(document).on('scroll', setWidth);
        $(window).on('resize', function() {
          
          max = getMax();
          setWidth();
        });
      }
    });