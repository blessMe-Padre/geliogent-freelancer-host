<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<h1 class="visually-hidden">Гелиодент</h1>

<div class="preloader">
    <div class="rings-wrapper">
        <div class="rings">
            <div class="ring1"></div>
            <div class="ring2"></div>
            <div class="ring3"></div>
            <div class="ring4"></div>
            <div class="ring5"></div>
        </div>
        <p class="rings-percent z-12">0%</p>
    </div>
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="txt-loading">
                <span data-text-preloader="Г" class="letters-loading">
                    Г
                </span>
                <span data-text-preloader="е" class="letters-loading">
                    е
                </span>
                <span data-text-preloader="л" class="letters-loading">
                    л
                </span>
                <span data-text-preloader="и" class="letters-loading">
                    и
                </span>
                <span data-text-preloader="о" class="letters-loading">
                    о
                </span>
                <span data-text-preloader="д" class="letters-loading">
                    д
                </span>
                <span data-text-preloader="е" class="letters-loading">
                    е
                </span>
                <span data-text-preloader="н" class="letters-loading">
                    н
                </span>
                <span data-text-preloader="т" class="letters-loading">
                    т
                </span>
            </div>
        </div>
    </div>
    <p class="preloader__subtitle">Инновационная стоматология</p>
</div>
<!-- ======================================================================================================= -->

<div class="bg-wrapper overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/pixel.png">
</div>

<section class="section hero section-1 overflow-hidden">

    <img class="hero-decor" src="<?php echo get_template_directory_uri() ?>/src/img/decor/main-hero-decor.svg">
    <div class="container">
        <div class="hero__animate-title">
            <div class="animation-slick-to-right">
                <h2>гелиодент</h2>
            </div>
        </div>
        <div class="hero__wrapper">
            <div class="hero__item">
                <p class="hero__item-title">32</p>
                <p class="hero__item-text">специалиста в штате</p>
            </div>
            <div class="hero__item">
                <div class="bg-dark-blue animation-slick-to-right">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/hero/image-1.jpg" height="345"
                        width="345" alt="">
                </div>
            </div>
            <div class="hero__item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/hero/image-2.jpg" height="345" width="345"
                    alt="">
            </div>
            <div class="hero__item">
                <p class="hero__item-title">25</p>
                <p class="hero__item-text">лет работы</p>
            </div>
            <div class="hero__item">
                <div class="bg-dark-blue animation-slick-to-top">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/hero/image-3.jpg" height="345"
                        width="345" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section table section-2 overflow-hidden">
    <img class="table-decor-vector-1" src="<?php echo get_template_directory_uri() ?>/src/img/table-vector-2.svg">
    <img class="table-decor-vector-2" src="<?php echo get_template_directory_uri() ?>/src/img/table-vector-1.svg">
    <div class="container">
        <div class="table__wrapper">
            <div class="table__row flex-col-reverse sm:flex-row mb-8 sm:mb-0">
                <div>
                    <p class="table__row-title wow fadeInUp">>2000</p>
                    <p class="table__row-text">пациентов в год</p>
                </div>
                <div class="relative w-full flex table__row-images ">
                    <div class="table__img">
                        <img class="table__img-1"
                            src="<?php echo get_template_directory_uri() ?>/src/img/table/image-1.png" width="424"
                            height="342" alt="">
                    </div>
                    <div class="table__img">
                        <img class="table__img-2"
                            src="<?php echo get_template_directory_uri() ?>/src/img/table/image-2.png" width="424"
                            height="342" alt="">
                    </div>
                </div>
            </div>
            <div class="table__row flex-col sm:flex-row">
                <div class="relative w-full flex table__row-images">
                    <div class="table__img">
                        <img class="table__img-3"
                            src="<?php echo get_template_directory_uri() ?>/src/img/table/image-3.png" width="424"
                            height="342" alt="">
                    </div>
                    <div class="table__img">
                        <img class="table__img-4"
                            src="<?php echo get_template_directory_uri() ?>/src/img/table/image-4.png" width="424"
                            height="342" alt="">
                    </div>
                </div>
                <div>
                    <p class="table__row-title wow fadeInUp">>8400</p>
                    <p class="table__row-text">установленных имплантатов</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section info section-3 overflow-hidden">
    <div class="container">
        <div class="flex items-center justify-between gap-3 mb-11 info-wrapper">
            <div>
                <h2 class="info__title wow fadeInUp wow fadeInUp">Запишитесь на консультацию</h2>
                <p class="info__sub-title wow fadeInUp wow fadeInUp">консилиум от Гелиодент</p>
            </div>
            <a class="info-link popup-link" href="#popup">
                <span>Записаться</span>
                <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
                </svg>
            </a>
        </div>
        <img class="info__img" src="<?php echo get_template_directory_uri() ?>/src/img/info.webp" width="1440"
            height="510" alt="img">
    </div>
</section>

