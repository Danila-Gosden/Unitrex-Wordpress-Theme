<?php
// Add Support Preview For Records.
add_theme_support('post-thumbnails', array('post', 'employees', 'vacancies'));
//
// Connect Scripts and Styles.
function connect_scripts_styles()
{
    // Styles
    wp_enqueue_style('font', get_template_directory_uri() . '/fonts/font.css');
    wp_enqueue_style('pc_style', get_template_directory_uri() . '/style/style_for_pc.css');
    wp_enqueue_style('tablet_style', get_template_directory_uri() . '/style/style_for_tablet.css');
    wp_enqueue_style('phone_style', get_template_directory_uri() . '/style/style_for_phone.css');
    // Scripts
    wp_enqueue_script(
        'jquery_min_js',
        get_template_directory_uri() . '/js/libs/jquery/jquery-3.5.1.min.js',
        '',
        '',
        true
    );
    wp_enqueue_script(
        'particles_lib',
        get_template_directory_uri() . '/js/libs/particle.js/particles.js',
        '',
        '',
        true
    );
    wp_enqueue_script('main_script', get_template_directory_uri() . '/js/script.js', 'jquery_min_js', '', true);
    wp_enqueue_script(
        'Slider_for_history_page',
        get_template_directory_uri() . '/js/slider_history_page.js',
        'jquery_min_js',
        '',
        true
    );

}

add_action('wp_enqueue_scripts', 'connect_scripts_styles', 1);

//
add_filter('show_admin_bar', '__return_false');

