<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Website</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <a href="https://hellowebsite.pl/" class="home">hello<span class="header__link--color">website</span>.pl</a>
        <?php get_search_form(); ?>
    </header>