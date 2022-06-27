<!-- FOOTER START -->

<footer class="binduz-er-footer-area-4">
    <div class=" container">
        <div class="row">
            <div class=" col-lg-12">
                <div class="row">
                    <div class=" col-lg-3">
                        <div class="binduz-er-footer-about binduz-er-footer-about-4">
                            <div class="binduz-er-logo">
                                <a href="<?= PATH ?>/"><img src="assets/images/logo-7.png" alt=""></a>
                            </div>
                            <p>Майкл Мэдиган в воскресенье столкнулся с реальностью, что ему не хватает поддержки почти трети избирателей</p>
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-lg-5">
                        <div class="binduz-er-footer-gallery ml-50">
                            <div class="binduz-er-footer-title">
                                <h4 class="binduz-er-title">Фото-витрина</h4>
                            </div>
                            <div class="binduz-er-footer-gallery-widget d-flex">
                                <?php foreach ($ResultReadPostLimit3 as $post) { ?>
                                    <div class="binduz-er-item">
                                        <a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>">
                                            <img src="<?= $post['img_90_90'] ?>" alt="">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="binduz-er-footer-gallery-widget d-flex">
                                <?php foreach ($ResultReadPostLimit3Offset3 as $post) { ?>
                                    <div class="binduz-er-item">
                                        <a href="<?= PATH ?>/details?post_id=<?= $post['id'] ?>">
                                            <img src="<?= $post['img_90_90'] ?>" alt="">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4">
                        <div class="binduz-er-footer-navigation binduz-er-footer-navigation-4">
                            <div class="binduz-er-footer-title">
                                <h3 class="binduz-er-title">Информация о компании</h3>
                            </div>
                            <div class="binduz-er-footer-list">
                                <ul>
                                    <li><a href="<?= PATH ?>/about-us">О нас</a></li>
                                    <li><a href="https://habr.com/ru/post/486328/">Условия обслуживания</a></li>
                                    <li><a href="<?= PATH ?>/contact">Контакты</a></li>
                                    <li><a href="https://dvayarda.ru/marketing/pechatnaya-reklama/">Местная печатная реклама</a></li>
                                    <li><a href="https://blog.calltouch.ru/kak-sdelat-effektivnyj-razdel-faq-na-sajte/">FAQ</a></li>
                                    <li><a href="https://marketing-group.ru/news/media-komplekty-chto-takoe-media-komplekt-i-zachem-on-vam-nuzhen">Медиа-комплект</a></li>
                                </ul>
                                <ul>
                                    <li><a href="https://rosmining.ru/?review=%D1%81%D0%B0%D0%BC%D1%8B%D0%B5-%D0%BA%D1%80%D1%83%D0%BF%D0%BD%D1%8B%D0%B5-%D0%BA%D0%B0%D1%80%D1%8C%D0%B5%D1%80%D1%8B-%D1%80%D0%BE%D1%81%D1%81%D0%B8%D0%B8">Карьеры</a></li>
                                    <li><a href="https://vc.ru/services/242655-soblyudat-nelzya-narushat-vse-o-politike-konfidencialnosti">Политика конфиденциальности</a></li>
                                    <li><a href="https://rusarchives.ru/">Архивы</a></li>
                                    <li><a href="https://www.biglion.ru/?utm_campaign=Commons_RF_Yandex_Master-Campaign_Non-brand_74242833__---autotargeting&utm_medium=cpc&utm_source=ya_direct_non_brand&utm_term=---autotargeting&utm_content=4908274908__v3%7C%7C%7C%7C12121065815%7C%7C38734990881%7C%7C1%7C%7Cpremium%7C%7Cnone%7C%7Csearch%7C%7Cno&utm_id=ic%7C74242833%7C4908274908%7C12121065815%7C38734990881%7C%7Csearch%7Cpremium&etext=2202.o69gocZyfNUt4lPNimrW9dzf-tLPxTvN6JQAa1wkpu50dXB5bnRoaWthZnBwZGF0.fd493b84383882df01543a4ec95f3545a6e6774a&yclid=3564000314204415054">Купоны</a></li>
                                    <li><a href="https://habr.com/ru/post/321924/">Управление веб-уведомлениями</a></li>
                                    <li><a href="https://www.chicagotribune.com/">Магазин Chicago Tribune</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="binduz-er-footer-copyright-area binduz-er-footer-copyright-area-4">
    <div class=" container">
        <div class="row align-items-center">
            <div class=" col-lg-6">
                <div class="binduz-er-copyright-text">
                    <p>Copyright @<span>QuomodoTheme</span> - 2022</p>
                </div>
            </div>
            <div class=" col-lg-6">
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

<!--====== jquery js ======-->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== nice select js ======-->
<script src="assets/js/jquery.nice-select.min.js"></script>

<!--====== Isotope js ======-->
<script src="assets/js/isotope.pkgd.min.js"></script>

<!--====== Images Loaded js ======-->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

</body>

</html>

<!-- FOOTER START -->