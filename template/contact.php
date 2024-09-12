<?php
/*
Template Name: шаблон страница - Контакты
*/
get_header();
?>

<h1 class="visually-hidden">Гелиодент - Контакты</h1>
<div class="bg-wrapper overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/pixel.png">
</div>

<section class="contact">
    <div class="container">
        <h2 class="contact__title">Контакты</h2>
        <p class="contact__text">Мы предлагаем широкий спектр стоматологических услуг для всей семьи. Наши врачи —
            это опытные профессионалы, которые используют передовые технологии и материалы для обеспечения высокого
            качества лечения</p>
    </div>
</section>

<div class="container contact-map">
    <iframe
        src="https://yandex.ru/map-widget/v1/?um=constructor%3A8c1581ea4a79d89fded821250b109ae0c37eb89d8b7ae7a1cf155bc80263107f&amp;source=constructor"
        width="100%" height="659" frameborder="0">
    </iframe>
</div>

<section class="contact-address">
    <div class="container">
        <div class="contact-address__wrapper custom-border-top">
            <div class="contact-address__block">
                <p class="contact-address__text">г. Владивосток, район <br>“Центр” (стадион
                    “Динамо”),<br>ул.&nbsp;Адмирала Фокина, 1а</p>
                <div class="contact-address__inner">
                    <p class="contact-address__text-gray">ПН-ПТ 9.00 до 20.00,</p>
                    <p class="contact-address__text-gray">СБ 9.00 до 17.00,</p>
                    <p class="contact-address__text-gray">ВС-Выходной</p>
                </div>
            </div>

            <div class="contact-address__block">
                <ul class="contact-address__list">
                    <li><a href="tel:+74232260557">+7 (423) 226-05-57</a></li>
                    <li><a href="tel:+79242563246">+7 (924) 256-32-46</a></li>
                    <li><a href="mailto:info@vladstom.ru">info@vladstom.ru</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="calculate">
    <div class="container">
        <img class="calculate__img" src="<?php echo get_template_directory_uri() ?>/src/img/content/image-3.webp"
            width="407" height="408" alt="image">
        <h2 class="title wow fadeInUp text-center">Задайте вопрос специалисту</h2>
        <p class="calculate__text">Заполните форму и наш администратор свяжется с вами</p>

        <div class="calculate__link-wrapper">
            <a class="info-link popup-link" href="#popup">
                <span>Задать вопросы</span>
                <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
                </svg>
            </a>
        </div>

        <p class="calculate-bg-text">гелиодент</p>
    </div>
</section>


<?php get_footer(); ?>