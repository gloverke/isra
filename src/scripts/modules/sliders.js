import $ from 'jquery';

const sliders = name => {
  const sliderHome = $('.slider-home');
  const sliderVideo = $('.slider-video');
  const sliderDetail = $('.slider-detail');
  const gallery = $('.slider-gallery');
  const sliderTitle = $('.slider-title');
  const sliderHistory = $('.slider-history');

  if(sliderHome.length) {
    sliderHome.slick({
      dots: true,
      infinite: true,
      autoplay: true,
      arrows: true,
      speed: 1000,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }

  if(sliderVideo.length) {
    sliderVideo.slick({
      dots: true,
      infinite: true,
      autoplay: true,
      arrows: true,
      speed: 1000,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }

    if(sliderDetail.length) {
    sliderDetail.slick({
        mobileFirst: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      responsive: [
           {
            breakpoint: 767,
            settings: {
              centerMode: true,
              centerPadding: '200px',
              slidesToShow: 1
            }
          },

          {
            breakpoint: 1600,
            settings: {
              centerMode: true,
              centerPadding: '500px',
              slidesToShow: 1
            }
          }
        ]
    });
  }

   if(gallery.length) {

    $(window).on('load', function(e) {
      if(!($(window).width() > 768 && $('.slide-gallery__item').length < 3)) {
        gallery.slick({
          focusOnSelect: true,
          centerMode: true,
          mobileFirst: true,
          centerPadding: '0',
          arrows: true,
          slidesToShow: 1,
          responsive: [

            {
              breakpoint: 768,
              settings: {
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 1
              }
            },

            {
              breakpoint: 1024,
              settings: {
                centerMode: true,
                centerPadding: '250px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 1285,
              settings: {
                centerMode: true,
                centerPadding: '330px',
                slidesToShow: 1
              }
            }
            ]
        });
      }
    });

    $(window).on('resize', function(e) {
      if($(window).width() > 768 && $('.slide-gallery__item').not('.slick-cloned').length < 3) {
        if(gallery.length) {
          gallery.slick('unslick');
        }
      }

      if(!gallery.hasClass('slick-initialized') && $(window).width() <= 768) {
        gallery.slick({
          focusOnSelect: true,
          centerMode: true,
          mobileFirst: true,
          centerPadding: '0',
          arrows: true,
          slidesToShow: 1,
          responsive: [

            {
              breakpoint: 768,
              settings: {
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 1
              }
            },

            {
              breakpoint: 1024,
              settings: {
                centerMode: true,
                centerPadding: '250px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 1285,
              settings: {
                centerMode: true,
                centerPadding: '300px',
                slidesToShow: 1
              }
            }
            ]
        });
      }
    });

  }


  if(sliderTitle.length) {
    sliderTitle.slick({
      variableWidth: true,
      mobileFirst: true,
      arrows: false,
      infinite: true,
      slidesToShow: 3,
      focusOnSelect: true,
      asNavFor: '.slider-history',
      swipeToSlide: true,
       responsive: [
           {
            breakpoint: 1285,
            settings: {
               variableWidth: false,
               slidesToShow: 5,
              slidesToScroll: 1,
            }
          }
        ]
    });
  }

  if(sliderHistory.length) {
    sliderHistory.slick({
      mobileFirst: true,
      arrows: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-title',
       responsive: [
           {
            breakpoint: 767,
            settings: {
              arrows: true,
            }
          }
        ]
    });
  }
};
export default sliders;
