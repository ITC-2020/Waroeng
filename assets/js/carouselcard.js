$(document).ready(function() {
  // UNTUK MANIPULASI HEART FAVOURITE
  // $('.favourite-icon').click().each(function (e) {
  //   $(this)[e].addClass('fa');
  // })

  // UNTUK CAOUSEL CARD
  $('#recipeCarousel').carousel({
    interval: false
  })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
          next = $(this).siblings(':first');
          console.log("Next length : " + !  next.length);
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });
})