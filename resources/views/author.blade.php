@include('header')

<div class="binduz-er-author-user-area">
    <div class=" container">
        <div class="row">
            <div class=" col-lg-12">
                <div class="binduz-er-author-box">
                    <div class="binduz-er-thumb">
                        <img src="assets/images/rosalina_480_480.jpg" alt="">
                        <span>30 постов</span>
                    </div>
                    <div class="binduz-er-content">
                        <p>В вашем списке мест, где люди могут получить доступ к вашему веб-приложению, Teams, вероятно, находится под номером “нет в списке”. Но оказывается, что предоставление доступа к вашему приложению там, где ваши пользователи уже работают, имеет некоторые серьезные преимущества. В этой статье мы рассмотрим, как Teams создает веб-приложения для каждой компании</p>
                        <div class="binduz-er-meta-author">
                            <span>Розалина Д. Уильям <span>- Основатель</span></span>
                        </div>
                    </div>
                    <div class="binduz-er-author-contact d-flex align-content-center">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="binduz-er-contact-link">
                            <a href="#">Свяжитесь Со Мной</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== BINDUZ AUTHOR USER PART ENDS ======-->

<!--====== BINDUZ AUTHOR USER PART START ======-->

<section class="binduz-er-author-item-area pb-20">
    <div class=" container">
        <div class="row">
            <div class=" col-lg-9">
                <?php

                $author_id = $_GET['id'];
                $ResultReadPostByAuthorId = new \Models\Post;
                $ResultReadPostByAuthorId = $ResultReadPostByAuthorId->read_post_by_author_id($author_id);
                foreach ($ResultReadPostByAuthorId as $post) {

                    $category_id = $post['category_id'];

                    $ResultReadCategoryByCategoryId = new \Models\Category;
                    $ResultReadCategoryByCategoryId = $ResultReadCategoryByCategoryId->read_category_by_category_id($category_id);
                    foreach ($ResultReadCategoryByCategoryId as $category) {
                    }

                ?>
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
                            <h3 class="binduz-er-title"><a href="<?= PATH ?>/details"><?= $post['title'] ?></a></h3>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">
                                    <?php
                                    $ResultReadAuthorByAuthorId = new \Models\Users;
                                    $ResultReadAuthorByAuthorId = $ResultReadAuthorByAuthorId->read_author_by_author_id($author_id);
                                    foreach ($ResultReadAuthorByAuthorId as $author) {
                                    }

                                    ?>
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
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="binduz-er-author-sidebar-search-bar">
                        <form action="#">
                            <div class="binduz-er-input-box">
                                <input type="text" placeholder="Search from here...">
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
                                                <h4 class="binduz-er-title"><a href="#">
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
                                                    <a href="#">
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
                                                <a href="#"><?= $category['name'] ?></a>
                                            </div>
                                            <div class="binduz-er-meta-date">
                                                <span><i class="fal fa-calendar-alt"></i><?= $post['date'] ?></span>
                                            </div>
                                        </div>
                                        <h5 class="binduz-er-title"><a href="#"><?= $post['title'] ?></a></h5>
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
                            <a class="binduz-er-main-btn" href="#">Покупка</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BINDUZ AUTHOR USER PART ENDS ======-->

@include('footer')