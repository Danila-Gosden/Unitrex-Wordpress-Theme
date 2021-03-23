<?php
/**
 * Template Name: Vacancies List Page
 */
get_header("vacancies"); ?>
<!--Body for Vacancies List page-->
<div class="body_vacancies_list">
    <div class="particle_list_vacancy">
        <div id="list_vacancies_block"></div>
    </div>
    <?php
    $posts = get_posts(array(
        'numberpost' => -1,
        'post_type' => 'vacancies',
        'suppress_filters' => true,
    ));
    foreach ($posts as $post) {
        setup_postdata($post); ?>
            <div class="link_to_vacancy">
        <a href="<?php the_permalink(); ?>">
            <div class="list_vacancies">
                <div class="departament_vacancy_list_page">SOFTWARE DEVELOPMENT</div>
                <p class="location_vacancy_list_page">UKRAINE|KHARKOV</p>
                <div class="vacancy_title"><?php the_title() ?></div>
                <div class="vacancy_info"><?php the_excerpt(); ?></div>
                <p class="read_more">Read more &#62;</p>
            </div>
        </a>
            </div>
    <?php }
    wp_reset_postdata();
    ?>
</div>
<div id="contacts" class="write_us_white write_us_black">
    <div class="particle_left_write_us_white particle_left_write_us_black">
        <div id="write_us_black_particles_left"></div>
    </div>
    <h2 class="write_us_white_title write_us_black_title"><?php
        echo get_theme_mod('write_us_title'); ?></h2>
    <form class="form_write_us" action="<?php
    echo get_template_directory_uri(); ?>/send.php" method="post"
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
                 echo get_template_directory_uri(); ?>/img/clip_white.png"> Upload your CV
        </label>
        <input id="file-upload" type="file"/>

        <br><input class="button_write_us_white" type="submit" id="btn" value="Submit">
    </form>

    <div class="particle_right_write_us_white particle_right_write_us_black">
        <div id="write_us_black_particles_right"></div>
    </div>
</div>
<?php get_footer(); ?>
