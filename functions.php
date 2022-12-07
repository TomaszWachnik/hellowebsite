<?php

/* css */
function hellowebsite_load_css() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'hellowebsite_load_css' );

/* js */
function hellowebsite_load_js() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), time(), true );
}

add_action( 'wp_enqueue_scripts', 'hellowebsite_load_js' );

/* google fonts */
function hellowebsite_load_googlefonts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap' );
}

add_action( 'wp_enqueue_scripts', 'hellowebsite_load_googlefonts' );

/* the_excerpt() */
function hellowebsite_custom_excerpt_length( $length ) {
    return 15;
} 

add_filter( 'excerpt_length', 'hellowebsite_custom_excerpt_length', 999 );

/* customize */

function hellowebsite_hero_callout($wp_customize) {
    $wp_customize->add_section( 'hellowebsite-hero-callout-section', array(
        'title' => 'Hero Section'
    ) );

    //headline
    $wp_customize->add_setting( 'hellowebsite-hero-callout-headline', array(
        'default' => 'Przykładowy tekst nagłówka'
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'hellowebsite-hero-headline-control', array(
        'label' => 'Nagłówek',
        'section' => 'hellowebsite-hero-callout-section',
        'settings' => 'hellowebsite-hero-callout-headline'
    ) ) );

    //text
    $wp_customize->add_setting( 'hellowebsite-hero-callout-text', array(
        'default' => 'Przykładowy tekst paragrafu'
    ) );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'hellowebsite-hero-text-control', array(
        'label' => 'Tekst',
        'section' => 'hellowebsite-hero-callout-section',
        'settings' => 'hellowebsite-hero-callout-text',
        'type' => 'textarea'
    ) ) );
}

add_action( 'customize_register', 'hellowebsite_hero_callout' );