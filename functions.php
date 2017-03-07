<?php

function vergotti_scripts() {
  wp_enqueue_style('twentyfifteen-main-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_styles', 'vergotti_styles');
