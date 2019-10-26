$(document).ready(function() {
  // Slideshow nav
  $('.workDetail_slideshowBtn').on('click', function() {
    let newSlide = '';
    const totalItems = $('.workDetail_slideshowItem').length;

    if ( $(this).hasClass('workDetail_slideshowBtn--next') ) {
      // Show the next slide or the first slide if we're at the end of the slideshow
      newSlide = $('.workDetail_slideshowItem--active').next().length > 0 ? $('.workDetail_slideshowItem--active').next() : $('.workDetail_slideshowItem')[0];
    } else {
      // Show the previous slide or the last slide if we're at the start of the slideshow
      newSlide = $('.workDetail_slideshowItem--active').prev().length > 0 ? $('.workDetail_slideshowItem--active').prev() : $('.workDetail_slideshowItem')[totalItems - 1];
    }

    $('.workDetail_slideshowItem--active').removeClass('workDetail_slideshowItem--active');
    $(newSlide).addClass('workDetail_slideshowItem--active');
  });
});