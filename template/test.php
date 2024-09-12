<?php
/*
Template Name: шаблон страница - Тестовая
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

<!-- client -->
<section class="our-clients about-screen-8 relative overflow-hidden">
    <img class="hero-decor" src="<?php echo get_template_directory_uri() ?>/src/img/decor/main-hero-decor.svg">
    <div class="container">
        <h2 class="title">Наши клиенты – <span>наша гордость</span></h2>
    </div>
    <div class="our-clients__wrapper-about relative">
        <ul class="our-clients__list">
            <!--    <li></li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li></li>
              -->
            <?php
            $count = 1;
            ?>
            <?php while (have_rows("наши_клиенты")):
                the_row(); ?>
                <?php
                if ($count % 4 == 1) {
                    echo '<li class="our-clients-item-mask">';
                }
                ?>
                <li class="our-clients-item-mask">
                    <video preload="metadata" poster="<?php echo get_template_directory_uri() ?>/src/video/placeholder.png"
                        class="video">
                        <source src="<?php the_sub_field("видео") ?>" type="video/mp4">
                    </video>
                    <img class="our-clients__item-img" src="<?php echo get_template_directory_uri() ?>/src/video/play.svg"
                        height="100" width="100" alt="img">
                    <p class="our-clients__item-title">Лечение зуба</p>
                </li>
            <?php
            if ($count % 4 == 0) {
                echo '<li class="our-clients-item-mask">';
            }
            $count++;

            endwhile; ?>
          
        </ul>
        <img class="our-clients__bg-image" src="<?php echo get_template_directory_uri() ?>/src/img/geliodent-string.png"
            width="1441" height="395" alt="image">
    </div>
</section>

<?php get_footer(); ?>