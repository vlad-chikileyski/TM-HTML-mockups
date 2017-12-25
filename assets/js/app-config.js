$(document).ready(function () {
    $('.slick-track').slick({
        slidesToShow: 3,
        initialSlide: 0,
        centerMode: false,
        infinite: true,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<img  class="arrow-prev-l" alt="Next button - move to next slide" src="https://s3.eu-central-1.amazonaws.com/abee.execon.pl/p/resources/TMobile/AngularFixer/img/prev.png">',
        nextArrow: '<img  class="arrow-next-r" alt="Previous button - move to previous slide" src="https://s3.eu-central-1.amazonaws.com/abee.execon.pl/p/resources/TMobile/AngularFixer/img/next.png">',
        focusOnSelect: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '220px',
                    initialSlide: 0,
                    centerMode: false,
                    focusOnSelect: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '100px',
                    centerMode: false,
                    initialSlide: 0,
                    arrows: false,
                    focusOnSelect: true,
                    dots: true
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '80px',
                    initialSlide: 0,
                    centerMode: false,
                    focusOnSelect: true,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
});
