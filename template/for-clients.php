<?php
/*
Template Name: шаблон страница - Пациентам
*/
get_header();
?>


<h1 class="visually-hidden">Гелиодент - Пациентам</h1>
<div class="bg-wrapper overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/pixel.png">
</div>

<section class="for-clients">
    <div class="container">
        <h2 class="for-clients__title">Если вы испытываете страх перед визитом к стоматологу. Мы сделаем всё
            возможное, чтобы помочь вам справиться с дискомфортными ощущениями</h2>
        <div class="healing-video healing-video-no-bg">
            <div class="container">
                <div class="healing-video__wrapper relative">
                    <video preload="metadata" muted
                        poster="<?php echo get_template_directory_uri() ?>/src/video/placeholder-2.png"
                        class="video for-clients-video">
                        <source src="<?php echo get_template_directory_uri() ?>/src/video/video.webm" type="video/webm">
                        <source src="<?php echo get_template_directory_uri() ?>/src/video/healing.mp4" type="video/mp4">
                    </video>
                    <!-- <img class="healing-video__play-btn" src="<?php echo get_template_directory_uri() ?>/src/video/play.svg" height="100" width="100" alt="img"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="visit visit-bg">
    <div class="container">
        <h2 class="title wow fadeInUp m-0">Не откладывайте визит</h2>
        <p class="title wow fadeInUp text-right"><span>к стоматологу!</span></p>

        <div class="visit__wrapper">
            <div class="visit__item">
                <h3>Во-первых, страх -</h3>
                <p>это почти нормально. По статистике до 80% людей испытывают неприятные ощущения различной степени
                    перед визитом
                    к стоматологу</p>
                <img class="visit__item-img-1"
                    src="<?php echo get_template_directory_uri() ?>/src/img/content/image-6.png" width="140"
                    height="140" alt="image">
            </div>
            <div class="visit__item">
                <h3>Во-вторых,</h3>
                <p>постарайтесь осознать, что вероятнее всего, ваш страх основан на негативных эмоциях,
                    закрепившаяся в период, когда не было хороших обезболивающих препаратов и способы лечения зубов
                    были довольно примитивными. Современная стоматологическая клиника вызывает нейтральные или
                    положительные эмоции. У нас приятно пахнет, играет негромкая музыка и конечно установлено самое
                    прогрессивное оборудование и используются самые современные препараты</p>
            </div>
            <div class="visit__item visit__item--desktop">
                <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/content/image-6.png" width="140"
                        height="140" alt="image">
                </div>
            </div>
            <div class="visit__item visit__item--desktop">
                <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/content/image-7.png" width="140"
                        height="140" alt="image">
                </div>
            </div>
            <div class="visit__item">
                <h3>Перед визитом</h3>
                <p>к стоматологу рекомендуем хорошенько выспаться, поесть за 3 часа до приема, почистить зубы у и
                    взять щетку с собой для демонстрации врачу. Важно настроиться на комфортное и приятное посещение
                    врача!</p>

                <img class="visit__item-img-2"
                    src="<?php echo get_template_directory_uri() ?>/src/img/content/image-7.png" width="140"
                    height="140" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="member">
    <img class="member-bg-img" src="<?php echo get_template_directory_uri() ?>/src/img/geliodent-string.png" alt="">
    <div class="container">
        <h2 class="member__title">Памятки для вас</h2>
        <ul class="member__list">
            <li class="member__item">
                <div>
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/content/1.webp" width="467"
                            height="406" alt="image">
                    </div>
                    <p>После терапевтического лечения зубов
                    </p>
                </div>
                <a class="member__link" href="<?php echo get_template_directory_uri() ?>/src/file/file-1.pdf"
                    download>Скачать</a>
            </li>
            <li class="member__item">
                <div>
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/content/2.webp" width="467"
                            height="406" alt="image">
                    </div>
                    <p>После удаления зуба</p>
                </div>
                <a class="member__link" href="<?php echo get_template_directory_uri() ?>/src/file/file-1.pdf"
                    download>Скачать</a>
            </li>
            <li class="member__item">
                <div>
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/content/3.webp" width="467"
                            height="406" alt="image">
                    </div>
                    <p>По уходу пациенту, проходящему лечение брекет-системой</p>
                </div>
                <a class="member__link" href="<?php echo get_template_directory_uri() ?>/src/file/file-1.pdf"
                    download>Скачать</a>
            </li>
            <li class="member__item">
                <div>
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/content/4.webp" width="467"
                            height="406" alt="image">
                    </div>
                    <p>По пользованию съемными зубными протезами</p>
                </div>
                <a class="member__link" href="<?php echo get_template_directory_uri() ?>/src/file/file-1.pdf"
                    download>Скачать</a>
            </li>
            <li class="member__item">
                <div>
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/content/5.webp" width="467"
                            height="406" alt="image">
                    </div>
                    <p>После проведения амбулаторного хирургического стоматологического вмешательства</p>
                </div>

                <a class="member__link" href="<?php echo get_template_directory_uri() ?>/src/file/file-1.pdf"
                    download>Скачать</a>
            </li>
        </ul>
    </div>
</section>

<section class="careful">
    <div class="container">
        <h2 class="title">Мы заботимся <span>о своих пациентах!</span></h2>

        <div class="careful__wrapper">
            <div class="careful__item">
                <a class="info-link popup-link" href="#popup">
                    <span>Задать вопросы</span>
                    <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
                    </svg>
                </a>
            </div>
            <div class="careful__item">
                <p>Пожалуйста, выполняйте все рекомендации, которые мы разработали для вас, с учетом различных
                    медицинских манипуляций! В случае возникновения вопросов обращайтесь
                    в Центр зубной имплантации и сложного протезирования "Гелиодент"</p>
            </div>
        </div>
        <img class="careful__img" src="<?php echo get_template_directory_uri() ?>/src/img/geliodent-string.png"
            width="1441" height="395" alt="image">
    </div>
</section>

<section class="calculate calculate-bg-2">
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