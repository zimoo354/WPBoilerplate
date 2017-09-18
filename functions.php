<?php 

if (!is_admin()) :

/* Style Zone */

wp_enqueue_style('swiper',get_template_directory_uri() . "/style.css", array(), '', 'all');
wp_enqueue_style('swiper',get_template_directory_uri() . "/css/swiper.min.css", array(), '', 'all');
wp_enqueue_style('normalize',get_template_directory_uri() . "/css/normalize.css", array(), '', 'all');
wp_enqueue_style('foundation',get_template_directory_uri() . "/css/foundation.min.css", array(), '', 'all');
wp_enqueue_style('font-awesome',get_template_directory_uri() . "/css/font-awesome.min.css", array(), '', 'all');
wp_enqueue_style('hover',get_template_directory_uri() . "/css/hover.css", array(), '', 'all');
wp_enqueue_style('swal',get_template_directory_uri() . "/css/swal.css", array(), '', 'all');
wp_enqueue_style('sidr',get_template_directory_uri() . "/css/sidr.css", array(), '', 'all');
wp_enqueue_style('izimodal',get_template_directory_uri() . "/css/iziModal.min.css", array(), '', 'all');

/* Style Zone */

/* Script Zone */

wp_deregister_script( 'jquery' );
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', 'all' );
wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '', 'all' );
wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), '', 'all' );
wp_enqueue_script('mandrill', get_template_directory_uri() . '/js/mandrill.js', array(), '', 'all' );
wp_enqueue_script('swal', get_template_directory_uri() . '/js/swal.js', array(), '', 'all' );
wp_enqueue_script('izimodal', get_template_directory_uri() . '/js/iziModal.min.js', array(), '', 'all' );
wp_enqueue_script('SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '', 'all' );
wp_enqueue_script('sidr', get_template_directory_uri() . '/js/sidr.js', array(), '', 'all');
wp_enqueue_script('script',get_template_directory_uri() . "/script.js", array(), '', 'all');

/* Script Zone */

endif; // !is_admin()

// Hides the Admin Bar on the page Front-End
show_admin_bar(false);

add_theme_support( 'post-thumbnails' ); 

function res() {
    echo get_template_directory_uri();
}

function base_url() {
    bloginfo('url');
}