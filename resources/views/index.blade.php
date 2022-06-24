<?php


?>
<!doctype html>
<html lang="ru">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Laravel 9, пэт-проект по созданию блога</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">


</head>

<body>

    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="binduz-er-news-off_canvars_overlay"></div>
    <div class="binduz-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="binduz-er-news-offcanvas_menu_wrapper">
                        <div class="binduz-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="binduz-er-news-header-social">
                            <ul class="text-center">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Skype</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children binduz-er-news-active">
                                    <a href="#">Главная</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="archived.html">Архивировано</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="author.html">Автор</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#">Детали блога</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="about-us.html">О нас</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="contact.html">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                            <div class="binduz-er-news-logo text-center mb-30 mt-30">
                                <a href="index.html">
                                    <img src="{{ asset('/assets/images/logo.png') }}" alt="">
                                </a>
                            </div>
                            <p>Я Михал Шкваренина, многопрофильный дизайнер, в настоящее время работающий в Wild в качестве внештатного дизайнера.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i> +7 920 445 45 98</li>
                                <li><i class="fas fa-home"></i> ул. Казакова, 28, Москва</li>
                                <li><i class="fas fa-envelope"></i> hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->

    <!--====== SEARCH PART START ======-->

    <div class="binduz-er-news-search-box">
        <div class="binduz-er-news-search-header">
            <div class="container mt-60">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('/assets/images/logo-4.png') }}" alt=""> <!-- search title -->
                    </div>
                    <div class="col-6">
                        <div class="binduz-er-news-search-close float-end">
                            <button class="binduz-er-news-search-close-btn">Закрыть <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="binduz-er-news-search-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="binduz-er-news-search-form">
                            <form action="#">
                                <input type="text" placeholder="Search for Products">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <!--====== SEARCH PART ENDS ======-->

    <!--====== BINDUZ TOP HEADER PART START ======-->

    <div class="binduz-er-top-header-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-headline">
                        <p><span><i class="fas fa-bolt"></i> Актуальные новости:</span> <a href="#">Миранда халим заразилась вирусом после окончания своей тренировки.</a></p>
                        <p><span><i class="fas fa-bolt"></i> Актуальные новости:</span> <a href="#">Празднование Азиатско Тихоокеанского американского искусства и культуры</a></p>
                        <p><span><i class="fas fa-bolt"></i> Актуальные новости:</span> <a href="#">В честь Месяца американского наследия в Азиатско Тихоокеанском регионе в Google</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-social d-flex justify-content-end align-items-center">
                        <div class="binduz-er-news-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-subscribe-btn">
                            <a class="binduz-er-main-btn" href="#">Подписаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ TOP HEADER PART ENDS ======-->

    <!--====== BINDUZ HEADER PART START ======-->

    <header class="binduz-er-header-area">
        <div class="binduz-er-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="/"><img src="{{ asset('/assets/images/logo.png') }}" alt=""></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/">Главная<i class="fa"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="archived.html">Архивировано</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="author.html">Автор</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Детали блога<i class="fa"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">О нас</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Контакты</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="binduz-er-navbar-btn d-flex">
                                    <div class="binduz-er-widget d-flex">
                                        <a class="binduz-er-news-search-open" href="#"><i class="far fa-search"></i></a>
                                        <a href="#"><i class="far fa-user"></i></a>
                                    </div>
                                    <span class="binduz-er-toggle-btn binduz-er-news-canvas_open d-block d-lg-none">
                                        <i class="fal fa-bars"></i>
                                    </span>
                                </div>
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>

    <!--====== BINDUZ HEADER PART ENDS ======-->

    <!--====== BINDUZ HERO PART START ======-->

    <div class="hero-slide-active">

        <?php

        require_once __DIR__ . '/../../../app/Models/Category.php';
        require_once __DIR__ . '/../../../app/Models/Users.php';

        foreach ($ResultReadPost as $post) { ?>

            <div class="binduz-er-hero-area d-flex align-items-center">
                <div class="binduz-er-bg-cover carousel_bg">
                    <style>
                        .carousel_bg {
                            background-image: url(<?= $post['img_big'] ?>) !important;
                        }
                    </style>
                </div>
                <?php

                $category_id = $post['category_id'];

                $ResultReadCategoryByCategoryId = new \Models\Category;
                $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                foreach ($ResultReadCategoryByCategoryId as $category) {
                }

                $author_id = $post['author_id'];
                $ResultReadAuthorByAuthorId = new \Models\Users;
                $ResultReadAuthorByAuthorId = $ResultReadAuthorByAuthorId->read_author_by_author_id($author_id);
                foreach ($ResultReadAuthorByAuthorId as $author) {
                }
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="binduz-er-hero-news-content">
                                <div class="binduz-er-hero-meta">
                                    <div class="binduz-er-meta-category">
                                        <a href="#"><?= $category['name'] ?></a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                    </div>
                                </div>
                                <div class="binduz-er-hero-title">
                                    <h3 class="binduz-er-title"><a href="#"><?= $post['title'] ?></a></h3>
                                </div>
                                <div class="binduz-er-meta-author">
                                    <div class="binduz-er-author">
                                        <img src="<?= $author['img'] ?>" alt="">
                                        <?= $author['name'] ?></span></span>
                                    </div>
                                    <div class="binduz-er-meta-list">
                                        <ul>
                                            <li><i class="fal fa-eye"></i> 5k</li>
                                            <li><i class="fal fa-heart"></i> 5k</li>
                                            <li><i class="fal fa-comments"></i> 5k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="binduz-er-hero-weather d-flex justify-content-end">
                                <div class="binduz-er-weather-item">
                                    <img src="{{ asset('/assets/images/icon/icon-1.png') }}" alt="">
                                    <h5 class="binduz-er-title">Мельбурн</h5>
                                    <span>31°C / 25 - 32°C</span>
                                </div>
                                <div class="binduz-er-weather-item">
                                    <img src="{{ asset('/assets/images/icon/icon-2.png') }}" alt="">
                                    <h5 class="binduz-er-title">Нью-Йорк</h5>
                                    <span>31°C / 25 - 32°C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

    <div class="hero-portal-area">
        <div class="binduz-er-hero-news-portal hero-portal-active">

            <?php foreach ($ResultReadPost as $post) { ?>
                <div class="binduz-er-news-portal-item">
                    <div class="binduz-er-thumb">
                        <a href="#"><img src="<?= $post['img_small'] ?>" alt=""></a>
                    </div>
                    <div class="binduz-er-content">
                        <div class="binduz-er-post-meta-date">
                            <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                        </div>
                        <h4 class="binduz-er-title"><a href="#"><?= $post['title'] ?></a></h4>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <!--====== BINDUZ HERO PART ENDS ======-->

    <!--====== BINDUZ TRENDING PART START ======-->

    <section class="binduz-er-trending-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="binduz-er-trending-news-topbar d-block d-md-flex justify-content-between align-items-center">
                        <div class="binduz-er-trending-box">
                            <div class="binduz-er-title">
                                <h3 class="binduz-er-title">Актуальные новости</h3>
                                <style>
                                    .binduz-er-title::before {
                                        content: inherit !important;
                                    }
                                </style>
                            </div>
                        </div>

                        <div class="binduz-er-news-tab-btn d-flex justify-content-md-end justify-content-start">
                            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Все</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Путешествия</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-3-tab" data-bs-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Мода</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-4-tab" data-bs-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Здоровье</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-5-tab" data-bs-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">Природа</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="binduz-er-trending-news-list">
                                <div class="tab-content mt-50" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{ asset('/assets/images/trending-thumb.png') }}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">Миссия ди-джея - рассказывать истории американцев азиатского происхождения, трек за треком</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Оживите культовых японских персонажей с помощью</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Приготовьтесь к большой голливудской ночи вместе с Google</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Выявляйте дезинформацию в Интернете с помощью этих советов</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{ asset('/assets/images/trending-thumb.png') }}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">Миссия ди-джея - рассказывать истории американцев азиатского происхождения, трек за треком</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Оживите культовых японских персонажей с помощью</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Приготовьтесь к большой голливудской ночи вместе с Google</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Выявляйте дезинформацию в Интернете с помощью этих советов</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{ asset('/assets/images/trending-thumb.png') }}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">Миссия ди-джея - рассказывать истории американцев азиатского происхождения, трек за треком</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Оживите культовых японских персонажей с помощью</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Приготовьтесь к большой голливудской ночи вместе с Google</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Выявляйте дезинформацию в Интернете с помощью этих советов</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{ asset('/assets/images/trending-thumb.png') }}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">Миссия ди-джея - рассказывать истории американцев азиатского происхождения, трек за треком</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Оживите культовых японских персонажей с помощью</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Приготовьтесь к большой голливудской ночи вместе с Google</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Выявляйте дезинформацию в Интернете с помощью этих советов</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="{{ asset('/assets/images/trending-thumb.png') }}" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="#">Миссия ди-джея - рассказывать истории американцев азиатского происхождения, трек за треком</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-news-share">
                                                                <a href="#"><i class="fal fa-share"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="binduz-er-trending-news-list-item">
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Оживите культовых японских персонажей с помощью</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Приготовьтесь к большой голливудской ночи вместе с Google</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="binduz-er-trending-news-list-box">
                                                        <div class="binduz-er-thumb">
                                                            <img src="{{ asset('/assets/images/trending-news-list-thumb-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="binduz-er-content">
                                                            <div class="binduz-er-meta-item">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="#">Технология</a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                                                </div>
                                                            </div>
                                                            <div class="binduz-er-trending-news-list-title">
                                                                <h4 class="binduz-er-title"><a href="#">Выявляйте дезинформацию в Интернете с помощью этих советов</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-12">
                    <div class="binduz-er-sidebar-categories">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Категории</h4>
                        </div>
                        <div class="binduz-er-categories-list">
                            <div class="binduz-er-item">
                                <a href="#">
                                    <span>Путешествия</span>
                                    <span class="binduz-er-number">02</span>
                                </a>
                            </div>
                            <div class="binduz-er-item">
                                <a href="#">
                                    <span>Мода</span>
                                    <span class="binduz-er-number">04</span>
                                </a>
                            </div>
                            <div class="binduz-er-item">
                                <a href="#">
                                    <span>Развлечения</span>
                                    <span class="binduz-er-number">01</span>
                                </a>
                            </div>
                            <div class="binduz-er-item">
                                <a href="#">
                                    <span>Здоровье</span>
                                    <span class="binduz-er-number">08</span>
                                </a>
                            </div>
                            <div class="binduz-er-item">
                                <a href="#">
                                    <span>Природа</span>
                                    <span class="binduz-er-number">06</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ TRENDING PART ENDS ======-->

    <!--====== BINDUZ FEATURED PART START ======-->

    <section class="binduz-er-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="binduz-er-featured-slider mt-30">
                        <div class="binduz-er-featured-title">
                            <h3 class="binduz-er-title">Рекомендуемое</h3>
                        </div>
                        <div class="binduz-er-featured-slider-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/feature-news-thuimb.jpg') }}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Технология</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Послушайте истории педагогов на этой Неделе благодарности учителям</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/feature-news-thuimb-2.jpg') }}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#">Технология</a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов в этом</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="binduz-er-trending-news-item mb-30">
                        <img src="{{ asset('/assets/images/featured-trending-thumb-1.jpg') }}" alt="">
                        <div class="binduz-er-trending-news-overlay">
                            <div class="binduz-er-trending-news-meta">
                                <div class="binduz-er-meta-categories">
                                    <a href="#">Технология</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                </div>
                                <div class="binduz-er-trending-news-title">
                                    <h3 class="binduz-er-title"><a href="#">Мусор для сокровищ: как Google думает о деконструкции</a></h3>
                                </div>
                            </div>
                            <div class="binduz-er-news-share">
                                <a href="#"><i class="fal fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-trending-news-item mb-30">
                        <img src="{{ asset('/assets/images/featured-trending-thumb-2.jpg') }}" alt="">
                        <div class="binduz-er-trending-news-overlay">
                            <div class="binduz-er-trending-news-meta">
                                <div class="binduz-er-meta-categories">
                                    <a href="#">Технология</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                </div>
                                <div class="binduz-er-trending-news-title">
                                    <h3 class="binduz-er-title"><a href="#">Весенний показ мод в Мичиганском университете начался.</a></h3>
                                </div>
                            </div>
                            <div class="binduz-er-news-share">
                                <a href="#"><i class="fal fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-sidebar-social">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Социальная лента</h4>
                        </div>
                        <div class="binduz-er-social-list">
                            <div class="binduz-er-list">
                                <a href="#">
                                    <span><i class="fab fa-facebook-f"></i> <span>15000</span> Лайков</span>
                                    <span>Лайк</span>
                                </a>
                                <a href="#">
                                    <span><i class="fab fa-twitter"></i> <span>15000</span> Лайков</span>
                                    <span>Tweet</span>
                                </a>
                                <a href="#">
                                    <span><i class="fab fa-behance"></i> <span>5k+</span> Фолловеров</span>
                                    <span>Следить</span>
                                </a>
                                <a href="#">
                                    <span><i class="fab fa-youtube"></i> <span>15000</span> Подписчиков</span>
                                    <span>Подписаться</span>
                                </a>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-add mt-20">
                            <h3 class="binduz-er-title">Создайте свой веб-сайт и<span>развивайте свой бизнес</span></h3>
                            <a class="binduz-er-main-btn" href="#">Покупка</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ FEATURED PART ENDS ======-->

    <!--====== BINDUZ VIDEO POST PART START ======-->

    <section class="binduz-er-video-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="binduz-er-video-post-topbar">
                        <div class="binduz-er-video-post-title">
                            <h3 class="binduz-er-title">Видеопосты</h3>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-4">
                    <div class="binduz-er-video-post-tab">
                        <ul class="nav nav-pills justify-content-lg-end justify-content-start" id="pills-tab-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-21-tab" data-bs-toggle="pill" href="#pills-21" role="tab" aria-controls="pills-21" aria-selected="true">Все</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-22-tab" data-bs-toggle="pill" href="#pills-22" role="tab" aria-controls="pills-22" aria-selected="false">Путешествия</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-23-tab" data-bs-toggle="pill" href="#pills-23" role="tab" aria-controls="pills-23" aria-selected="false">Мода</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-24-tab" data-bs-toggle="pill" href="#pills-24" role="tab" aria-controls="pills-24" aria-selected="false">Здоровье</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-25-tab" data-bs-toggle="pill" href="#pills-25" role="tab" aria-controls="pills-25" aria-selected="false">Природа</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-21" role="tabpanel" aria-labelledby="pills-21-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-1.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-3.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-6 order-lg-2 order-3">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box main-item">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-2.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов на этой неделе оценки учителя</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-4.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Этот новый смайлик разрабатывался уже много лет</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-5.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Новые ресурсы по гендерному разрыву в информатике</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-22" role="tabpanel" aria-labelledby="pills-22-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-1.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-3.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-6 order-lg-2 order-3">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box main-item">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-2.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов на этой неделе оценки учителя</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-4.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Этот новый смайлик разрабатывался уже много лет</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-5.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Новые ресурсы по гендерному разрыву в информатике</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-23" role="tabpanel" aria-labelledby="pills-23-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-1.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-3.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-6 order-lg-2 order-3">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box main-item">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-2.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов на этой неделе оценки учителя</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-4.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Этот новый смайлик разрабатывался уже много лет</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-5.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Новые ресурсы по гендерному разрыву в информатике</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-24" role="tabpanel" aria-labelledby="pills-24-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-1.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-3.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-6 order-lg-2 order-3">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box main-item">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-2.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов на этой неделе оценки учителя</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-4.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Этот новый смайлик разрабатывался уже много лет</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-5.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Новые ресурсы по гендерному разрыву в информатике</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-25" role="tabpanel" aria-labelledby="pills-25-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-1.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-3.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-6 order-lg-2 order-3">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box main-item">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-2.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Слушайте истории педагогов на этой неделе оценки учителя</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-4.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Этот новый смайлик разрабатывался уже много лет</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/video-post-thumb-5.png') }}" alt="">
                                        <div class="binduz-er-play">
                                            <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Новые ресурсы по гендерному разрыву в информатике</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ VIDEO POST PART ENDS ======-->

    <!--====== BINDUZ TRENDING TODAY PART START ======-->

    <section class="binduz-er-trending-today-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="binduz-er-trending-today-topbar">
                        <div class="binduz-er-trending-today-title">
                            <h3 class="binduz-er-title">Что сегодня в тренде</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="binduz-er-trending-today-item">
                        <div class="binduz-er-trending-news-list-box">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/assets/images/trending-today-thumb-1.png') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Технология</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Вопрос воздействия: апрельские обновления от Google.org</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="binduz-er-trending-today-item">
                        <div class="binduz-er-trending-news-list-box">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/assets/images/trending-today-thumb-2.png') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Технология</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Android Enterprise security обеспечивает гибкую работу</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="binduz-er-trending-today-item">
                        <div class="binduz-er-trending-news-list-box">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/assets/images/trending-today-thumb-3.png') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Технология</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Мусор для сокровищ: как Google думает о деконструкции</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="binduz-er-trending-today-item">
                        <div class="binduz-er-trending-news-list-box">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/assets/images/trending-today-thumb-4.png') }}" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Технология</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                    </div>
                                </div>
                                <div class="binduz-er-trending-news-list-title">
                                    <h4 class="binduz-er-title"><a href="#">Мы упаковываем здесь только то, что нужно для начала новостей</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ TRENDING TODAY PART ENDS ======-->

    <!--====== BINDUZ MAIN POSTS PART START ======-->

    <section class="binduz-er-main-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="binduz-er-video-post-topbar">
                        <div class="binduz-er-video-post-title">
                            <h3 class="binduz-er-title">Основные должности</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-1.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Мусор для сокровищ: как Google думает о</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-2.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Finding the intersection of social justice and tech</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-3.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Пять способов, которыми мы делаем Google более безопасным</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-4.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Привнесение цифровых навыков в ранее заключенные</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-5.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">Когда художники и машинный интеллект объединяются</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="binduz-er-main-posts-item">
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="{{ asset('/assets/images/main-post-thumb-6.jpg') }}" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="#">Технология</a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i>14 июня 2022 года</span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="#">ИИ помогает врачам в интерпретации кожных заболеваний</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-add pt-10">
                        <img src="{{ asset('/assets/images/space-thumb.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-sidebar-about">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Обо мне</h4>
                        </div>
                        <div class="binduz-er-sidebar-about-item">
                            <div class="binduz-er-sidebar-about-user d-flex">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/user.jpg') }}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <h4 class="binduz-er-title">Миранда Халим</h4>
                                    <span>Автор</span>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="binduz-er-text">
                                <p>Функциональный аспект стоит на первом месте в рабочем процессе, потому что это ядро объекта: какова его цель? что-то еще?</p>
                                <a class="binduz-er-main-btn" href="#">Связаться Со Мной</a>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-sidebar-latest-post">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Последние сообщения</h4>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-box">
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/latest-post-1.jpg') }}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                    <h4 class="binduz-er-title"><a href="#">Представляем Оповещения о землетрясениях для Android</a></h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/latest-post-2.jpg') }}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                    <h4 class="binduz-er-title"><a href="#">Громко и ясно: искусственный интеллект совершенствует помощника</a></h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/latest-post-3.jpg') }}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                    <h4 class="binduz-er-title"><a href="#">Советы и ярлыки для продуктивности</a></h4>
                                </div>
                            </div>
                            <div class="binduz-er-sidebar-latest-post-item">
                                <div class="binduz-er-thumb">
                                    <img src="{{ asset('/assets/images/latest-post-4.jpg') }}" alt="latest">
                                </div>
                                <div class="binduz-er-content">
                                    <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                    <h4 class="binduz-er-title"><a href="#">Искры вдохновения для нового тренда 2022 года</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-sidebar-add-box mt-40">
                        <div class="binduz-er-logo">
                            <a href="#"><img src="{{ asset('/assets/images/logo-2.png') }}" alt=""></a>
                        </div>
                        <p>Построен с использованием потрясающей платформы и фреймворка. Вы можете использовать его в любом случае в блоге, новостях и журналах.</p>
                        <a class="binduz-er-main-btn" href="#">Покупайте Сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ MAIN POSTS PART ENDS ======-->

    <!--====== BINDUZ SOCIAL SHARE PART START ======-->

    <div class="binduz-er-social-share-area">
        <div class="binduz-er-social-share-box d-flex">
            <div class="binduz-er-social-share-item">
                <a href="#">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-facebook">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook <span>Share</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-twitter">
                <a href="#">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-pinterest">
                <a href="#">
                    <i class="fab fa-pinterest-p"></i>
                    <span>Instagram <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-dribbble">
                <a href="#">
                    <i class="fab fa-dribbble"></i>
                    <span>Instagram <span>Feeds</span></span>
                </a>
            </div>
        </div>
    </div>

    <!--====== BINDUZ SOCIAL SHARE PART ENDS ======-->


    <!--====== BINDUZ FOOTER PART START ======-->

    <footer class="binduz-er-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-1">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Категории</h3>
                                </div>
                                <div class="binduz-er-footer-menu-list">
                                    <ul>
                                        <li><a href="#">Архитектура</a></li>
                                        <li><a href="#">Новый взгляд 2022</a></li>
                                        <li><a href="#">Гаджеты</a></li>
                                        <li><a href="#">Мобильные телефоны</a></li>
                                        <li><a href="#">Рецепты</a></li>
                                        <li><a href="#">Декорирование</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">Интерьеры</a></li>
                                        <li><a href="#">Уличная мода</a></li>
                                        <li><a href="#">Образ жизни</a></li>
                                        <li><a href="#">Оглядываясь назад</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-1">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Новостная рассылка</h3>
                                </div>
                                <div class="binduz-er-footer-widget-form">
                                    <form action="#">
                                        <div class="binduz-er-input-box">
                                            <i class="fal fa-user"></i>
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <i class="fal fa-envelope"></i>
                                            <input type="email" placeholder="Enter email address">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <button type="button"><i class="fal fa-paper-plane"></i>Подпишитесь Сейчас</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-3">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Последние каналы</h3>
                                </div>
                                <div class="binduz-er-footer-widget-feeds">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/assets/images/latest-post-1.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                <h4 class="binduz-er-title"><a href="#">Искры вдохновения для нового тренда 2022 года</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/assets/images/latest-post-2.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i>24 июня 2022 года</span>
                                                <h4 class="binduz-er-title"><a href="#">Сертификаты о карьере и другие способы, которыми мы</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-footer-widget-info">
                        <div class="binduz-er-logo">
                            <a href="#"><img src="{{ asset('/assets/images/logo-2.png') }}" alt=""></a>
                        </div>
                        <div class="binduz-er-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.</p>
                        </div>
                        <div class="binduz-er-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="binduz-er-back-to-top">
            <p>ВЕРНУТЬСЯ К НАЧАЛУ <i class="fal fa-long-arrow-right"></i></p>
        </div>
    </footer>
    <div class="binduz-er-footer-copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-copyright-text">
                        <p>Copyright @<span>QuomodoTheme</span> - 2022</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-copyright-menu float-lg-end float-none">
                        <ul>
                            <li><a href="#">Конфиденциальность и Политика</a></li>
                            <li><a href="#">Требовать Отчета</a></li>
                            <li><a href="#">Карьера</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ FOOTER PART ENDS ======-->

    <!--====== BINDUZ BACK TO TOP PART START ======-->

    <div class="binduz-er-back-to-top">
        <p>ВЕРНУТЬСЯ К НАЧАЛУ <i class="fal fa-long-arrow-right"></i></p>
    </div>

    <!--====== BINDUZ BACK TO TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="{{ asset('/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('/assets/js/slick.min.js') }}"></script>

    <!--====== nice select js ======-->
    <script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>