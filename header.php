<?php
$path = dirname(__FILE__ . '/aat', 2)
?>


<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Attorneys at laws</title>
    <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400"
          rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">

    <link rel="stylesheet" href="/assets/css/helpers.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/practices.css">
    <link rel="stylesheet" href="/assets/css/components/_header.css">
    <!-- Font Awesome -->


</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo">
            <!--<picture>-->
            <!--<img src="/assets/images/logo.jpg" alt="logo">-->
            <!--</picture>-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="/assets/images/logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <div class="nav-menu-container">
        <div class="nav-menu-wrapper">
            <ul class="nav-menu">
                <li class="nav-item" onclick="window.location = '/'">
                    <a href="/" class="nav-link">??????????????</a>
                </li>
                <li class="nav-item nav-item-dropdown" id="practices_navbar">
                    <a role="button" class="nav-link" style="cursor: pointer">????????????????</a>
                    <ul class="nav-dropdown">
                        <li onclick="window.location.href='/pages/representation-in-courts'">
                            <a href="/pages/representation-in-courts">???????????????????????????? ?? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/family-law'">
                            <a href="/pages/family-law">?????????????? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/inheritance-law'">
                            <a href="/pages/inheritance-law">???????????????? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/housing-law'">
                            <a href="/pages/housing-law">?????????????? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/tax-disputes'">
                            <a href="/pages/tax-disputes">?????????????????? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/corporate-law'">
                            <a href="/pages/corporate-law">???????????????????????? ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/contractual-practice'">
                            <a href="/pages/contractual-practice">?????????????????? ????????????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/real-estate'">
                            <a href="/pages/real-estate">??????????????????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/debt-settlement'">
                            <a href="/pages/debt-settlement">???????????????????????? ????????????????????????????</a>
                        </li>
<!--                        <li onclick="window.location.href='/pages/banking-law'">-->
<!--                            <a href="/pages/banking-law">???????????????????? ??????????</a>-->
<!--                        </li>-->
                        <li onclick="window.location.href='/pages/it-law'">
                            <a href="/pages/it-law">IT ??????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/intellectual-property'">
                            <a href="/pages/intellectual-property">???????????????????????????? ??????????????????</a>
                        </li>
                        <li onclick="window.location.href='/pages/migration-law'">
                            <a href="/pages/migration-law">?????????????? ????????????????????????/???????????????????? ??????????</a>
                        </li>
                    </ul>
                    <div id="mySidenav" class="sidenav nav-for-mobile">
                        <a href="#" class="closebtn">&times;</a>
                        <a
                                href="/pages/representation-in-courts"
                                onclick="window.location.href='/pages/representation-in-courts'"
                        >
                            ???????????????????????????? ?? ??????????
                        </a>
                        <a
                                href="/pages/family-law"
                                onclick="window.location.href='/pages/family-law'"
                        >
                            ?????????????? ??????????
                        </a>
                        <a
                                href="/pages/inheritance-law"
                                onclick="window.location.href='/pages/inheritance-law'"

                        >
                            ???????????????? ??????????
                        </a>
                        <a
                                href="/pages/housing-law"
                                onclick="window.location.href='/pages/housing-law'"
                        >?????????????? ??????????</a>
                        <a
                                href="/pages/tax-disputes"
                                onclick="window.location.href='/pages/tax-disputes'"

                        >?????????????????? ??????????</a>
                        <a
                                href="/pages/corporate-law"
                                onclick="window.location.href='/pages/corporate-law'"

                        >???????????????????????? ??????????</a>
                        <a
                                href="/pages/contractual-practice"
                                onclick="window.location.href='/pages/contractual-practice'"

                        >?????????????????? ????????????????</a>
                        <a
                                href="/pages/real-estate"
                                onclick="window.location.href='/pages/real-estate'"

                        >??????????????????????</a>
                        <a
                                href="/pages/debt-settlement"
                                onclick="window.location.href='/pages/debt-settlement'"
                        >???????????????????????? ????????????????????????????</a>
<!--                        <a-->
<!--                                href="/pages/banking-law"-->
<!--                                onclick="window.location.href='/pages/banking-law'"-->
<!---->
<!--                        >???????????????????? ??????????</a>-->
                        <a
                                href="/pages/it-law"
                                onclick="window.location.href='/pages/it-law'"

                        >IT ??????????</a>
                        <a
                                href="/pages/intellectual-property"
                                onclick="window.location.href='/pages/intellectual-property'"

                        >???????????????????????????? ??????????????????</a>
                        <a
                                href="/pages/migration-law"
                                onclick="window.location.href='/pages/migration-law'"
                        >?????????????? ????????????????????????/???????????????????? ??????????</a>
                    </div>
                </li>
                <li
                        class="nav-item"
                        onclick="window.location = '/pages/team'"
                >
                    <a href="/pages/team" class="nav-link">??????????????</a>
                </li>
                <li
                        class="nav-item"
                        onclick="window.location = '/pages/contacts'"
                >
                    <a href="/pages/contacts" class="nav-link">????????????????</a>
                </li>
            </ul>
            <ul class="social">
                <li id="ua_click" class="button_lang current_lang">UA</li>
                <li id="en_click" class="button_lang">EN</li>
            </ul>
        </div>
    </div>
</header>
