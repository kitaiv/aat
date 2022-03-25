<?php
$path = dirname(__FILE__ . '/aat', 2)
?>


<!DOCTYPE html>
<html lang="en">
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
                <div class="row do-not-center">
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
                <li class="nav-item" onclick="window.location = '/en/'">
                    <a href="/en/" class="nav-link">Home</a>
                </li>
                <li class="nav-item nav-item-dropdown" id="practices_navbar">
                    <a role="button" class="nav-link" style="cursor: pointer">Practices</a>
                    <ul class="nav-dropdown">
                        <li onclick="window.location.href='/en/pages/representation-in-courts'">
                            <a href="/en/pages/representation-in-courts">Representation in courts</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/family-law'">
                            <a href="/en/pages/family-law">Family law</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/inheritance-law'">
                            <a href="/en/pages/inheritance-law">Inheritance law</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/housing-law'">
                            <a href="/en/pages/housing-law">Housing law</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/tax-disputes'">
                            <a href="/en/pages/tax-disputes">Tax disputes</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/corporate-law'">
                            <a href="/en/pages/corporate-law">Corporate law</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/contractual-practice'">
                            <a href="/en/pages/contractual-practice">Contractual practice</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/real-estate'">
                            <a href="/en/pages/real-estate">Real estate</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/debt-settlement'">
                            <a href="/en/pages/debt-settlement">Debt settlement</a>
                        </li>
<!--                        <li onclick="window.location.href='/en/pages/banking-law'">-->
<!--                            <a href="/en/pages/banking-law">Banking law</a>-->
<!--                        </li>-->
<!--                        <li onclick="window.location.href='/en/pages/it-law'">-->
<!--                            <a href="/en/pages/it-law">IT law</a>-->
<!--                        </li>-->
                        <li onclick="window.location.href='/en/pages/intellectual-property'">
                            <a href="/en/pages/intellectual-property">Intellectual Property</a>
                        </li>
                        <li onclick="window.location.href='/en/pages/migration-law'">
                            <a href="/en/pages/migration-law">Services for non-residents/migration law</a>
                        </li>
                    </ul>
                    <div id="mySidenav" class="sidenav nav-for-mobile">
                        <a href="#" class="closebtn">&times;</a>
                        <a
                                href="/en/pages/representation-in-courts"
                                onclick="window.location.href='/en/pages/representation-in-courts'"
                        >
                            Representation in courts
                        </a>
                        <a
                                href="/en/pages/family-law"
                                onclick="window.location.href='/en/pages/family-law'"
                        >
                            Family law
                        </a>
                        <a
                                href="/en/pages/inheritance-law"
                                onclick="window.location.href='/en/pages/inheritance-law'"

                        >
                            Inheritance law
                        </a>
                        <a
                                href="/en/pages/housing-law"
                                onclick="window.location.href='/en/pages/housing-law'"
                        >Housing law</a>
                        <a
                                href="/en/pages/tax-disputes"
                                onclick="window.location.href='/en/pages/tax-disputes'"

                        >Tax disputes</a>
                        <a
                                href="/en/pages/corporate-law"
                                onclick="window.location.href='/en/pages/corporate-law'"

                        >Corporate law</a>
                        <a
                                href="/en/pages/contractual-practice"
                                onclick="window.location.href='/en/pages/contractual-practice'"

                        >Contractual practice</a>
                        <a
                                href="/en/pages/real-estate"
                                onclick="window.location.href='/en/pages/real-estate'"

                        >Real estate</a>
                        <a
                                href="/en/pages/debt-settlement"
                                onclick="window.location.href='/en/pages/debt-settlement'"
                        >Debt settlement</a>
<!--                        <a-->
<!--                                href="/en/pages/banking-law"-->
<!--                                onclick="window.location.href='/en/pages/banking-law'"-->
<!---->
<!--                        >Banking law</a>-->
<!--                        <a-->
<!--                                href="/en/pages/it-law"-->
<!--                                onclick="window.location.href='/en/pages/it-law'"-->
<!---->
<!--                        >IT law</a>-->
                        <a
                                href="/en/pages/intellectual-property"
                                onclick="window.location.href='/en/pages/intellectual-property'"

                        >Intellectual Property</a>
                        <a
                                href="/en/pages/migration-law"
                                onclick="window.location.href='/en/pages/migration-law'"
                        >Services for non-residents/migration law</a>
                    </div>
                </li>
                <li
                        class="nav-item"
                        onclick="window.location = '/en/pages/team'"
                >
                    <a href="/en/pages/team" class="nav-link">Team</a>
                </li>
                <li
                        class="nav-item"
                        onclick="window.location = '/en/pages/contacts'"
                >
                    <a href="/en/pages/contacts" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="social">
                <li id="ua_click" class="button_lang current_lang">UA</li>
                <li id="en_click" class="button_lang">EN</li>
            </ul>
        </div>
    </div>
</header>
