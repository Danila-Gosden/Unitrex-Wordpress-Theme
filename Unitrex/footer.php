<!--Footer-->
<div class="footer">
    <?php
    wp_footer(); ?>
    <div id="menu_footer" class="footer_home_menu">
        <a class="part_menu_pc_footer" href="<?php
        echo get_home_url(); ?>/#service"><?php
            echo get_theme_mod('menu_part_one'); ?></a>
        <a class="part_menu_pc_footer" href="<?php
        echo get_home_url(); ?>/#values"><?php
            echo get_theme_mod('menu_part_two'); ?></a>
        <a class="part_menu_pc_footer" href="<?php
        echo get_home_url(); ?>/#career"><?php
            echo get_theme_mod('menu_part_three'); ?></a>
        <a class="part_menu_pc_footer" href="<?php
        echo get_home_url(); ?>/#history"><?php
            echo get_theme_mod('menu_part_four'); ?></a>
        <a class="part_menu_pc_footer" href="<?php
        echo get_home_url(); ?>/#contacts"><?php
            echo get_theme_mod('menu_part_five'); ?></a>
    </div>
    <div class="sosial_netfork_links">
        <div class="part_sosial_netfork"><a href="<?php
            echo get_theme_mod('social_network_link_part_one'); ?>">
                <div class="sosial_cube_div"><img class="sosial_cube_img sosial_cube_img_linkedin"
                                                  src="<?php
                                                  echo get_template_directory_uri(); ?>/svg/linkedin.svg"
                                                  alt=""></div>
            </a>
        </div>
        <div class="part_sosial_netfork"><a href="<?php
            echo get_theme_mod('social_network_link_part_two'); ?>">
                <div class="sosial_cube_div"><img class="sosial_cube_img sosial_cube_img_facebook"
                                                  src="<?php
                                                  echo get_template_directory_uri(); ?>/svg/facebook.svg" alt="">
                </div>
            </a>
        </div>
        <div class="part_sosial_netfork"><a href="<?php
            echo get_theme_mod('social_network_link_part_three'); ?>">

                <div class="sosial_cube_div"><img class="sosial_cube_img sosial_cube_img_instagram"
                                                  src="<?php
                                                  echo get_template_directory_uri(); ?>/svg/instagram.svg"
                                                  alt=""></div>


            </a>
        </div>
        <div class="part_sosial_netfork"><a href="<?php
            echo get_theme_mod('social_network_link_part_four'); ?>">
                <div class="sosial_cube_div"><img class="sosial_cube_img sosial_cube_img_youtube"
                                                  src="<?php
                                                  echo get_template_directory_uri(); ?>/svg/youtube.svg" alt="">
                </div>


            </a>
        </div>
    </div>
    <div class="mobile_sosial_menu">
        <a class="link_part_mobile_sosial_menu" href="<?php
        echo get_theme_mod('social_network_link_part_one'); ?>">
            <div class="part_mobile_sosial_menu">
                <img class="img_part_mobile_sosial_menu" src="<?php
                echo get_template_directory_uri(); ?>/svg/linkedin.svg" alt="">
            </div>
        </a>
        <a class="link_part_mobile_sosial_menu" href="<?php
        echo get_theme_mod('social_network_link_part_two'); ?>">
            <div class="part_mobile_sosial_menu">
                <img class="img_part_mobile_sosial_menu" src="<?php
                echo get_template_directory_uri(); ?>/svg/facebook.svg" alt="">
            </div>
        </a>
        <a class="link_part_mobile_sosial_menu" href="<?php
        echo get_theme_mod('social_network_link_part_three'); ?>">">
            <div class="part_mobile_sosial_menu">
                <img class="img_part_mobile_sosial_menu" src="<?php
                echo get_template_directory_uri(); ?>/svg/instagram.svg" alt="">
            </div>
        </a>
        <a class="link_part_mobile_sosial_menu" href="<?php
        echo get_theme_mod('social_network_link_part_four'); ?>">
            <div class="part_mobile_sosial_menu">
                <img class="img_part_mobile_sosial_menu" src="<?php
                echo get_template_directory_uri(); ?>/svg/youtube.svg" alt="">
            </div>
        </a>
    </div>
    <p class="text_footer">&copy;<?
        echo date('Y'); ?> iT Company LeaSoft All Rights
        Reserved</p>

</div>
</html>