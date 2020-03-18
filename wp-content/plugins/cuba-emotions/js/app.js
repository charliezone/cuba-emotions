(jQuery)($ => {
    $(document).ready(() => {
        
        $('.ce-carousel').slick(
            {
                slidesToShow: 3,
                prevArrow: '<a href="#" class="prev-arrow ce-carousel-arrow tparrows"></a>',
                nextArrow: '<a href="#" class="next-arrow ce-carousel-arrow tparrows"></a>',
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 1,
                        infinite: true,
                        arrows: false,
                        autoplay: true
                      }
                    }
                ]
            }
        );

    });
});