function admin_panel_setting($wp_customize)
{
    //Home Page Panel
    $wp_customize->add_section(
        'home',
        array(
            'title' => __('Home Page', 'aletheme'),
            'priority' => 1,
        )
    );

    $wp_customize->add_setting(
        'home_header_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home_header_title', array(
                'label' => 'Header Title', 'aletheme',
                'section' => 'home',
                'setting' => 'home_header_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'home_header_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'home_header_text', array(
                'label' => __('Header Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'home_header_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'menu_part_one',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'menu_part_one', array(
                'label' => __('Part Menu One', 'aletheme'),
                'section' => 'home',
                'setting' => 'menu_part_one',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'menu_part_two',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'menu_part_two', array(
                'label' => __('Part Menu Two', 'aletheme'),
                'section' => 'home',
                'setting' => 'menu_part_two',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'menu_part_three',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'menu_part_three', array(
                'label' => __('Part Menu Three', 'aletheme'),
                'section' => 'home',
                'setting' => 'menu_part_three',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'menu_part_four',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'menu_part_four', array(
                'label' => __('Part Menu Four', 'aletheme'),
                'section' => 'home',
                'setting' => 'menu_part_four',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'menu_part_five',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'menu_part_five', array(
                'label' => __('Part Menu Five', 'aletheme'),
                'section' => 'home',
                'setting' => 'menu_part_five',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_sevice_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_sevice_title', array(
                'label' => __('Our Sevice Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'our_sevice_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'outsourcing_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'outsourcing_title', array(
                'label' => __('Outsourcing Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'outsourcing_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'outsourcing_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'outsourcing_text', array(
                'label' => __('Outsourcing Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'outsourcing_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'outstaffing_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'outstaffing_title', array(
                'label' => __('Outstaffing Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'outstaffing_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'outstaffing_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'outstaffing_text', array(
                'label' => __('Outstaffing Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'outstaffing_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'important_us_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'important_us_title', array(
                'label' => __('Important Us Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'important_us_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'value_red_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_red_text', array(
                'label' => __('Value Red Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_red_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'value_yellou_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_yellou_text', array(
                'label' => __('Value Yellou Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_yellou_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'value_green_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_green_text', array(
                'label' => __('Value Green Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_green_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'value_blue_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_blue_text', array(
                'label' => __('Value Blue Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_blue_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'value_violet_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_violet_text', array(
                'label' => __('Value Violet Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_violet_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_red_two_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_red_two_text', array(
                'label' => __('Value Red Two Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_red_two_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'value_yellou_two_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_yellou_two_text', array(
                'label' => __('Value Yellou Two Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_yellou_two_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_green_two_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_green_two_text', array(
                'label' => __('Value Green Two Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_green_two_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_blue_two_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_blue_two_text', array(
                'label' => __('Value Blue Two Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_blue_two_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_violet_two_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_violet_two_text', array(
                'label' => __('Value Violet Two Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_violet_two_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_red_three_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_red_three_text', array(
                'label' => __('Value Red Three Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_red_three_text',
                'type' => 'textarea',
            )
        )
    );
    $wp_customize->add_setting(
        'value_yellou_three_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'value_yellou_three_text', array(
                'label' => __('Value Yellou Three Text', 'aletheme'),
                'section' => 'home',
                'setting' => 'value_yellou_three_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'find_job_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'find_job_title', array(
                'label' => __('Find Job Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'find_job_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'write_us_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'write_us_title', array(
                'label' => __('Write Us Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'write_us_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_story_button_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_story_button_title', array(
                'label' => __('Our Story Button Title', 'aletheme'),
                'section' => 'home',
                'setting' => 'our_story_button_title',
                'type' => 'input',
            )
        )
    );

    // History Page
    $wp_customize->add_section(
        'history',
        array(
            'title' => __('History Page', 'aletheme'),
            'priority' => 2,
        )
    );
    $wp_customize->add_setting(
        'history_header_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'history_header_title', array(
                'label' => __('History Header Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'history_header_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_mission_and_vision_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_mission_and_vision_title', array(
                'label' => __('Our Mission And Vision Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_mission_and_vision_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_vision_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_vision_title', array(
                'label' => __('Our Vision Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_vision_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_vision_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_vision_text', array(
                'label' => __('Our Vision Text', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_vision_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'our_mission_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_mission_title', array(
                'label' => __('Our Mission Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_mission_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'our_mission_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_mission_text', array(
                'label' => __('Our Mission Text', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_mission_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'our_team_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_team_title', array(
                'label' => __('Our Team Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'our_team_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'begin_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'begin_title', array(
                'label' => __('Begin Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'begin_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'begin_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'begin_text', array(
                'label' => __('Begin Text', 'aletheme'),
                'section' => 'history',
                'setting' => 'begin_text',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_title', array(
                'label' => __('Problem And Solution Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_title_one',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_title_one', array(
                'label' => __('Problem And Solution Title One', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_title_one',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_text_one',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_text_one', array(
                'label' => __('Problem And Solution Text One', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_text_one',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_title_two',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_title_two', array(
                'label' => __('Problem And Solution Title Two', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_title_two',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_text_two',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_text_two', array(
                'label' => __('Problem And Solution Text Two', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_text_two',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_title_three',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_title_three', array(
                'label' => __('Problem And Solution Title Three', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_title_three',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'problem_and_solution_text_three',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'problem_and_solution_text_three', array(
                'label' => __('Problem And Solution Text Three', 'aletheme'),
                'section' => 'history',
                'setting' => 'problem_and_solution_text_three',
                'type' => 'textarea',
            )
        )
    );

    $wp_customize->add_setting(
        'start_compani_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'start_compani_title', array(
                'label' => __('Start Compani Title', 'aletheme'),
                'section' => 'history',
                'setting' => 'start_compani_title',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'start_compani_text',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'start_compani_text', array(
                'label' => __('Start Compani Text', 'aletheme'),
                'section' => 'history',
                'setting' => 'start_compani_text',
                'type' => 'textarea',
            )
        )
    );

    // Vacancies List Page
    $wp_customize->add_section(
        'vacancies_list',
        array(
            'title' => __('Vacancies List Page', 'aletheme'),
            'priority' => 3,
        )
    );
    $wp_customize->add_setting(
        'vacancies_header_title',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'vacancies_header_title', array(
                'label' => __('Vacancies Header Title', 'aletheme'),
                'section' => 'vacancies_list',
                'setting' => 'vacancies_header_title',
                'type' => 'input',
            )
        )
    );

    // Footer
    $wp_customize->add_section(
        'footer',
        array(
            'title' => __('Footer', 'aletheme'),
            'priority' => 5,
        )
    );
    $wp_customize->add_setting(
        'social_network_link_part_one',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_network_link_part_one', array(
                'label' => __('Social Network Link Part One', 'aletheme'),
                'section' => 'footer',
                'setting' => 'social_network_link_part_one',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'social_network_link_part_two',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_network_link_part_two', array(
                'label' => __('Social Network Link Part Two', 'aletheme'),
                'section' => 'footer',
                'setting' => 'social_network_link_part_two',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'social_network_link_part_three',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_network_link_part_three', array(
                'label' => __('Social Network Link Part Three', 'aletheme'),
                'section' => 'footer',
                'setting' => 'social_network_link_part_three',
                'type' => 'input',
            )
        )
    );

    $wp_customize->add_setting(
        'social_network_link_part_four',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_network_link_part_four', array(
                'label' => __('Social Network Link Part Four', 'aletheme'),
                'section' => 'footer',
                'setting' => 'social_network_link_part_four',
                'type' => 'input',
            )
        )
    );
}

add_action('customize_register', 'admin_panel_setting');
//
// Register New Post Type For Employees.
add_action('init', 'team_register_post_type_init');
function team_register_post_type_init()
{
    $labels = array(
        'name' => 'Employee',
        'singular_name' => 'employees',
        'add_new' => 'Add New Employee',
        'add_new_item' => 'Add New Employee',
        'edit_item' => 'Change Info About Employee',
        'new_item' => 'Add New Employee',
        'all_items' => 'All Employees',
        'search_items' => 'Seach Employee',
        'not_found' => 'Employees Not Found',
        'not_found_in_trash' => 'Employees Not Found',
        'menu_name' => 'Employees'
    );
    $args = array(
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('employees', $args);
}

//
// Register New Post Type For Vacancies.
add_action('init', 'vacancies_register_post_type_init');
function vacancies_register_post_type_init()
{
    $labels = array(
        'name' => 'Vacancies',
        'singular_name' => 'Vacancies',
        'add_new' => 'Create New Vacancy',
        'add_new_item' => 'Create New Vacancy',
        'edit_item' => 'Change Vacancy',
        'new_item' => 'Create New Vacancy',
        'all_items' => 'All Vacancies',
        'search_items' => 'Seach Vacancy',
        'not_found' => 'Vacancy Not Found',
        'not_found_in_trash' => 'Vacancy Not Found',
        'menu_name' => 'Vacancies'
    );
    $args = array(
        'menu_icon' => 'dashicons-admin-site-alt',
        'labels' => $labels,
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'has_archive' => true,
        'menu_position' => 21,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields')
    );

    register_post_type('vacancies', $args);
}
//
function max_title_length( $title) {
    $max = 20;
    if( strlen( $title) > $max) {
        return substr( $title, 0, $max ). " ..";
    } else {
        return $title;
    }
}