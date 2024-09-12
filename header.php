<!DOCTYPE html>
<html class="" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/vendor/index-BJbvSJGi.css">
    <title>Гелиодент | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="wrapper">

    <header class="z-10 w-full py-7 fixed header">
        <div class="container gap-5 flex items-center justify-between">
            <div class="flex items-center gap-5 md:gap-10">
                <button class="btn-close-menu">
                    <div>
                        <span class="btn-decor-span btn-decor-span-1"></span>
                        <span class="btn-decor-span btn-decor-span-2"></span>
                        <span class="btn-decor-span btn-decor-span-3"></span>
                    </div>

                    <span class="text-white uppercase text-xl btn-close-menu__text-span">Меню</span>
                </button>
                <a class="flex" href="/">
                    <img class="header__logo" loading="lazy"
                        src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" width="154" height="40"
                        alt="лого">
                </a>
            </div>
            <ul class="flex gap-4 md:gap-8">
                <li class="header__li"><a class="header__link link" href="tel:+74232260557">+7 (423) 226-05-57</a></li>
                <li class="header__li"><a class="header__link link" href="tel:+74232260557">+7 (423) 226-05-57</a></li>
                <li class="header__li"><a class="header__link link" href="mailto:info@vladstom.ru">info@vladstom.ru</a>
                </li>
                <li><a class="header__link header__link--mobile underline link"
                        href="mailto:info@vladstom.ru">WhatsApp</a></li>
                <li><a class="header__link header__link--mobile underline link"
                        href="mailto:info@vladstom.ru">Новости</a></li>
            </ul>
        </div>

        <div class="menu-window">
            <img class="menu-window__img-string"
                src="<?php echo get_template_directory_uri() ?>/src/img/menu-string.webp" width="1440" height="226"
                alt="img">
            <div class="container">
                <div class="menu-window__wrapper">
                    <nav class="menu-window__block">
                        <h2>УСЛУГИ</h2>
                        <?php wp_nav_menu([
                            'theme_location' => 'top-services',
                            'container' => '',
                            'menu_class' => 'menu-window__list menu-window__list--column',
                            'menu_id' => ''
                        ]);
                        ?>
                    </nav>
                    <nav class="menu-window__block">
                        <h2>ПАЦИЕНТАМ</h2>
                        <?php wp_nav_menu([
                            'theme_location' => 'top-for-clients',
                            'container' => '',
                            'menu_class' => 'menu-window__list',
                            'menu_id' => ''
                        ]);
                        ?>
                    </nav>
                </div>
                <div class="menu-window__footer">
                    <ul>
                        <li><a href="tel:+74232260557">+7 (423) 226-05-57</a></li>
                        <li><a href="tel:+79242563246">+7 (924) 256-32-46</a></li>
                        <li><a href="mailto:info@vladstom.ru">info@vladstom.ru</a></li>
                        <li><a class="underline" target="_blank" href="https://wa.me/74232260557">WhatsApp</a></li>
                        <li><a class="underline" href="#">новости</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>