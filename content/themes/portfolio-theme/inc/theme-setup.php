<?php
if (!function_exists('portfolio_setup')) 
{
    function portfolio_setup() 
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'portfolio_setup');