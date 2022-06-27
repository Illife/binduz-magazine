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
                                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- HEADER END -->

    <div class="binduz-er-map-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.7069251461353!2d37.66839131593097!3d55.76359318055619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a850eaeef07%3A0xa709d4c3bef36897!2z0YPQuy4g0JrQsNC30LDQutC-0LLQsCwgMjgsINCc0L7RgdC60LLQsA!5e0!3m2!1sru!2sru!4v1656304027698!5m2!1sru!2sru" width="1376" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== BINDUZ CONTACT MAP PART ENDS ======-->

    <!--====== BINDUZ CONTACT US PART ENDS ======-->

    <div class="binduz-er-contact-us-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-contact-us-box">
                        <form action="#">
                            <div class="binduz-er-contact-title">
                                <h4 class="binduz-er-title">Свяжитесь с нами и дайте нам знать</h4>
                            </div>
                            <div class="row">
                                <div class=" col-lg-4">
                                    <div class="binduz-er-input-box">
                                        <input type="text" placeholder="Введите полное имя">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="binduz-er-input-box">
                                        <input type="email" placeholder="Введите адрес">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="binduz-er-input-box binduz-er-select-item">
                                        <select>
                                            <option data-display="Выберите тему">Веб-разработка</option>
                                            <option value="1">Дизайнер Ui/Ux</option>
                                            <option value="2">Другой вариант</option>
                                            <option value="3">Отключенная опция</option>
                                            <option value="4">Картофель</option>
                                        </select>
                                        <i class="fal fa-arrow-down"></i>
                                    </div>
                                </div>
                                <div class=" col-lg-12">
                                    <div class="binduz-er-input-box">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
                                        <i class="fal fa-pencil"></i>
                                    </div>
                                </div>
                            </div>
                            <button class="binduz-er-main-btn">Отправить запрос</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pt-90">
                <div class=" col-lg-4">
                    <div class="binduz-er-contact-info-box">
                        <h3 class="binduz-er-title">Корпоративный офис</h3>
                        <ul>
                            <li>Адрес: <span>ул. Казакова, 28, Москва</span></li>
                            <li>Телефон: <span>+7 920 445 45 98</span></li>
                            <li>Email: <span>hello@example.com</span></li>
                        </ul>
                        <a class="binduz-er-main-btn" href="#">Сделать Звонок</a>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-contact-info-box">
                        <h3 class="binduz-er-title">Главный ШТАБ</h3>
                        <ul>
                            <li>Адрес: <span>ул. Казакова, 28, Москва</span></li>
                            <li>Телефон: <span>+7 920 445 45 98</span></li>
                            <li>Email: <span>hello@example.com</span></li>
                        </ul>
                        <a class="binduz-er-main-btn active" href="#">Сделать Звонок</a>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-contact-info-box">
                        <h3 class="binduz-er-title">Рекламировать</h3>
                        <ul>
                            <li>Адрес: <span>ул. Казакова, 28, Москва</span></li>
                            <li>Телефон: <span>+7 920 445 45 98</span></li>
                            <li>Email: <span>hello@example.com</span></li>
                        </ul>
                        <a class="binduz-er-main-btn" href="#">Сделать Звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ CONTACT US PART ENDS ======-->

    @include('footer')