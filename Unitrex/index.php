<?php
get_header("home"); ?>

<!--Body for Home page-->
<div id="service" class="about_our_service">
    <div class="particle_left_about_our_service">
        <div id="particle_left_about_our_service"></div>
    </div>

        <h2 class="our_sevice_title"><?php
            echo get_theme_mod('our_sevice_title'); ?></h2>

        <div class="outsourcing_content">
            <img class="cube_img" src="<?php
            echo get_template_directory_uri(); ?>/img/cube.png" alt="">
            <h3 class="outsourcing_title"> <?php
                echo get_theme_mod('outsourcing_title'); ?></h3>
            <p class="outsourcing_text"><?php
                echo get_theme_mod('outsourcing_text'); ?></p>
        </div>

        <div class="outstaffing_content">
            <img class="cube_img" src="<?php
            echo get_template_directory_uri(); ?>/img/cube.png" alt="">
            <h3 class="outstaffing_title"> <?php
                echo get_theme_mod('outstaffing_title'); ?></h3>
            <p class="outstaffing_text"><?php
                echo get_theme_mod('outstaffing_text'); ?></p>
        </div>
        <h3 id="values" class="important_us_title"><?php
            echo get_theme_mod('important_us_title'); ?></h3>
        <div class="values">
            <div id="carousel_for_home_page" class="carousel">
                <button class="arrow prev prev_for_home_page"><img class="swipe_button" src="<?php
                    echo get_template_directory_uri(); ?>/img/arrow_left.png" alt=""></button>
                <div class="gallery">
                    <ul class="images">
                        <li class="part_slider red"><img class="value_image value_red_img"
                                                         src="<?php
                                                         echo get_template_directory_uri(); ?>/img/red.png"
                                                         alt="">
                            <p><?php
                                echo get_theme_mod('value_red_text'); ?></p></li>
                        <li class="part_slider orange"><img class="value_image value_orange_img"
                                                            src="<?php
                                                            echo get_template_directory_uri(); ?>/img/yellou.png"
                                                            alt="">
                            <p><?php
                                echo get_theme_mod('value_yellou_text'); ?></p></li>
                        <li class="part_slider green"><img class="value_image value_green_img"
                                                           src="<?php
                                                           echo get_template_directory_uri(); ?>/img/green.png"
                                                           alt="">
                            <p><?php
                                echo get_theme_mod('value_green_text'); ?></p></li>
                        <li class="part_slider blue"><img class="value_image value_blue_img"
                                                          src="<?php
                                                          echo get_template_directory_uri(); ?>/img/blue.png"
                                                          alt="">
                            <p><?php
                                echo get_theme_mod('value_blue_text'); ?></p></li>
                        <li class="part_slider violet"><img class="value_image value_violet_img"
                                                            src="<?php
                                                            echo get_template_directory_uri(); ?>/img/violet.png"
                                                            alt="">
                            <p><?php
                                echo get_theme_mod('value_violet_text'); ?></p></li>
                        <li class="part_slider red"><img class="value_image value_red_img"
                                                         src="<?php
                                                         echo get_template_directory_uri(); ?>/img/hand-ico.png"
                                                         alt="">
                            <p><?php
                                echo get_theme_mod('value_red_two_text'); ?></p></li>
                        <li class="part_slider orange"><img class="value_image value_orange_img"
                                                            src="<?php
                                                            echo get_template_directory_uri(); ?>/img/target-ico.png"
                                                            alt="">
                            <p><?php
                                echo get_theme_mod('value_yellou_two_text'); ?></p></li>
                        <li class="part_slider green"><img class="value_image value_green_img"
                                                           src="<?php
                                                           echo get_template_directory_uri(); ?>/img/light.png"
                                                           alt="">
                            <p><?php
                                echo get_theme_mod('value_green_two_text'); ?></p></li>
                        <li class="part_slider blue"><img class="value_image value_blue_img"
                                                          src="<?php
                                                          echo get_template_directory_uri(); ?>/img/brain.png"
                                                          alt="">
                            <p><?php
                                echo get_theme_mod('value_blue_two_text'); ?></p></li>
                        <li class="part_slider violet"><img class="value_image value_violet_img"
                                                            src="<?php
                                                            echo get_template_directory_uri(); ?>/img/heart.png"
                                                            alt="">
                            <p><?php
                                echo get_theme_mod('value_violet_two_text'); ?></p></li>
                        <li class="part_slider red"><img class="value_image value_red_img"
                                                         src="<?php
                                                         echo get_template_directory_uri(); ?>/img/square-ico.png"
                                                         alt="">
                            <p><?php
                                echo get_theme_mod('value_red_three_text'); ?></p></li>
                        <li class="part_slider orange"><img class="value_image value_orange_img"
                                                            src="<?php
                                                            echo get_template_directory_uri(); ?>/img/puzzle-ico.png"
                                                            alt="">
                            <p><?php
                                echo get_theme_mod('value_yellou_three_text'); ?></p></li>
                    </ul>
                </div>
                <button class="arrow next next_for_home_page"><img class="swipe_button" src="<?php
                    echo get_template_directory_uri(); ?>/img/arrow_right.png" alt=""></button>
            </div>
            <div class="value_mobile">
                <button onclick="this.focus()" class="part_value_mobile red_mobile"><img class="value_mobile_img"
                                                                                         src="<?php
                                                                                         echo get_template_directory_uri(); ?>/img/red.png"
                                                                                         alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_red_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile orange_mobile"><img class="value_mobile_img"
                                                                                            src="<?php
                                                                                            echo get_template_directory_uri(); ?>/img/yellou.png"
                                                                                            alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_yellou_text'); ?></p></button>
                <br>
                <button onclick="this.focus()" class="part_value_mobile green_mobile"><img class="value_mobile_img"
                                                                                           src="<?php
                                                                                           echo get_template_directory_uri(); ?>/img/green.png"
                                                                                           alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_green_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile blue_mobile"><img class="value_mobile_img"
                                                                                          src="<?php
                                                                                          echo get_template_directory_uri(); ?>/img/blue.png"
                                                                                          alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_blue_text'); ?></p></button>
                <br>
                <button onclick="this.focus()" class="part_value_mobile violet_mobile"><img class="value_mobile_img"
                                                                                            src="<?php
                                                                                            echo get_template_directory_uri(); ?>/img/violet.png"
                                                                                            alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_violet_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile red_mobile"><img class="value_mobile_img"
                                                                                         src="<?php
                                                                                         echo get_template_directory_uri(); ?>/img/hand-ico.png"
                                                                                         alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_red_two_text'); ?></p></button>
                <br>
                <button onclick="this.focus()" class="part_value_mobile orange_mobile"><img class="value_mobile_img"
                                                                                            src="<?php
                                                                                            echo get_template_directory_uri(); ?>/img/target-ico.png"
                                                                                            alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_yellou_two_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile green_mobile"><img class="value_mobile_img"
                                                                                           src="<?php
                                                                                           echo get_template_directory_uri(); ?>/img/light.png"
                                                                                           alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_green_two_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile blue_mobile"><img class="value_mobile_img"
                                                                                          src="<?php
                                                                                          echo get_template_directory_uri(); ?>/img/brain.png"
                                                                                          alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_blue_two_text'); ?></p></button>
                <button class="part_value_mobile violet_mobile"><img class="value_mobile_img"
                                                                     src="<?php
                                                                     echo get_template_directory_uri(); ?>/img/heart.png"
                                                                     alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_violet_two_text'); ?></p></button>
                <br>
                <button onclick="this.focus()" class="part_value_mobile red_mobile"><img class="value_mobile_img"
                                                                                         src="<?php
                                                                                         echo get_template_directory_uri(); ?>/img/square-ico.png"
                                                                                         alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_red_three_text'); ?></p></button>
                <button onclick="this.focus()" class="part_value_mobile orange_mobile"><img class="value_mobile_img"
                                                                                            src="<?php
                                                                                            echo get_template_directory_uri(); ?>/img/puzzle-ico.png"
                                                                                            alt="">
                    <p class="value_mobile_text"><?php
                        echo get_theme_mod('value_yellou_three_text'); ?></p>
                </button>
            </div>
        </div>
    <div class="particle_right_about_our_service">
        <?php add_filter( 'the_title', 'max_title_length'); ?>
        <div id="particle_right_about_our_service"></div>
    </div>
