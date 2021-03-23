<?php

/**
 * Template Name: History Page
 */
get_header("history"); ?>

<!--Body for History page-->
<div class="body_history">
    <div class="our_mission_and_vision_particles_left">
        <div id="our_mission_and_vision_particles_left"></div>
    </div>
        <h2 class="our_sevice_title"><?php
            echo get_theme_mod('our_mission_and_vision_title'); ?></h2>

        <div class="outsourcing_content">
            <img class="cube_img" src="<?php
            echo get_template_directory_uri(); ?>/img/cube.png" alt="">
            <h3 class="outsourcing_title"><?php
                echo get_theme_mod('our_vision_title'); ?></h3>
            <p class="outsourcing_text"><?php
                echo get_theme_mod('our_vision_text'); ?></p>
        </div>

        <div class="outstaffing_content">
            <img class="cube_img" src="<?php
            echo get_template_directory_uri(); ?>/img/cube.png" alt="">
            <h3 class="outstaffing_title"><?php
                echo get_theme_mod('our_mission_title'); ?></h3>
            <p class="outstaffing_text"><?php
                echo get_theme_mod('our_mission_text'); ?></p>
        </div>
        <div class="our_mission_and_vision_particles_right">
            <div id="our_mission_and_vision_particles_right"></div>
        </div>

    <div class="our_team">
        <h2 class="our_team_title"><?php
            echo get_theme_mod('our_team_title'); ?></h2>
        <div class="team_carusel">
            <div id="carousel_for_history_page" class="carousel">
                <button class="arrow prev">⇦</button>
                <div class="gallery">
                    <ul class="images">
                        <?php
                        $posts = get_posts(
                            array(
                                'post_type' => 'employees',
                                'suppress_filters' => true,
                            )
                        );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <li class="part_history_slider">
                                <div class="employee_img"><?php
                                    the_post_thumbnail(); ?></div>
                                <div class="employee_name"><?php
                                    the_title() ?></div>
                                <div class="employee_info"><?php
                                    the_content() ?></div>
                            </li>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <button class="arrow next">⇨</button>
            </div>
        </div>
    </div>
    <div class="begin">
        <h2 class="begin_title"><?php
            echo get_theme_mod('begin_title'); ?></h2>
        <p class="begin_text"><?php
            echo get_theme_mod('begin_text'); ?></p>
    </div>
</div>
<div class="problem_and_solution">
    <div class="problem_and_solution_particles_left">
        <div id="problem_and_solution_particles_left"></div>
    </div>

    <h2 class="problem_and_solution_title"> <?php
        echo get_theme_mod('problem_and_solution_title'); ?></h2>
    <p class="problem_and_solution_text_one"><?php
        echo get_theme_mod('problem_and_solution_text_one'); ?></p>
    <div class="problem_and_solution_block_two problem_and_solution_block"><img class="cube_img_white_history"
                                                                                src="<?php
                                                                                echo get_template_directory_uri(); ?>/img/cube_white.png"
                                                                                alt="">
        <h3 class="problem_and_solution_title_two"> <?php
            echo get_theme_mod('problem_and_solution_title_two'); ?></h3>
        <p class="problem_and_solution_text_two"><?php
            echo get_theme_mod('problem_and_solution_text_two'); ?></p>
    </div>
    <div class="problem_and_solution_block_three problem_and_solution_block">
        <img class="cube_img_white_history" src="<?php echo get_template_directory_uri(); ?>/img/cube_white.png" alt="">
        <h3 class="problem_and_solution_title_three"> <?php
            echo get_theme_mod('problem_and_solution_title_three'); ?></h3>
        <p class="problem_and_solution_text_three"><?php
            echo get_theme_mod('problem_and_solution_text_three'); ?></p>
    </div>

    <div class="problem_and_solution_particles_right">
        <div id="problem_and_solution_particles_right"></div>
    </div>
</div>
<div class="start_compani">
    <div class="start_compani_particles">
        <div id="start_compani_particles"></div>
    </div>
    <h2 class="start_compani_title">
        <?php echo get_theme_mod('start_compani_title'); ?></h2>
    <p class="start_compani_text">
        <?php echo get_theme_mod('start_compani_text'); ?></p>
</div>

<div class="history_footer">
    <?php get_footer(); ?>
</div>