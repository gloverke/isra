import $ from 'jquery';

const sliders = name => {
	const sliderHome = $('.slider-home');
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
      gallery.on('afterChange init', function(event, slick, direction){
    // console.log('afterChange/init', event, slick, slick.$slides);
    // remove all prev/next
    $('.prevSlide').removeClass('prevSlide');
    $('.nextSlide').removeClass('nextSlide');
    slick.$slides.removeClass('prevSlide').removeClass('nextSlide');

    // find current slide
    for (var i = 0; i < slick.$slides.length; i++)
    {
        var $slide = $(slick.$slides[i]);
        if ($slide.hasClass('slick-current')) {
            // update DOM siblings
            $slide.prev().addClass('prevSlide');
            $slide.next().addClass('nextSlide');
            break;
        }
    }
  }
)
.on('beforeChange', function(event, slick) {
    // optional, but cleaner maybe
    // remove all prev/next
    $('.prevSlide').removeClass('prevSlide');
    $('.nextSlide').removeClass('nextSlide');
    slick.$slides.removeClass('prevSlide').removeClass('nextSlide');
}).slick({
        centerMode: true,
        mobileFirst: true,
        centerPadding: '20px',
        arrows: true,
        slidesToShow: 1,
        responsive: [
          {
            breakpoint: 560,
            settings: {
              centerMode: true,
              centerPadding: '20px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 1285,
            settings: {
              centerMode: true,
              centerPadding: '180px',
              slidesToShow: 3
            }
          }
          ]
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
