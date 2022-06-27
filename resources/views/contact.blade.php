@include('header')

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