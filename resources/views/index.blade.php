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

    <!-- HEADER MOBILE START -->

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
                                <li><a href="https://www.facebook.com/">facebook</a></li>
                                <li><a href="https://twitter.com/">Twitter</a></li>
                                <li><a href="https://www.skype.com/">Skype</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children binduz-er-news-active">
                                    <a href="<?= PATH ?>/">Главная</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="<?= PATH ?>/author">Автор</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="<?= PATH ?>/details">Детали блога</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="<?= PATH ?>/about-us">О нас</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="<?= PATH ?>/contact">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                            <div class="binduz-er-news-logo text-center mb-30 mt-30">
                                <a href="<?= PATH ?>/">
                                    <img src="{{ asset('/assets/images/logo.png') }}" alt="">
                                </a>
                            </div>
                            <p>Я Михал Шкваренина, многопрофильный дизайнер, в настоящее время работающий в Wild в качестве внештатного дизайнера.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i>+7 920 445 45 98</li>
                                <li><i class="fas fa-home"></i>ул. Казакова, 28, Москва</li>
                                <li><i class="fas fa-envelope"></i>hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADER MOBILE END -->

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

    <!-- TOP HEADER START -->

    <div class="binduz-er-top-header-area">
        <div class="binduz-er-bg-cover"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-headline">
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://iz.ru/1354316/2022-06-23/rossiian-predupredili-o-novykh-opasnykh-pandemiiakh">Миранда халим заразилась вирусом после окончания своей тренировки</a></p>
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://translated.turbopages.org/proxy_u/en-ru.ru.33d05692-62b7e6f9-a9617ea7-74722d776562/https/www.npr.org/2022/05/02/1095812576/aapi-asian-pacific-heritage-month-origin-may-why">Празднование Азиатско Тихоокеанского американского искусства и культуры</a></p>
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://translated.turbopages.org/proxy_u/en-ru.ru.db46b8eb-62b7e722-c4a518c4-74722d776562/https/en.wikipedia.org/wiki/Asian_American_and_Pacific_Islander_Heritage_Month">В честь Месяца американского наследия в Азиатско Тихоокеанском регионе в Google</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-topbar-social d-flex justify-content-end align-items-center">
                        <div class="binduz-er-news-social">
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
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

    <!-- TOP HEADER START -->

    <!--====== BINDUZ TOP HEADER PART ENDS ======-->

    <!-- HEADER START -->

    <header class="binduz-er-header-area">
        <div class="binduz-er-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="<?= PATH ?>/"><img src="{{ asset('/assets/images/logo.png') }}" alt=""></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?= PATH ?>/">Главная<i class="fa"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= PATH ?>/author">Автор</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= PATH ?>/details">Детали блога<i class="fa"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= PATH ?>/about-us">О нас</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= PATH ?>/contact">Контакты</a>
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

    <!-- HEADER END -->

    <!--====== BINDUZ HERO PART START ======-->

    <div class="hero-slide-active">

        <?php

        require_once __DIR__ . '/../../../app/Models/Category.php';
        require_once __DIR__ . '/../../../app/Models/Users.php';

        foreach ($ResultReadPost as $post) { ?>

            <div class="binduz-er-hero-area d-flex align-items-center">
                <div class="binduz-er-bg-cover" style="background-image: url(<?= $post['img_1920_700'] ?>) !important;">
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
                                        <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                    </div>
                                </div>
                                <div class="binduz-er-hero-title">
                                    <h3 class="binduz-er-title"><a href="<?= PATH ?>/details">

                                            <?php

                                            $post_title = $post['title'];
                                            $post_title = substr($post_title, 0, 60);
                                            $post_title = rtrim($post_title, "!,.-");
                                            $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                            echo $post_title . "… ";

                                            ?>
                                        </a></h3>
                                </div>
                                <div class="binduz-er-meta-author">
                                    <a href="<?= PATH ?>/author" class="binduz-er-author">
                                        <img src="<?= $author['img'] ?>" alt="">
                                        <?= $author['name'] ?></span></span>
                                    </a>
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
                        <a href="<?= PATH ?>/details"><img src="<?= $post['img_120_60'] ?>" alt=""></a>
                    </div>
                    <div class="binduz-er-content">
                        <div class="binduz-er-post-meta-date">
                            <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                        </div>
                        <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                <?php

                                $post_title = $post['title'];
                                $post_title = substr($post_title, 0, 40);
                                $post_title = rtrim($post_title, "!,.-");
                                $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                echo $post_title . "… ";

                                ?>
                            </a></h4>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <!--====== BINDUZ HERO PART ENDS ======-->

    <!-- CURRENT_NEWS START -->

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
                                <?php foreach ($ResultReadCategory as $category) { ?>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-<?= $category['id'] + 1; ?>-tab" data-bs-toggle="pill" href="#pills-<?= $category['id'] + 1; ?>" role="tab" aria-controls="pills-<?= $category['id'] + 1; ?>" aria-selected="false"><?= $category['name'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="binduz-er-trending-news-list">
                                <div class="tab-content mt-50" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                        <div class="row">
                                            <?php

                                            foreach ($ResultReadPostByActual as $post) {

                                                $category_id = $post['category_id'];

                                                $ResultReadCategoryByCategoryId = new \Models\Category;
                                                $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                                foreach ($ResultReadCategoryByCategoryId as $category) {
                                                }
                                            }
                                            ?>
                                            <div class="col-lg-7 col-md-6">
                                                <div class="binduz-er-trending-box">
                                                    <div class="binduz-er-trending-news-item">
                                                        <img src="<?= $post['img_553_450'] ?>" alt="">
                                                        <div class="binduz-er-trending-news-overlay">
                                                            <div class="binduz-er-trending-news-meta">
                                                                <div class="binduz-er-meta-categories">
                                                                    <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                                </div>
                                                                <div class="binduz-er-meta-date">
                                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                                </div>
                                                                <div class="binduz-er-trending-news-title">
                                                                    <h3 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h3>
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
                                                    <?php

                                                    foreach ($ResultReadPostByNotActual as $post) {

                                                        $category_id = $post['category_id'];

                                                        $ResultReadCategoryByCategoryId = new \Models\Category;
                                                        $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                                        foreach ($ResultReadCategoryByCategoryId as $category) {
                                                        }

                                                    ?>

                                                        <div class="binduz-er-trending-news-list-box">
                                                            <div class="binduz-er-thumb">
                                                                <img src="<?= $post['img_116_100'] ?>" alt="">
                                                            </div>
                                                            <div class="binduz-er-content">
                                                                <div class="binduz-er-meta-item">
                                                                    <div class="binduz-er-meta-categories">
                                                                        <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                                    </div>
                                                                    <div class="binduz-er-meta-date">
                                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="binduz-er-trending-news-list-title">
                                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php foreach ($ResultReadCategory as $category) { ?>

                                        <div class="tab-pane fade" id="pills-<?= $category['id'] + 1; ?>" role="tabpanel" aria-labelledby="pills-<?= $category['id'] + 1; ?>-tab">
                                            <div class="row">
                                                <?php

                                                foreach ($ResultReadPostByActual as $post) {

                                                    $category_id = $post['category_id'];

                                                    $ResultReadCategoryByCategoryId = new \Models\Category;
                                                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                                    foreach ($ResultReadCategoryByCategoryId as $category_actual) {
                                                    }
                                                }
                                                ?>
                                                <div class="col-lg-7 col-md-6">
                                                    <div class="binduz-er-trending-box">
                                                        <div class="binduz-er-trending-news-item">
                                                            <img src="<?= $post['img_553_450'] ?>" alt="">
                                                            <div class="binduz-er-trending-news-overlay">
                                                                <div class="binduz-er-trending-news-meta">
                                                                    <div class="binduz-er-meta-categories">
                                                                        <a href="<?= PATH ?>/category"><?= $category_actual['name'] ?></a>
                                                                    </div>
                                                                    <div class="binduz-er-meta-date">
                                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                                    </div>
                                                                    <div class="binduz-er-trending-news-title">
                                                                        <h3 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h3>
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

                                                        <?php
                                                        $category_id = $category['id'];

                                                        $ResultReadPostByNotActualByCategory = new \Models\Post;
                                                        $ResultReadPostByNotActualByCategory = $ResultReadPostByNotActualByCategory->read_post_by_not_actual_by_category($category_id);
                                                        foreach ($ResultReadPostByNotActualByCategory as $post) {

                                                            $category_id = $post['category_id'];

                                                            $ResultReadCategoryByCategoryId = new \Models\Category;
                                                            $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                                            foreach ($ResultReadCategoryByCategoryId as $category) {
                                                            }

                                                        ?>

                                                            <div class="binduz-er-trending-news-list-box">
                                                                <div class="binduz-er-thumb">
                                                                    <img src="<?= $post['img_116_100'] ?>" alt="">
                                                                </div>
                                                                <div class="binduz-er-content">
                                                                    <div class="binduz-er-meta-item">
                                                                        <div class="binduz-er-meta-categories">
                                                                            <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                                        </div>
                                                                        <div class="binduz-er-meta-date">
                                                                            <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="binduz-er-trending-news-list-title">
                                                                        <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                                                <?php

                                                                                $post_title = $post['title'];
                                                                                $post_title = substr($post_title, 0, 60);
                                                                                $post_title = rtrim($post_title, "!,.-");
                                                                                $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                                                echo $post_title . "… ";

                                                                                ?>
                                                                            </a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

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
                            <?php foreach ($ResultReadCategoryLimit5 as $category) { ?>
                                <div class="binduz-er-item" style="background-image: url(<?= $category['img'] ?>)!important;">
                                    <a href="<?= PATH ?>/category">
                                        <span><?= $category['name'] ?></span>
                                        <span class="binduz-er-number">02</span>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CURRENT_NEWS END -->

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
                            <?php foreach ($ResultReadPostByReccomended as $post) {

                                $category_id = $post['category_id'];

                                $ResultReadCategoryByCategoryId = new \Models\Category;
                                $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                foreach ($ResultReadCategoryByCategoryId as $category) {
                                }

                            ?>
                                <div class="binduz-er-trending-news-list-box">
                                    <div class="binduz-er-thumb">
                                        <img src="<?= $post['img_436_240'] ?>" alt="">
                                    </div>
                                    <div class="binduz-er-content">
                                        <div class="binduz-er-meta-item">
                                            <div class="binduz-er-meta-categories">
                                                <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                            </div>
                                        </div>
                                        <div class="binduz-er-trending-news-list-title">
                                            <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <?php foreach ($ResultReadPostByReccomended as $post) {

                        $category_id = $post['category_id'];

                        $ResultReadCategoryByCategoryId = new \Models\Category;
                        $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                        foreach ($ResultReadCategoryByCategoryId as $category) {
                        }

                    ?>
                        <div class="binduz-er-trending-news-item mb-30">
                            <img src="<?= $post['img_555_234'] ?>" alt="">
                            <div class="binduz-er-trending-news-overlay">
                                <div class="binduz-er-trending-news-meta">
                                    <div class="binduz-er-meta-categories">
                                        <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                    </div>
                                    <div class="binduz-er-trending-news-title">
                                        <h3 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h3>
                                    </div>
                                </div>
                                <div class="binduz-er-news-share">
                                    <a href="#"><i class="fal fa-share"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-sidebar-social">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Социальная лента</h4>
                        </div>
                        <div class="binduz-er-social-list">
                            <div class="binduz-er-list">
                                <a href="https://www.facebook.com/">
                                    <span><i class="fab fa-facebook-f"></i> <span>15000</span> Лайков</span>
                                    <span>Лайк</span>
                                </a>
                                <a href="https://twitter.com/">
                                    <span><i class="fab fa-twitter"></i> <span>15000</span> Лайков</span>
                                    <span>Tweet</span>
                                </a>
                                <a href="https://www.behance.net/">
                                    <span><i class="fab fa-behance"></i> <span>5k+</span> Фолловеров</span>
                                    <span>Следить</span>
                                </a>
                                <a href="https://www.youtube.com/">
                                    <span><i class="fab fa-youtube"></i> <span>15000</span> Подписчиков</span>
                                    <span>Подписаться</span>
                                </a>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-add mt-20" style="background-image: url(assets/images/bus_638_280.jpg);">
                            <h3 class="binduz-er-title">Создайте свой веб-сайт и<span>развивайте свой бизнес</span></h3>
                            <a class="binduz-er-main-btn" href="https://web-help24.ru/spets/?utm_source=yandex&utm_medium=cpc&utm_campaign=72113802&utm_content=11972100158&utm_term=%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81+%D1%81%D0%B0%D0%B9%D1%82&etext=2202.pgqJl06Pg19Pc9B2tl1jTWLtVYCZQXw-XCkLwXaFMyb8Wx5VO1jyo9dQlNut_oeFBYC4pjGsFVMp4gx0k4WoNqVm5ir90fK-PBtMEm_m8yesDk93WedOEkl_nY8NnzWybnV2c2JuYXZ0b29jdG9udQ.c576ecd63aa91301671c9e59e4b69a7151e466b8&yclid=3560920387384575289&v=f9308c5d0596">Покупка</a>
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
                            <?php foreach ($ResultReadCategory as $category) { ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-2<?= $category['id'] + 1; ?>-tab" data-bs-toggle="pill" href="#pills-2<?= $category['id'] + 1; ?>" role="tab" aria-controls="pills-2<?= $category['id'] + 1; ?>" aria-selected="false"><?= $category['name'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="pills-21" role="tabpanel" aria-labelledby="pills-21-tab">
                    <div class=" row">
                        <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="binduz-er-video-post-item">
                                <?php foreach ($ResultReadPostByVideoLeft as $post) {
                                    $category_id = $post['category_id'];

                                    $ResultReadCategoryByCategoryId = new \Models\Category;
                                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                    foreach ($ResultReadCategoryByCategoryId as $category) {
                                    }

                                ?>
                                    <div class="binduz-er-trending-news-list-box">
                                        <div class="binduz-er-thumb">
                                            <img src="<?= $post['img_310_200'] ?>" alt="">
                                            <div class="binduz-er-play">
                                                <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                </div>
                                            </div>
                                            <div class="binduz-er-trending-news-list-title">
                                                <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php foreach ($ResultReadPostByVideoCenter as $post) {
                            $category_id = $post['category_id'];

                            $ResultReadCategoryByCategoryId = new \Models\Category;
                            $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                            foreach ($ResultReadCategoryByCategoryId as $category) {
                            }

                        ?>
                            <div class="  col-lg-6 order-lg-2 order-3">
                                <div class="binduz-er-video-post-item">
                                    <div class="binduz-er-trending-news-list-box main-item">
                                        <div class="binduz-er-thumb">
                                            <img src="<?= $post['img_670_534'] ?>" alt="">
                                            <div class="binduz-er-play">
                                                <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                </div>
                                            </div>
                                            <div class="binduz-er-trending-news-list-title">
                                                <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="binduz-er-video-post-item">
                                <?php foreach ($ResultReadPostByVideoRight as $post) {
                                    $category_id = $post['category_id'];

                                    $ResultReadCategoryByCategoryId = new \Models\Category;
                                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                    foreach ($ResultReadCategoryByCategoryId as $category) {
                                    }

                                ?>
                                    <div class="binduz-er-trending-news-list-box">
                                        <div class="binduz-er-thumb">
                                            <img src="<?= $post['img_310_200'] ?>" alt="">
                                            <div class="binduz-er-play">
                                                <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                </div>
                                            </div>
                                            <div class="binduz-er-trending-news-list-title">
                                                <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                        <?php

                                                        $post_title = $post['title'];
                                                        $post_title = substr($post_title, 0, 110);
                                                        $post_title = rtrim($post_title, "!,.-");
                                                        $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                        echo $post_title . "… ";

                                                        ?>
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($ResultReadCategory as $category) { ?>
                    <div class="tab-pane fade" id="pills-2<?= $category['id'] + 1; ?>" role="tabpanel" aria-labelledby="pills-2<?= $category['id'] + 1; ?>-tab">
                        <div class=" row">
                            <div class="  col-lg-3 col-md-6 order-lg-1 order-1">
                                <div class="binduz-er-video-post-item">
                                    <?php

                                    $category_id = $category['id'];
                                    $ResultReadPostByVideoLeftByCategory = new \Models\Post;
                                    $ResultReadPostByVideoLeftByCategory = $ResultReadPostByVideoLeftByCategory->read_post_by_video_left_by_category($category_id);
                                    foreach ($ResultReadPostByVideoLeftByCategory as $post) {
                                        $category_id = $post['category_id'];

                                        $ResultReadCategoryByCategoryId = new \Models\Category;
                                        $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                        foreach ($ResultReadCategoryByCategoryId as $category_left) {
                                        }

                                    ?>
                                        <div class="binduz-er-trending-news-list-box">
                                            <div class="binduz-er-thumb">
                                                <img src="<?= $post['img_310_200'] ?>" alt="">
                                                <div class="binduz-er-play">
                                                    <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="binduz-er-content">
                                                <div class="binduz-er-meta-item">
                                                    <div class="binduz-er-meta-categories">
                                                        <a href="<?= PATH ?>/category"><?= $category_left['name'] ?></a>
                                                    </div>
                                                    <div class="binduz-er-meta-date">
                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-title">
                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                            <?php

                                                            $post_title = $post['title'];
                                                            $post_title = substr($post_title, 0, 110);
                                                            $post_title = rtrim($post_title, "!,.-");
                                                            $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                            echo $post_title . "… ";

                                                            ?>
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php

                            $category_id = $category['id'];
                            $ResultReadPostByVideoCenterByCategory = new \Models\Post;
                            $ResultReadPostByVideoCenterByCategory = $ResultReadPostByVideoCenterByCategory->read_post_by_video_center_by_category($category_id);
                            foreach ($ResultReadPostByVideoCenterByCategory as $post) {
                                $category_id = $post['category_id'];

                                $ResultReadCategoryByCategoryId = new \Models\Category;
                                $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                foreach ($ResultReadCategoryByCategoryId as $category_center) {
                                }
                            ?>
                                <div class="  col-lg-6 order-lg-2 order-3">
                                    <div class="binduz-er-video-post-item">
                                        <div class="binduz-er-trending-news-list-box main-item">
                                            <div class="binduz-er-thumb">
                                                <img src="<?= $post['img_670_534'] ?>" alt="">
                                                <div class="binduz-er-play">
                                                    <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="binduz-er-content">
                                                <div class="binduz-er-meta-item">
                                                    <div class="binduz-er-meta-categories">
                                                        <a href="<?= PATH ?>/category"><?= $category_center['name'] ?></a>
                                                    </div>
                                                    <div class="binduz-er-meta-date">
                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-title">
                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                                <div class="binduz-er-video-post-item">
                                    <?php

                                    $category_id = $category['id'];
                                    $ResultReadPostByVideoRightByCategory = new \Models\Post;
                                    $ResultReadPostByVideoRightByCategory = $ResultReadPostByVideoRightByCategory->read_post_by_video_right_by_category($category_id);
                                    foreach ($ResultReadPostByVideoRightByCategory as $post) {
                                        $category_id = $post['category_id'];

                                        $ResultReadCategoryByCategoryId = new \Models\Category;
                                        $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                        foreach ($ResultReadCategoryByCategoryId as $category_right) {
                                        }

                                    ?>
                                        <div class="binduz-er-trending-news-list-box">
                                            <div class="binduz-er-thumb">
                                                <img src="<?= $post['img_310_200'] ?>" alt="">
                                                <div class="binduz-er-play">
                                                    <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="binduz-er-content">
                                                <div class="binduz-er-meta-item">
                                                    <div class="binduz-er-meta-categories">
                                                        <a href="<?= PATH ?>/category"><?= $category_right['name'] ?></a>
                                                    </div>
                                                    <div class="binduz-er-meta-date">
                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-title">
                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                            <?php

                                                            $post_title = $post['title'];
                                                            $post_title = substr($post_title, 0, 110);
                                                            $post_title = rtrim($post_title, "!,.-");
                                                            $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                            echo $post_title . "… ";

                                                            ?>
                                                        </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!--====== BINDUZ VIDEO POST PART ENDS ======-->

    <!-- START TREND -->

    <section class="binduz-er-trending-today-area">
        <div class="binduz-er-bg-cover" style="background-image: url(assets/images/trends_1920_499.jpeg) !important;"></div>
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
                <?php

                foreach ($ResultReadPostByTrend as $post) {
                    $category_id = $post['category_id'];

                    $ResultReadCategoryByCategoryId = new \Models\Category;
                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                    foreach ($ResultReadCategoryByCategoryId as $category) {
                    }

                ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="binduz-er-trending-today-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="<?= $post['img_310_200'] ?>" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- END TREND -->

    <!-- START POSITIONS -->

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
                        <?php

                        foreach ($ResultReadPostByPositions as $post) {
                            $category_id = $post['category_id'];

                            $ResultReadCategoryByCategoryId = new \Models\Category;
                            $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                            foreach ($ResultReadCategoryByCategoryId as $category) {
                            }

                        ?>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="binduz-er-main-posts-item">
                                    <div class="binduz-er-trending-news-list-box">
                                        <div class="binduz-er-thumb">
                                            <img src="<?= $post['img_640_400'] ?>" alt="">
                                        </div>
                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="<?= PATH ?>/category"><?= $category['name'] ?></a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                </div>
                                            </div>
                                            <div class="binduz-er-trending-news-list-title">
                                                <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                        <?php

                                                        $post_title = $post['title'];
                                                        $post_title = substr($post_title, 0, 90);
                                                        $post_title = rtrim($post_title, "!,.-");
                                                        $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                        echo $post_title . "… ";

                                                        ?>
                                                    </a></h4>
                                                <p><?= $post['description'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="binduz-er-add pt-10">
                        <img src="{{ asset('/assets/images/space_1020_187.png') }}" alt="">
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
                                    <img src="{{ asset('/assets/images/user_160_160.jpeg') }}" alt="">
                                </div>
                                <div class="binduz-er-content">
                                    <h4 class="binduz-er-title">Миранда Халим</h4>
                                    <span>Автор</span>
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="binduz-er-text">
                                <p>Функциональный аспект стоит на первом месте в рабочем процессе, потому что это ядро объекта: какова его цель? что-то еще?</p>
                                <a class="binduz-er-main-btn" href="https://vk.com/cholmiranda">Связаться Со Мной</a>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-sidebar-latest-post">
                        <div class="binduz-er-sidebar-title">
                            <h4 class="binduz-er-title">Последние сообщения</h4>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-box">
                            <?php

                            foreach ($ResultReadPostLast as $post) {

                            ?>
                                <div class="binduz-er-sidebar-latest-post-item">
                                    <div class="binduz-er-thumb">
                                        <img src="<?= $post['img_160_160'] ?>" alt="latest">
                                    </div>
                                    <div class="binduz-er-content">
                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                        <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                <?php

                                                $post_title = $post['title'];
                                                $post_title = substr($post_title, 0, 70);
                                                $post_title = rtrim($post_title, "!,.-");
                                                $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                echo $post_title . "… ";

                                                ?>
                                            </a></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="binduz-er-sidebar-add-box mt-40" style="background-image: url(assets/images/laravel_640_698.png)!important;">
                        <div class="binduz-er-logo">
                            <a href="<?= PATH ?>/"><img src="{{ asset('/assets/images/logo-2.png') }}" alt=""></a>
                        </div>
                        <p>Построен с использованием потрясающей платформы и фреймворка. Вы можете использовать его в любом случае в блоге, новостях и журналах.</p>
                        <a class="binduz-er-main-btn" href="https://laravel.com/">Покупайте Сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END POSITIONS -->

    <!-- START SOCIAL -->

    <div class="binduz-er-social-share-area">
        <div class="binduz-er-social-share-box d-flex">
            <div class="binduz-er-social-share-item">
                <a href="https://www.instagram.com/">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-facebook">
                <a href="https://www.facebook.com/">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook <span>Share</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-twitter">
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-pinterest">
                <a href="https://www.pinterest.com/">
                    <i class="fab fa-pinterest-p"></i>
                    <span>Pinterest <span>Feeds</span></span>
                </a>
            </div>
            <div class="binduz-er-social-share-item binduz-dribbble">
                <a href="https://dribbble.com/">
                    <i class="fab fa-dribbble"></i>
                    <span>Dribble <span>Feeds</span></span>
                </a>
            </div>
        </div>
    </div>

    <!-- END SOCIAL -->

    <!-- START FOOTER -->

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
                                        <?php foreach ($ResultReadCategoryLimit6 as $category) { ?>
                                            <li><a href="<?= PATH ?>/category"><?= $category['name'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <ul>
                                        <?php foreach ($ResultReadCategoryLimit6Offset6 as $category) { ?>
                                            <li><a href="<?= PATH ?>/category"><?= $category['name'] ?></a></li>
                                        <?php } ?>
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
                                            <input type="text" placeholder="Введите ваше имя">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <i class="fal fa-envelope"></i>
                                            <input type="email" placeholder="Введите адрес электронной почты">
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
                                        <?php foreach ($ResultReadPostLast2 as $post) { ?>
                                            <div class="binduz-er-sidebar-latest-post-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="<?= $post['img_160_160'] ?>" alt="latest">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details">
                                                            <?php

                                                            $post_title = $post['title'];
                                                            $post_title = substr($post_title, 0, 70);
                                                            $post_title = rtrim($post_title, "!,.-");
                                                            $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                            echo $post_title . "… ";

                                                            ?>
                                                        </a></h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-footer-widget-info">
                        <div class="binduz-er-logo">
                            <a href="<?= PATH ?>/"><img src="{{ asset('/assets/images/logo-2.png') }}" alt=""></a>
                        </div>
                        <div class="binduz-er-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.</p>
                        </div>
                        <div class="binduz-er-social">
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
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
                            <li><a href="https://ezybrand.ru/blog/polzovatelskoe-soglashenie-politika-konfidenczialnosti-i-soglasie-na-obrabotku-personalnyh-dannyh/">Конфиденциальность и Политика</a></li>
                            <li><a href="https://kartaslov.ru/%D0%BA%D0%B0%D0%BA-%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE-%D0%BF%D0%B8%D1%88%D0%B5%D1%82%D1%81%D1%8F-%D1%81%D0%BB%D0%BE%D0%B2%D0%BE%D1%81%D0%BE%D1%87%D0%B5%D1%82%D0%B0%D0%BD%D0%B8%D0%B5/%D1%82%D1%80%D0%B5%D0%B1%D0%BE%D0%B2%D0%B0%D1%82%D1%8C+%D0%BE%D1%82%D1%87%D1%91%D1%82%D0%B0">Требовать Отчета</a></li>
                            <li><a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D1%8C%D0%B5%D1%80%D0%B0">Карьера</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END FOOTER -->

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