<section class="section services-view section-4 overflow-hidden">
    <div class="container relative text-center">
        <img class="services-view__img-1 wow fadeInUp" data-wow-delay="0.5s"
            src="<?php echo get_template_directory_uri() ?>/src/img/services/image-1.jpg" width="200" height="140"
            alt="img">
        <img class="services-view__img-2 wow fadeInUp" data-wow-delay="1s"
            src="<?php echo get_template_directory_uri() ?>/src/img/services/image-2.jpg" width="200" height="140"
            alt="img">
        <img class="services-view__img-3 wow fadeInUp" data-wow-delay="0.5s"
            src="<?php echo get_template_directory_uri() ?>/src/img/services/image-3.jpg" width="200" height="140"
            alt="img">
        <img class="services-view__img-4 wow fadeInUp" data-wow-delay="1s"
            src="<?php echo get_template_directory_uri() ?>/src/img/services/image-4.jpg" width="200" height="140"
            alt="img">

        <h2 class="services-view__title border-subtitle">Профессиональное предоставление услуг</h2>
        <ul class="services-view__list">
            <li>
                <a class="services-view__link" href="#">
                    <span>Лечение зубов</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-06" href="#">
                    <span>Зубы за день, за 8 часов</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-04" href="#">
                    <span>Имплантация, протезирование и перепротезирование</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-02" href="#">
                    <span>Имплантация без костной пластики</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-015" href="#">
                    <span>Брекеты и элайнеры</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-01" href="#">
                    <span>Виниры</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-008" href="#">
                    <span>Наркоз</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
                <a class="services-view__link opacity-005" href="#">
                    <span>Гигиена и отбеливание</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right-lg.svg" width="70"
                        height="30" alt="перейти на услугу">
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="section card section-5 relative overflow-hidden">
    <div class="container text-center">
        <h2 class="card__title border-subtitle">Почему клиенты обращаются именно к нам</h2>
        <img class="card__img" src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-5-bg-l.webp"
            width="1440" height="600" alt="img">
        <p class="card__text card__text--mobile wow fadeIn"><span class="card__span">01 </span>Карты лояльности</p>
    </div>
</section>

<section class="section card section-6 pin relative overflow-hidden">
    <img class="card__img-full" src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-6.webp"
        width="1440" height="600" alt="img">
    <h2 class="card__text wow fadeIn"><span class="card__span">02 </span>Сопровождение каждого пациента куратором
        лечения</h2>ease-in-out;
</section>

<section class="section card section-7 pin relative overflow-hidden">
    <img class="card__img-full" src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-7.webp"
        width="1440" height="600" alt="img">
    <h2 class="card__text wow fadeIn"><span class="card__span">03 </span>Приём пациентов по полису ДМС «СОГАЗ» и
        «АльфаСтрахование»</h2>
</section>

<section class="section card section-8 pin relative overflow-hidden">
    <img class="card__img-full" src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-8.webp"
        width="1440" height="600" alt="img">
    <h2 class="card__text wow fadeIn"><span class="card__span">04 </span>Фиксация стоимости
        при подписании договора + кешбэк</h2>
</section>

<section class="section card section-9 relative overflow-hidden">
    <img class="card__img-full" src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-9.webp"
        width="1440" height="600" alt="img">
    <h2 class="card__text wow fadeIn"><span class="card__span">05 </span>Приём пациентов из других регионов</h2>
</section>

<section class="section news-section section-10 overflow-hidden">
    <div class="container">
        <h2 class="news-section__title wow fadeInUp">следите за <span>последними</span> новостями</h2>
        <div class="news-section__wrapper">
            <div class="image-wrapper news-section__item-1">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-10.webp" width="273"
                    height="273" alt="image">
            </div>
            <div>
                <a class="info-link m-auto popup-link" href="#popup">
                    <span>Читать</span>
                    <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
                    </svg> </a>
                <img src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-10-1.webp"
                    width="621" height="478" alt="image">
            </div>
            <div class="image-wrapper news-section__item-2">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/sections-bg/section-bg-10-2.webp"
                    width="273" height="273" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="section solution section-11 relative overflow-hidden">
    <img class="solution__vector" src="<?php echo get_template_directory_uri() ?>/src/img/content/solution-vector.svg"
        width="100%" alt="">
    <div class="container relative solution-container">
        <h2 class="solution__title  wow fadeInUp">«ГЕЛИОДЕНТ» — ПРОФЕССИОНАЛЬНОЕ РЕШЕНИЕ
            <span>СЛОЖНЫХ СТОМАТОЛОГИЧЕСКИХ ЗАДАЧ</span>
        </h2>
        <p class="solution__text">Запишитесь на консультацию прямо сейчас</p>
        <a class="info-link m-auto popup-link" href="#popup">
            <span>записаться</span>
            <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
            </svg>
        </a>
        <img class="solution__img-1" src="<?php echo get_template_directory_uri() ?>/src/img/content/image-1.webp"
            width="404" height="404" alt="image">
        <img class="solution__img-2" src="<?php echo get_template_directory_uri() ?>/src/img/content/image-2.webp"
            width="404" height="404" alt="image">
    </div>
</section>

<?php get_footer(); ?>