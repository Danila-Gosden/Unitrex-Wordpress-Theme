<!--Header for Vacancies page-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="header_vacancies">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GFW736KJW3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GFW736KJW3');
    </script>
    <title>Vacancies Page</title>
    <?php
    wp_head(); ?>

    <div class="container">
        <input id="toggle" type="checkbox">
        <label class="toggle-container" for="toggle">
            <span class="button button-toggle"></span>
        </label>
        <nav class="nav" id="menu_PC">
            <a class="nav-item" id="show_link_one" href="#service"><?php
                echo get_theme_mod('menu_part_one'); ?></a>
            <a class="nav-item" id="show_link_two" href="#values"><?php
                echo get_theme_mod('menu_part_two'); ?></a>
            <a class="nav-item" id="show_link_three" href="#career"><?php
                echo get_theme_mod('menu_part_three'); ?></a>
            <a class="nav-item" id="show_link_four" href="#history"><?php
                echo get_theme_mod('menu_part_four'); ?></a>
            <a class="nav-item" id="show_link_five" href="#contacts"><?php
                echo get_theme_mod('menu_part_five'); ?></a>
            <select id="selected" class="nav-item select_language color_part_menu language_select_mabail"
                    onchange="window.location.href = this.options[this.selectedIndex].value">
                <option selected value="http://leasoft-kh.org/">EN</option>
                <option value="http://leasoft-kh.org/ru">RU</option>
                <option value="http://leasoft-kh.org/ua">UA</option>
                <option value="http://leasoft-kh.org/nl">NL</option>
                <option value="http://leasoft-kh.org/fr">FR</option>
            </select>
        </nav>
    </div>
    <div id="menu" class="header_home_menu header_vacancy_list_menu">
        <a class="part_menu_pc" href="#service"><?php
            echo get_theme_mod('menu_part_one'); ?></a>
        <a class="part_menu_pc" href="#values"><?php
            echo get_theme_mod('menu_part_two'); ?></a>
        <a class="part_menu_pc" href="#career"><?php
            echo get_theme_mod('menu_part_three'); ?></a>
        <a class="part_menu_pc" href="#history"><?php
            echo get_theme_mod('menu_part_four'); ?></a>
        <a class="part_menu_pc" href="#contacts"><?php
            echo get_theme_mod('menu_part_five'); ?></a>
        <div class="language_header_home_menu part_menu_pc">
            <div class="dropdown">
                <p class="dropbtn">EN</p>
                <div class="dropdown-content">
                    <a href="http://leasoft-kh.org/">EN</a>
                    <a href="http://leasoft-kh.org/ru">RU</a>
                    <a href="http://leasoft-kh.org/ua">UA</a>
                    <a href="http://leasoft-kh.org/nl">NL</a>
                    <a href="http://leasoft-kh.org/fr">FR</a>
                </div>
            </div>
        </div>
    </div>
    <h2 class="header_vacancies_title"><?php
        echo get_theme_mod('vacancies_header_title'); ?></h2>
</div>