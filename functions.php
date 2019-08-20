<?php

function load_assets() {
    wp_register_script( 'particles.js', get_template_directory_uri() . '/assets/particles.js/particles.js', null, null, true );
    wp_enqueue_script('particles.js');    

    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap');

     wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true );
    wp_enqueue_script('jQuery');

    wp_register_script( 'Popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, null, true );
    wp_enqueue_script('Popper.js');

    wp_register_script( 'bootstrap.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('bootstrap.js');  

    wp_register_script( 'aos.js', get_template_directory_uri() . '/assets/aos.js/aos.js', null, null, true );
    wp_enqueue_script('aos.js');  
    
/*     wp_register_script( 'fullPage.js', get_template_directory_uri() . '/assets/fullPage.js/fullpage.js', null, null, true );
    wp_enqueue_script('fullPage.js');  

    wp_register_style('fullPage.css', get_template_directory_uri() . '/assets/fullPage.js/fullpage.css');
    wp_enqueue_style('fullPage.css'); 
 */
  

    wp_register_style('aos.css', get_template_directory_uri() . '/assets/aos.js/aos.css');
    wp_enqueue_style('aos.css');   

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');   
    

}    

add_action('wp_enqueue_scripts', 'load_assets');