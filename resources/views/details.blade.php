@include('header')
<!--====== BINDUZ AUTHOR USER PART START ======-->
<?php

$id = $_GET['post_id'];
$ResultReadPostById = new \Models\Post;
$ResultReadPostById = $ResultReadPostById->read_post_by_id($id);
foreach ($ResultReadPostById as $post) {
}

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
<section class="binduz-er-author-item-area pb-20">
    <div class=" container">
        <div class="row">
            <div class=" col-lg-9">
                <div class="binduz-er-author-item mb-40">
                    <div class="binduz-er-thumb">
                        <img src="<?= $post['img_2020_1040'] ?>" alt="">
                    </div>
                    <div class="binduz-er-content">
                        <div class="binduz-er-meta-item">
                            <div class="binduz-er-meta-categories">
                                <a href="#"><?= $category['name'] ?></a>
                            </div>
                            <div class="binduz-er-meta-date">
                                <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                            </div>
                        </div>
                        <h3 class="binduz-er-title"><?= $post['title'] ?></h3>
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
                    <div class="binduz-er-blog-details-box">



                        <div class="binduz-er-text">
                            <p>В вашем списке мест, где люди могут получить доступ к вашему веб-приложению, Teams, вероятно, находится под номером “нет в списке”. Но оказывается, что предоставление доступа к вашему приложению там, где ваши пользователи уже работают, имеет некоторые серьезные преимущества. В этой статье мы рассмотрим, как Teams создает веб-приложения для каждой компании</p>
                            <p>Структурированная лента с захватом, невидимые формованные чашечки для поддержки, прочно удерживающие спортивную деталь переднего вкладыша powermesh. Тепло и комфорт свободно свисают с тела, большой карман спереди, полная пуговица, хлопчатобумажная смесь, симпатичная и функциональная. Облегающие юбки ярких основных цветов, яркая палитра, плиссированные юбки в стиле чирлидерш, отделка в полоску, туфли-лодочки из штапельного материала, массивный средний блок.</p>
                        </div>
                        <div class="row">
                            <div class=" col-lg-6">
                                <div class="binduz-er-blog-details-thumb mt-25">
                                    <img src="assets/images/binduz1_880_600.jpg" alt="">
                                </div>
                            </div>
                            <div class=" col-lg-6">
                                <div class="binduz-er-blog-details-thumb mt-25">
                                    <img src="assets/images/binduz2_880_600.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-text mt-50">
                            <p>Нехватка нескольких сотен аппаратов искусственной вентиляции легких в Нью-Йорке, эпицентре вспышки в США, побудила г-на Куомо заявить, что он распорядится забрать аппараты из разных частей штата и передать их в наиболее пострадавшие районы. В Нью-Йорке зафиксирован самый высокий за один день рост числа смертей - на 562 до 2935 - почти половина всех смертей, связанных с вирусом, зарегистрированных вчера в США. Белый дом может посоветовать тем, кто находится в горячих точках распространения вируса, носить маски на публике, чтобы помочь остановить распространение.</p>
                        </div>
                        <div class="binduz-er-quote-text">
                            <p>Подкладка потайная молния сзади застегивается на молнию в стиле качелей с высокой талией, двухслойный полный цветочный узор, создающий ваш пакет приложений.</p>
                            <span>By <span>Rosalina D.</span></span>
                        </div>
                        <div class="binduz-er-text mt-50">
                            <p>При создании пакета приложений вы можете создать его вручную или использовать App Studio, полезное приложение внутри Teams, которое помогает разработчикам создавать приложения Teams (да, meta действительно остановила приложение App Studio в вас).</p>
                            <ul>
                                <li>После установки приложения App Studio в вашем клиенте Teams</li>
                                <li>App Studio проведет вас</li>
                                <li>Для запуска и запуска веб-служб вам необходимо создать пакет приложений, который можно распространять и устанавливать</li>
                            </ul>
                        </div>
                        <div class="row align-items-center pt-60">
                            <div class=" col-lg-3">
                                <div class="binduz-er-blog-details-thumb">
                                    <img src="assets/images/app1_420_340.webp" alt="">
                                </div>
                            </div>
                            <div class=" col-lg-6">
                                <div class="binduz-er-blog-details-thumb-text text pl-10 pr-25 pt-20 pb-20">
                                    <p>При создании пакета приложений вы можете создать его вручную или использовать App Studio, полезное приложение внутри Teams, которое помогает разработчикам создавать приложения Teams.</p>
                                </div>
                            </div>
                            <div class=" col-lg-3">
                                <div class="binduz-er-blog-details-thumb">
                                    <img src="assets/images/app2_420_340.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="binduz-er-text pt-50">
                            <p>Структурированная лента с захватом, невидимые формованные чашечки для поддержки, прочно удерживающие спортивную деталь переднего вкладыша powermesh. Тепло и комфорт свободно свисают с тела, большой карман спереди, полная пуговица, хлопчатобумажная смесь, симпатичная и функциональная. Облегающие юбки ярких основных цветов, яркая палитра, плиссированные юбки в стиле чирлидерш, отделка в полоску, туфли-лодочки из штапельного материала, массивный средний блок.</p>
                        </div>
                        <div class="binduz-er-blog-details-thumb-play mt-50">
                            <img src="assets/images/details_1820_1000.jpg" alt="">
                            <div class="binduz-er-play">
                                <a class="binduz-er-video-popup" href="<?= $post['video_link'] ?>"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="binduz-er-text mt-50">
                            <p>Нехватка нескольких сотен аппаратов искусственной вентиляции легких в Нью-Йорке, эпицентре вспышки в США, побудила г-на Куомо заявить, что он распорядится забрать аппараты из разных частей штата и передать их в наиболее пострадавшие районы. В Нью-Йорке зафиксирован самый высокий за один день рост числа смертей - на 562 до 2935 - почти половина всех смертей, связанных с вирусом, зарегистрированных вчера в США. Белый дом может посоветовать тем, кто находится в горячих точках распространения вируса, носить маски на публике, чтобы помочь остановить распространение.</p>
                        </div>
                        <div class="binduz-er-social-share-tag d-block d-sm-flex justify-content-between align-items-center">
                            <div class="binduz-er-tag">
                                <ul>
                                    <li><a href="#">Популярный</a></li>
                                    <li><a href="#">Дизайн</a></li>
                                    <li><a href="#">UX</a></li>
                                </ul>
                            </div>
                            <div class="binduz-er-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                    <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="binduz-er-blog-post-prev-next d-flex justify-content-between align-items-center">
                            <div class="binduz-er-post-prev-next">
                                <a href="#">
                                    <span>Предыдущее Сообщение</span>
                                    <h4 class="binduz-er-title">Советы По Минимализму</h4>
                                </a>
                            </div>
                            <div class="binduz-er-post-prev-next text-end">
                                <a href="#">
                                    <span>Следующий пост</span>
                                    <h4 class="binduz-er-title">Меньше Значит Больше</h4>
                                </a>
                            </div>
                            <div class="binduz-er-post-bars">
                                <a href="#"><img src="assets/images/icon/post-bars.png" alt=""></a>
                            </div>
                        </div>



                        <div class="binduz-er-blog-related-post">
                            <div class="binduz-er-related-post-title">
                                <h3 class="binduz-er-title">Похожие посты</h3>
                            </div>
                            <div class="binduz-er-blog-related-post-slide">
                                <?php

                                $ResultReadPostByTrend = new \Models\Post;
                                $ResultReadPostByTrend = $ResultReadPostByTrend->read_post_by_trend();
                                foreach ($ResultReadPostByTrend as $post) {
                                    $category_id = $post['category_id'];
                                    $ResultReadCategoryByCategoryId = new \Models\Category;
                                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                                    foreach ($ResultReadCategoryByCategoryId as $category) {
                                    }
                                ?>
                                    <div class="binduz-er-video-post binduz-er-recently-viewed-item">
                                        <div class="binduz-er-latest-news-item">
                                            <div class="binduz-er-thumb">
                                                <img src="<?= $post['img_310_200'] ?>" alt="">
                                            </div>
                                            <div class="binduz-er-content">
                                                <div class="binduz-er-meta-item">
                                                    <div class="binduz-er-meta-categories">
                                                        <a href="#"><?= $category['name'] ?></a>
                                                    </div>
                                                    <div class="binduz-er-meta-date">
                                                        <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                                    </div>
                                                </div>
                                                <h5 class="binduz-er-title"><a href="#">
                                                        <?php

                                                        $post_title = $post['title'];
                                                        $post_title = substr($post_title, 0, 60);
                                                        $post_title = rtrim($post_title, "!,.-");
                                                        $post_title = substr($post_title, 0, strrpos($post_title, ' '));
                                                        echo $post_title . "… ";

                                                        ?>
                                                    </a></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="binduz-er-blog-post-form">
                            <form action="#">
                                <div class="binduz-er-blog-post-title">
                                    <h3 class="binduz-er-title">Оставить сообщение</h3>
                                </div>
                                <div class="row">
                                    <div class=" col-lg-6">
                                        <div class="binduz-er-input-box">
                                            <input type="text" placeholder="Введите полное имя">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <div class="binduz-er-input-box binduz-er-select-item">
                                                <select>
                                                    <option data-display="Select Subject">Веб-разработка</option>
                                                    <option value="1">Дизайнер Ui/Ux</option>
                                                    <option value="2">Другой вариант</option>
                                                    <option value="3">Отключенная опция</option>
                                                    <option value="4">Картофель</option>
                                                </select>
                                                <i class="fal fa-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6">
                                        <div class="binduz-er-input-box">
                                            <textarea name="#" id="#" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
                                        </div>
                                    </div>
                                    <div class=" col-lg-12">
                                        <div class="binduz-er-input-box text-end mt-15">
                                            <button type="button" class="binduz-er-main-btn">Отправить запрос</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                        <form action="#">
                            <div class="binduz-er-input-box">
                                <input type="text" placeholder="Поиск здесь...">
                                <button type="button"><i class="fal fa-search"></i></button>
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