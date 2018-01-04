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
                    arrows: true,
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
                    arrows: true,
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
                    arrows: true,
                    dots: true
                }
            }
        ]
    });


    tippy('.basic-row__tip', {
        theme: 'light',
        arrow: true,
        size: 'big',
        arrowSize: 'big',
        animation: 'fade',
        delay: [120, 120]
    });

    tippy('.next-step__icons .icon', {
        theme: 'light',
        arrow: true,
        size: 'big',
        arrowSize: 'big',
        animation: 'fade',
        delay: [120, 120]
    });

    /*****************Btn-right navigation functionality******************/
    $(document).on('click', "p.btn-right", function () {
        $(this).removeClass();
        $(this).addClass("net active h1");

        $(this).prev().removeClass();
        $(this).prev().addClass("net btn-left");


        $(this).next().addClass("btn-right");
        $('.btn-left').prevAll().removeClass("btn-left")
    });
    /*****************Btn-right navigation functionality******************/


    /*****************Btn-left navigation functionality******************/
    $(document).on('click', "p.btn-left", function () {
        $(this).removeClass("btn-left");
        $(this).addClass("active h1");

        $(this).next().removeClass("active h1");
        $(this).prev().addClass("btn-left");

        $(this).next().addClass("net btn-right");
        $('.btn-right').nextAll().removeClass("btn-right")


    });
    /*****************Btn-left navigation functionality******************/

    /*****************HEAD MENU START******************/

    $('.offer-type').on('click', 'a', function () {
        $('.offer-type a.active').removeClass('active');
        $(this).addClass('active');
        /*Get contract <div> - id */
        var contract_tab1 = $(this).data('contract-tab-id');
        /*Delete style visibility for all div*/
        $("div.app-tmo-criterion-contract-tab div.contract-tab").removeAttr("style");
        $("div.app-tmo-criterion-contract-tab div.contract-tab").css("display", "none");
        /*Set visibility flex = visible*/
        document.getElementById(contract_tab1).style.display = 'flex';
    });
    /*****************HEAD MENU END******************/


    /*****************HEAD-SUB MENU START******************/
    $('.contract-tab').on('click', 'a', function () {
        $('.contract-tab a.active').removeClass('active');
        $(this).addClass('active');
        var offerBoxIdValue = $(this).data('form');
        $('div.ngx-slick div.ngx-slick-elements /*div.slick-list*/').css("display", "none");
        document.getElementById(offerBoxIdValue).style.display = "block";
        /*
        * @This parameter call action {jquery} "refresh"
        * !All slick* elements will be inspected and re-injected(resizable) -> new wight
        * */
        $('.ngx-slick-elements').slick("refresh");


    });
    /*****************HEAD-SUB MENU END******************/


    /*****************SINGLETON INITIAL JS CODE******************/
    /*
    * @First initial
    * */
    $(function () {
        $("div.app-tmo-criterion-contract-tab div.contract-tab").css("display", "none");
        var criterionContractTab = $('.app-tmo-criterion-contract-tab');
        criterionContractTab.find('div:first-child').css("display", "flex");
        $("div.offer-boxes").removeAttr("style");
    });
});