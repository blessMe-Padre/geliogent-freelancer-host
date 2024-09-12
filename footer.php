<section id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content relative">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>
            <h2 class="popup__title">оставьте свои контакты и наш</h2>
            <p class="popup__sub-title">администратор свяжется с вами</p>

            <img class="form-image" src="<?php echo get_template_directory_uri() ?>/src/img/menu-string.webp" alt="">
            <form action="#">
                <div class="form-wrapper">
                    <div class="form__item">
                        <p class="form__label">Введите имя</p>
                        <label for="formName" class="label_text">
                            <input id="formName" type="text" name="name">
                        </label>
                    </div>

                    <div class="form__item">
                        <p class="form__label">Введите телефон</p>
                        <label for="formPhone" class="label_text">
                            <input id="formPhone" type="tel" name="phone">
                        </label>
                    </div>
                </div>
                <div class="form-submit-wrapper">
                    <input class="form__submit-input" type="submit" value="Записаться"></input>
                </div>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">

            <div class="footer__block">
                <div class="footer__header">
                    <img class="footer__logo" src="<?php echo get_template_directory_uri() ?>/src/img/footer-logo.png"
                        width="345" height="90" alt="logo">
                    <a class="footer-button footer-button--mobile" href="#">читать новости</a>
                </div>
                <div class="footer__text">
                    <p>Общество с ограниченной ответственностью "Гелиодент"</p>
                    <p>ИНН 2538046581</p>
                    <p>ОГРН 1022501902830</p>
                    <p>Юр. адрес 690091, Приморский край, г. Владивосток, ул. Адмирала Фокина, дом № 1, корпус А</p>
                </div>
                <a class="footer-button" href="#">читать новости</a>
            </div>

            <div class="footer__list-wrapper">
                <div class="footer__list-item max-w-[185px] md:max-w-[292px]">
                    <h3 class="footer__list-title">УСЛУГИ</h3>
                    <?php wp_nav_menu([
                        'theme_location' => 'top-services',
                        'container' => '',
                        'menu_class' => 'footer__list',
                        'menu_id' => ''
                    ]);
                    ?>
                </div>
                <div class="footer__list-item">
                    <h3 class="footer__list-title">ПАЦИЕНТАМ</h3>
                    <?php wp_nav_menu([
                        'theme_location' => 'top-for-clients',
                        'container' => '',
                        'menu_class' => 'footer__list',
                        'menu_id' => ''
                    ]);
                    ?>
                </div>
                <div class="footer__list-item footer__list-item--social">
                    <div class="mb-5">
                        <h3 class="footer__list-title">КОНТАКТЫ</h3>
                        <ul class="footer__list">
                            <li>г. Владивосток,</li>
                            <li>ул. Адмирала Фокина, 1а</li>
                            <li><a href="tel:+74232300330">+7 (423) 2-300-330</a></li>
                            <li><a href="tel:+74232260557">+7 (423) 226-05-570</a></li>
                            <li><a href="tel:+79242563246">+7 (924) 256-32-46</a></li>
                            <li><a href="mailto:info@vladstom.ru">info@vladstom.ru</a></li>
                        </ul>
                    </div>
                    <div class="footer__social">
                        <h3>Мы в соц сетях</h3>
                        <ul>
                            <li><a class="text-white underline" href="#">Вконтакте</a></li>
                            <li><a class="text-white underline" href="#">Telegram</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer__text footer__text--mobile">
            <p>Общество с ограниченной ответственностью "Гелиодент"</p>
            <p>ИНН 2538046581</p>
            <p>ОГРН 1022501902830</p>
            <p>Юр. адрес 690091, Приморский край, г. Владивосток, ул. Адмирала Фокина, дом № 1, корпус А</p>
        </div>

        <div class="footer__footer">
            <p>© <span class="data-span">0000</span> Стоматологический центр «Гелиодент» Политика конфиденциальности
            </p>
            <a href="#">Политика конфиденциальности</a>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/vendor/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/ScrollToPlugin.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/index-LqNLAlnx.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/smooth-scroll.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script>
<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>