</div>
<div id="career" class="find_job">
    <div class="particle_left_about_find_job">
        <div id="particle_left_about_find_job"></div>
    </div>
    <h2 class="find_job_title"><?php
        echo get_theme_mod('find_job_title'); ?></h2>
        <form class="show_all_job_form_button" action="<?php
        echo get_home_url(); ?>/vacancy-list-page/">
        <button class="find_job_button">Show all jobs</button>
        </form>
    <div class="hot_vacancies_view">
        <?php
        $posts = get_posts(
            array(
                'category' => 'hot_vacancy',
                'post_type' => 'vacancies',
                'suppress_filters' => true
            )
        );
        foreach ($posts as $post) {
            setup_postdata($post); ?>

            <div class="hot_list_vacancies">
                <a class="vacancy_hot_link" href="<?php
                the_permalink(); ?>">
                    <div class="hot">HOT</div>
                    <div class="hot_vacancy_info">SOFTWARE DEVELOPMENT</div>
                    <p class="location">UKRAINE|KHARKOV</p>
                    <div class="hot_vacancy_title"><?php
                        the_title() ?></div>
                    <p class="read_more">Read more &#62;</p>
                </a>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="particle_right_about_find_job">
        <div id="particle_right_about_find_job"></div>
    </div>
</div>

<div id="contacts" class="write_us_white">
    <div class="particle_left_write_us_white">
        <div id="particle_left_write_us_white"></div>
    </div>
    <h2 class="write_us_white_title"><?php
        echo get_theme_mod('write_us_title'); ?></h2>
    <form class="form_write_us" action="<?php echo get_template_directory_uri(); ?>/send.php" method="post"
          id="ajax_form" enctype="multipart/form-data">
        <input maxlength="12" name="first_name" value="" size="40" type="text" required placeholder="  First Name*"
               class="size_form" required>
        <input maxlength="20" name="last_name" required placeholder="  Last Name*" class="size_form right_input"
               type="text"><br>
        <input maxlength="50" name="email" required placeholder="  Email*" class="size_form input_line" type="text">
        <input maxlength="15" name="phone_number" value="" size="40"
               pattern="[0-9]{5,10}"
               type="tel" required placeholder="  Phone*"
               class="size_form right_input input_line" required><br>

        <input maxlength="20" name="skype" placeholder="  Skype" class="size_form input_line" type="text">
        <input maxlength="50" name="linkedin" placeholder="  Linkedin" class="size_form right_input input_line"
               type="text">
        <input maxlength="1500" class="checkbox_cover" type="checkbox" name="multi_note" value="1"
               onclick="showMe(this)">
        <p class="add_cover_latter_text">Add a cover letter</p>


        <textarea name="cover_latter" class="show"></textarea>
        <br><label for="file-upload" class="custom-file-upload">
            <img class="img_form_file"
                 src="<?php
                 echo get_template_directory_uri(); ?>/img/clip.png"> Upload your CV
        </label>
        <input id="file-upload" name="cv" type="file"/>

        <br><input class="button_write_us_white" type="submit" id="btn" value="Submit">
    </form>

    <div class="particle_right_write_us_white">
        <div id="particle_right_write_us_white"></div>
    </div>
</div>

<div id="history" class="our_story_button">
    <div class="particle_our_story_button">
        <div id="our_story"></div>
    </div>
    <h2 class="our_story_button_title"><?php
        echo get_theme_mod('our_story_button_title'); ?></h2>

    <a class="our_story_button_button_link"
       href="<?php
       echo get_home_url();?>/history-page/ ">
        <button class="our_story_button_button">Read
            More
        </button>
    </a>

</div>
<?php
get_footer(); ?>