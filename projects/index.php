<?php
session_start();
if(isset($_SESSION['user'])){
echo '<div><p style="text-align: center;font-size: xx-large;">Hello, '.$_SESSION['user'] .'</p> </div>';
echo '<div><p style="text-align: center;font-size: xx-large;"><a href="logout.php">Logout</a></p> </div>';
} else {
        header("Location: /login.php");
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML</title>
    <base href="/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Default slick styles-->
    <link rel="stylesheet" type="text/css"
          href="/assets/lib/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="/assets/lib/slick/slick-theme.css"/>
    <!--Styles from production web. version t-mobile.pl-->
    <link rel="stylesheet" type="text/css"
          href="/assets/css/stylescombined2.css">
    <link rel="stylesheet" type="text/css"
          href="/assets/css/style.css">
    <!--Style from old angular module(this style in old version)-->
    <link rel="stylesheet" type="text/css"
          href="/assets/css/offer-css.css">
    <link rel="stylesheet"
          href="/assets/lib/tippy/css/tippy.css">

</head>
<body>
<div id="plans-list">
    <div class="abee-offers-app app-root">
        <!--HEAD MENU START-->
        <div class="criterions">
            <div class="criterions">
                <div class="app-tmo-criterion-offer-type">
                    <div class="offer-type">
                        <a class="offer-type__btn active no-focus" href="javascript:void(0);"
                           data-contract-tab-id="contract-tab-0" tabindex="0">Z
                            urządzeniem</a>
                        <a class="offer-type__btn no-focus" href="javascript:void(0);"
                           data-contract-tab-id="contract-tab-1" tabindex="0">Bez urządzenia</a>
                    </div>
                </div>
                <div class="app-tmo-criterion-contract-tab">
                    <div class="contract-tab" id="contract-tab-0">
                        <a class="contract-tab__btn active no-focus" href="javascript:void(0);" data-form="box-offer-0"
                           tabindex="0">T-Mobile 1 - Bez
                            limitu</a>
                        <a class="contract-tab__btn no-focus" href="javascript:void(0);" data-form="box-offer-1"
                           tabindex="0">Standardowa</a>
                        <a class="contract-tab__btn no-focus" href="javascript:void(0);" data-form="box-offer-2"
                           tabindex="0">Dla przenoszących numer</a>
                        <a class="contract-tab__btn no-focus" href="javascript:void(0);" data-form="box-offer-3"
                           tabindex="0">T-MOBILE 1 NA 36 MIESIĘCY</a>
                    </div>
                    <div class="contract-tab" id="contract-tab-1">
                        <a class="contract-tab__btn active no-focus" href="javascript:void(0);" data-form="box-offer-4"
                           tabindex="0">T-Mobile 1 - Bez
                            limitu</a>
                        <a class="contract-tab__btn no-focus" href="javascript:void(0);" data-form="box-offer-5"
                           tabindex="0">Standardowa</a>
                        <a class="contract-tab__btn no-focus" href="javascript:void(0);" data-form="box-offer-6"
                           tabindex="0">Tylko online</a>
                    </div>
                </div>
            </div>
        </div>
        <!--HEAD MENU END-->
        <div class="offer-boxes">
            <div class="ngx-slick carousel slick-slider">
                <!--List of elements START-->
                <!--# 1 element START-->
                <div class="ngx-slick-elements slick-track" id="box-offer-0">
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> T-MOBILE 1 </span>
                                    <!----><br>
                                    <!----><span class="offer-name__name offer-name__name--sub"> BEZ LIMITU </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE </span>">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 3,1 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">BEZ LIMITU DANYCH</p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">100zł</p>
                                            <p class="btn-right net" data-tariprom="test2" data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39672"
                                       tabindex="0">Dobierz telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> T-MOBILE 1 </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">
                                                80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">
                                                100zł</p>
                                            <p class="btn-right net" data-tariprom="test2"
                                               data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39674">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> 4 MIESIĄCE ZA 1 ZŁ </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">100zł</p>
                                            <p class="btn-right net" data-tariprom="test2" data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39677">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> 4 MIESIĄCE ZA 1 ZŁ </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">100zł</p>
                                            <p class="btn-right net" data-tariprom="test2" data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39677">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--# 1 element END-->


                <!--# 2 element START-->
                <div class="ngx-slick-elements slick-track" role="listbox" id="box-offer-1" style="display: none;">
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> T-MOBILE 1 </span>
                                    <!----><br>
                                    <!----><span class="offer-name__name offer-name__name--sub"> BEZ LIMITU </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title=" W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title=" W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 3,1 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">BEZ LIMITU DANYCH</p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">
                                                80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">
                                                100zł</p>
                                            <p class="btn-right net" data-tariprom="test2"
                                               data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39672"
                                       tabindex="0">Dobierz telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> T-MOBILE 1 </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <p class="net disabled"></p>
                                            <p class="btn-left net" data-tariprom="test1" data-price="80">80zł</p>
                                            <p class="active h1" data-tariprom="test1" data-price="100">100zł</p>
                                            <p class="btn-right net" data-tariprom="test2" data-price="120">120zł</p>
                                            <p class="net" data-tariprom="test3" data-price="140">140zł</p>
                                            <p class="net" data-tariprom="test4" data-price="160">160zł</p>
                                            <p class="net" data-tariprom="test5" data-price="180">180zł</p>
                                            <p class="net disabled"></p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39674">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> 4 MIESIĄCE ZA 1 ZŁ </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">

                                        <div class="group-prices">
                                            <!----><p class="btn-left net hidden">zł</p>
                                            <!---->
                                            <div>
                                                <p class="h1 pink">1zł</p>

                                                <p class="h6">pierwsze 4 miesiące</p>
                                            </div>
                                            <div>
                                                <p class="h1">80zł</p>

                                                <!----><p class="h6"> Pozostałe miesiące</p>
                                            </div>
                                            <!----><p class="btn-right net">100zł</p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39677">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-box">
                        <div class="animated fadeIn">
                            <div class="app-offer-name order1">
                                <div class="offer-name">
                                    <span class="offer-name__name"> 4 MIESIĄCE ZA 1 ZŁ </span>
                                    <!----><br>
                                    <!----><span
                                        class="offer-name__name offer-name__name--sub"> DLA PRZENOSZĄCYCH NUMER </span>
                                </div>
                                <hr>
                            </div>
                            <div class="app-bill-paid order2">
                                <div class="basic-row">
                                    <div><span
                                            class="basic-row__title">ROZMOWY NA NUMERY<br>KOMÓRKOWE I STACJONARNE</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-sms order3"><!---->
                                <div class="basic-row">
                                    <div><span class="basic-row__title">SMS-Y I MMS-Y</span>
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W Polsce oraz w roamingu w UE">
                                    </div>
                                    <span class="basic-row__desc">BEZ LIMITU DANYCH</span>
                                </div>

                                <hr>
                            </div>
                            <div class="app-internet order4"><!---->
                                <div class="basic-row">
                                    <div>
                                        <!---->
                                        <span class="basic-row__title">Internet</span>

                                        <!---->
                                        <img alt="Tooltip - szczegóły składnika oferty" class="basic-row__tip"
                                             src="/assets/img/tip.png"
                                             title="W tym 2,55 GB w UE">
                                    </div>
                                    <div class=" price-wrapper">
                                        <!---->
                                        <p class="basic-row__desc">
                                            BEZ LIMITU DANYCH
                                        </p>
                                        <!---->
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="app-next-button order8">
                                <hr>
                                <div class="offer-name wrapper-main">
                                    <div>
                                        <!----><p class="h3">WYBIERZ OPŁATĘ MIESIĘCZNĄ</p>
                                        <!----><p class="h4">IM WYŻSZA, TYM NIŻSZA CENA TELEFONU NA START</p>
                                    </div>
                                    <div class="price-wrapper">
                                        <div class="group-prices">
                                            <!----><p class="btn-left net hidden">zł</p>
                                            <!---->
                                            <div>
                                                <p class="h1 pink">1zł</p>

                                                <p class="h6">pierwsze 4 miesiące</p>
                                            </div>
                                            <div>
                                                <p class="h1">80zł</p>

                                                <!----><p class="h6"> Pozostałe miesiące</p>
                                            </div>
                                            <!----><p class="btn-right net">100zł</p>
                                        </div>
                                    </div>
                                    <a class="btn" rel="external" tabindex="0"
                                       href="//www.t-mobile.pl/telefony-i-urzadzenia/telefony/cat10019.chtml?addoffer=tariprom_39677">Dobierz
                                        telefon</a>
                                    <p class="h6">Umowa na 24 miesiące</p>
                                </div>
                            </div>
                            <div class="app-bonuses order9">
                                <div class="bonuses">
                                    <span class="bonuses__title">BONUSY</span>
                                    <div class="bonuses__items">
                                        <div class="bonuses__item">
                                            <img alt="Ikona paczki - darmowa dostawa" class="bonuses__icon"
                                                 src="/assets/img/ico-delivery.png">
                                            <span>Darmowa <br> dostawa</span>
                                        </div>
                                        <div class="bonuses__item">
                                            <img alt="Ikona metki cenowej - rabat za zakupy online"
                                                 class="bonuses__icon"
                                                 src="/assets/img/online-shop.png">
                                            <span>Rabat za <br> zakupy online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--# 2 element END-->

                <!--List of elements END-->
            </div>
        </div>
        <next-step>
            <div class="next-step">
                <p class="heading">
                    W dalszym kroku możesz dodatkowo wybrać:
                </p>

                <div class="next-step__icons">
                    <div class="next-step__icons icon"
                         title="<span class='info-tooltip'><strong>Muzyka bez limitu danych</strong><br>To opcja umożliwiająca korzystanie z Tidala i słuchanie internetowych stacji radiowych w smartfonie bez zużywania paczek danych.</span>">
                        <img alt=""
                             src="/assets/img/ico-tidal-all.png">
                    </div>

                    <div class="next-step__icons icon"
                         title="<span class='info-tooltip'><strong>Bezpieczne Surfowanie</strong><br>Ochrona internetu, która ostrzega przed wejściem na zagrożoną wirusem stronę i zabezpiecza Twoje dane.</span>">
                        <img alt=""
                             src="/assets/img/ico-cloud-security-all.png">
                    </div>

                    <div class="next-step__icons icon"
                         title="<span class='info-tooltip'><strong>Norton Mobile Security</strong><br>Na bieżąco skanuje Twoje urządzenie pod kątem występowania wirusów i zapewnia bezpieczeństwo danych.</span>">
                        <img alt=""
                             src="/assets/img/ico-secure-all.png">
                    </div>

                    <div class="next-step__icons icon"
                         title="<span class='info-tooltip'><strong>MyDysk</strong><br>Przestrzeń na Twoje zdjęcia, wiadomości i muzykę. Dzięki MyDysk masz do nich dostęp z dowolnego miejsca na świecie – nawet po zmianie telefonu.</span>">
                        <img alt=""
                             src="/assets/img/ico-mydysk-all.png">
                    </div>

                    <div class="next-step__icons icon"
                         title="<span class='info-tooltip'><strong>Nawigacja T-Mobile</strong><br>Nawigacja, która szybko i bez korków doprowadzi Cię do celu. Aplikacja nie zużywa pakietów danych.</span>">
                        <img alt=""
                             src="/assets/img/icon-nav-all.png">
                    </div>
                </div>
            </div>
        </next-step>
        <!---->
        <documents>
            <section class="documents">
                <div class="documents__heading">
                    <div>
                        <p class="heading">Dokumenty do pobrania</p>

                    </div>

                    <div class="icon-arrow-down-alt" style="transform: rotate(0deg);"></div>
                </div>
                <hr>
                <!---->
            </section>
        </documents>
    </div>
</div>
<script src="/assets/lib/tippy/js/tippy.min.js"></script>

<!-- jquery-3.2.1 -->
<script type="text/javascript"
        src="/assets/lib/jquery-3.2.1/jquery-3.2.1.min.js"></script>
<!--This plugin for migrating old jquery version to a new version.
This plugin activate dev output console in browser.
You should see a some capability errors(listeners etc.)
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<script type="text/javascript"
        src="/assets/lib/slick/slick.min.js"></script>
<!--Slick configuration file-->
<script type="text/javascript"
        src="/assets/js/app-config.js"></script>

</body>
</html>
