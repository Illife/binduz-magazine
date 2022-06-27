<!-- HEADER START -->

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
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body class="gray-bg bg-2">

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
                                    <img src="assets/images/logo.png" alt="">
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

    <div class="binduz-er-news-search-box">
        <div class="binduz-er-news-search-header">
            <div class=" container mt-60">
                <div class="row">
                    <div class=" col-6">
                        <img src="assets/images/logo-4.png" alt=""> <!-- search title -->
                    </div>
                    <div class=" col-6">
                        <div class="binduz-er-news-search-close float-end">
                            <button class="binduz-er-news-search-close-btn">Закрыть <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="binduz-er-news-search-body">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-news-search-form">
                            <form action="<?= PATH ?>/handlers/handler_search.php" method="post">
                                <input type="text" placeholder="Поиск сообщений" name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <div class="binduz-er-top-header-area-4 bg_cover d-none d-lg-block">
        <div class=" container">
            <div class="row align-items-center">
                <div class=" col-lg-6 col-md-7">
                    <div class="binduz-er-top-header-weather">
                        <ul>
                            <li><a href="https://ru.calculat.io/temperature/fahrenheit-to-celsius/-22"><i class="fal fa-cloud"></i>22°F</a></li>
                            <li><a href="https://ru.calculat.io/temperature/fahrenheit-to-celsius/-22"><i class="fal fa-cloud"></i>22°F</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-5">
                    <div class="binduz-er-topbar-headline float-end">
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://iz.ru/1354316/2022-06-23/rossiian-predupredili-o-novykh-opasnykh-pandemiiakh">Миранда халим заразилась вирусом после окончания своей тренировки</a></p>
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://translated.turbopages.org/proxy_u/en-ru.ru.33d05692-62b7e6f9-a9617ea7-74722d776562/https/www.npr.org/2022/05/02/1095812576/aapi-asian-pacific-heritage-month-origin-may-why">Празднование Азиатско Тихоокеанского американского искусства и культуры</a></p>
                        <p><span><i class="fas fa-bolt"></i>Актуальные новости:</span> <a href="https://translated.turbopages.org/proxy_u/en-ru.ru.db46b8eb-62b7e722-c4a518c4-74722d776562/https/en.wikipedia.org/wiki/Asian_American_and_Pacific_Islander_Heritage_Month">В честь Месяца американского наследия в Азиатско Тихоокеанском регионе в Google</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <header class="binduz-er-header-area binduz-er-header-area-4">
        <div class="binduz-er-header-nav">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-header-meddle-bar binduz-er-page d-flex justify-content-between">
                            <div class="binduz-er-logo">
                                <a href="<?= PATH ?>/"><img src="assets/images/logo-6.png" alt=""></a>
                            </div>
                            <div class="navigation">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="<?= PATH ?>/">Главная</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= PATH ?>/about-us">О нас</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= PATH ?>/contact">Контакты</a>
                                            </li>
                                        </ul>
                                    </div> <!-- navbar collapse -->
                                    <div class="binduz-er-navbar-btn d-flex align-items-center">
                                        <div class="binduz-er-search-btn d-none d-sm-block">
                                            <a class="binduz-er-news-search-open" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                        <span class="binduz-er-toggle-btn binduz-er-news-canvas_open d-block d-lg-none">
                                            <i class="fal fa-bars"></i>
                                        </span>
                                    </div>
                                </nav>
                            </div> <!-- navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="binduz-er-breadcrumb-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-breadcrumb-box">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= PATH ?>/">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php

                                    $category_id = $_GET['category_id'];
                                    $ResultReadCategoryByCategoryId = new \Models\Category;
                                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                    foreach ($ResultReadCategoryByCategoryId as $category) {
                                    }
                                    echo $category['name'];
                                    ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- HEADER END -->
    <!--====== BINDUZ AUTHOR USER PART START ======-->

    <section class="binduz-er-author-item-area pb-20">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <?php

                    $category_id = $_GET['category_id'];

                    $ResultReadPostByCategoryId = new \Models\Post;
                    $ResultReadPostByCategoryId = $ResultReadPostByCategoryId->read_post_by_category($category_id);

                    foreach ($ResultReadPostByCategoryId as $post) {
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
                        <div class="binduz-er-author-item mb-40">
                            <div class="binduz-er-thumb">
                                <img src="<?= $post['img_2020_1040'] ?>" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="<?= PATH ?>/category?category_id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                    </div>
                                </div>
                                <h3 class="binduz-er-title"><a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
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
                    <?php } ?>
                </div>
                <div class=" col-lg-3">
                    <div class="binduz-er-populer-news-sidebar">

                        <div class="binduz-er-archived-sidebar-about">
                            <div class="binduz-er-user">
                                <img src="assets/images/miranda_140_140.jpg" alt="">
                                <div class="binduz-er-icon">
                                    <i class="fal fa-newspaper"></i>
                                </div>

                            </div>
                            <span>Старший репортер</span>
                            <h4 class="binduz-er-title">Миранда Х. Хиликсер</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="binduz-er-author-sidebar-search-bar">
                            <form action="<?= PATH ?>/handlers/handler_search.php" method="post">
                                <div class="binduz-er-input-box">
                                    <input type="text" placeholder="Поиск здесь..." name="search">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="binduz-er-populer-news-sidebar-post pt-40">
                            <div class="binduz-er-popular-news-title">
                                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cамые популярные</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Самые последние</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">

                                        <?php foreach ($ResultReadPostByTrend as $post) { ?>

                                            <div class="binduz-er-sidebar-latest-post-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="<?= $post['img_160_160'] ?>" alt="latest">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    <h4 class="binduz-er-title"><a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>">
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
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <?php foreach ($ResultReadPostLast as $post) { ?>
                                            <div class="binduz-er-sidebar-latest-post-item">
                                                <div class="binduz-er-thumb">
                                                    <img src="<?= $post['img_160_160'] ?>" alt="latest">
                                                </div>
                                                <div class="binduz-er-content">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    <h4 class="binduz-er-title">
                                                        <a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>">
                                                            <?php

                                                            $post_title = $post['title'];
                                                            $post_title = substr($post_title, 0, 60);
                                                            $post_title = rtrim($post_title, "!,.-");
                                                            $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                            echo $post_title . "… ";

                                                            ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="binduz-er-populer-news-sidebar-newsletter binduz-er-author-page-newsletter mt-40">
                            <div class="binduz-er-newsletter-box text-center">
                                <img src="assets/images/icon/icon-3.png" alt="">
                                <h3 class="binduz-er-title">Получайте Каждую Новостную Рассылку</h3>
                                <p>Мы не собираемся рассылать спам</p>
                                <div class="binduz-er-input-box">
                                    <input type="text" placeholder="Введите свой email">
                                    <button><i class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="binduz-er-populer-news-social binduz-er-author-page-social mt-40">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Социальные сети</h3>
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
                        </div>

                        <div class="binduz-er-populer-news-social binduz-er-author-page-social mt-40">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Видеопосты</h3>
                            </div>

                            <?php

                            foreach ($ResultReadPostByVideoCenter as $post) {
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

                                <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                    <div class="binduz-er-latest-news-item">
                                        <div class="binduz-er-thumb">
                                            <img src="<?= $post['img_310_200'] ?>" alt="">
                                            <div class="binduz-er-play">
                                                <a href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>

                                        <div class="binduz-er-content">
                                            <div class="binduz-er-meta-item">
                                                <div class="binduz-er-meta-categories">
                                                    <a href="<?= PATH ?>/category?category_id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                                                </div>
                                                <div class="binduz-er-meta-date">
                                                    <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                </div>
                                            </div>
                                            <h5 class="binduz-er-title"><a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h5>
                                            <div class="binduz-er-meta-author">
                                                <?= $author['name'] ?></span></span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                        <div class="binduz-er-sidebar-social binduz-er-populer-news-sidebar-add d-none d-lg-block">
                            <div class="binduz-er-sidebar-add mt-40" style="background-image: url(assets/images/bus_319_140.jpg);">
                                <h3 class="binduz-er-title">Создайте свой веб-сайт и <span>развивайте свой бизнес</span></h3>
                                <a class="binduz-er-main-btn" href="https://web-help24.ru/spets/?utm_source=yandex&utm_medium=cpc&utm_campaign=72113802&utm_content=11972100158&utm_term=%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81+%D1%81%D0%B0%D0%B9%D1%82&etext=2202.pgqJl06Pg19Pc9B2tl1jTWLtVYCZQXw-XCkLwXaFMyb8Wx5VO1jyo9dQlNut_oeFBYC4pjGsFVMp4gx0k4WoNqVm5ir90fK-PBtMEm_m8yesDk93WedOEkl_nY8NnzWybnV2c2JuYXZ0b29jdG9udQ.c576ecd63aa91301671c9e59e4b69a7151e466b8&yclid=3560920387384575289&v=f9308c5d0596">Покупка</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ AUTHOR USER PART ENDS ======-->
    @include('footer')