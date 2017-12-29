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
        focusOnSelect: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '220px',
                    initialSlide: 0,
                    centerMode: false,
                    focusOnSelect: false,
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
                    focusOnSelect: false,
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
                    focusOnSelect: false,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    $('.contract-tab').on('click', 'a', function() {
        $('.contract-tab a.active').removeClass('active');
        $(this).addClass('active');
        var offerIdValue = $(this).data('form');
        $('.slick-list div.active').hide(); /*DELETE all active from div slick-list*/
        document.getElementById(offerIdValue).style.display = "block";
    });
});
