<?php
    session_start();
    $trueLogin = 'admin';
    $truePass = 'cSqYC2sk';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Attorneys at laws</title>
    <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/slick.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/slick-theme.css">

    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/helpers.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/style.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/practices.css">
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/css/components/_header.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/fontawesome-free/css/all
    .min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/toastr/toastr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo">
            <picture>
                <img src="<?php $_SERVER[DOCUMENT_ROOT]?>/aat/assets/images/logo.jpg" alt="logo">
            </picture>
        </a>
        <?php
            if($_SESSION['login'] === $trueLogin && $_SESSION['pass'] === $truePass){
        ?>
            <div style="position: absolute; right: 0; top: 0; text-align: right;">
                <a class="nav-link" href="admin/adminPanel" role="button">Вернутись в адмін панель</a>
                <p style="font-size: .5rem">Ви авторизовані як адмін</p>
            </div>
            <?php } ?>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <div class="nav-menu-container">
        <div class="nav-menu-wrapper">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/aat/" class="nav-link">Головна</a>
                </li>
                <li class="nav-item nav-item-dropdown">
                    <a role="button" class="nav-link" style="cursor: pointer">Практики</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="/aat/pages/representation-in-courts">Представництво в судах</a>
                        </li>
                        <li>
                            <a href="/aat/pages/family-law">Сімейне право</a>
                        </li>
                        <li>
                            <a href="/aat/pages/inheritance-law">Спадкове право</a>
                        </li>
                        <li>
                            <a href="/aat/pages/housing-law">Житлове право</a>
                        </li>
                        <li>
                            <a href="/aat/pages/tax-disputes">Податкові спори</a>
                        </li>
                        <li>
                            <a href="/aat/pages/corporate-law">Корпоративне право</a>
                        </li>
                        <li>
                            <a href="/aat/pages/contractual-practice">Договірна практика</a>
                        </li>
                        <li>
                            <a href="/aat/pages/real-estate">Нерухомість</a>
                        </li>
                        <li>
                            <a href="/aat/pages/debt-settlement">Врегулювання заборгованості</a>
                        </li>
                        <li>
                            <a href="/aat/pages/banking-law">Банківське право</a>
                        </li>
                        <li>
                            <a href="/aat/pages/intellectual-property">Інтелектуальна власність</a>
                        </li>
                        <li>
                            <a href="/aat/pages/migration-law">Послуги нерезидентам/міграційне право</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/aat/pages/team" class="nav-link">Команда</a>
                </li>
                <li class="nav-item">
                    <a href="/aat/pages/contacts" class="nav-link">Контакти</a>
                </li>
            </ul>
        </div>
    </div>
</header>