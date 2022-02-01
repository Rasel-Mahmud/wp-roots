<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <main id="app" class="app">
            <nav>
                <a href="<?= get_home_url(); ?>"><h1>WordPress Starter Theme</h1></a>
            </nav>
            <?php
                $ip_server = $_SERVER['SERVER_ADDR'];
                echo "Server IP Address is: $ip_server";
            ?>
            <img style="width:40px; height: 40px; border-radius: 100px" src="https://avatars.
            githubusercontent.com/u/6086757?s=40&v=4" alt="Rasel mahmud">

            <img style="width:40px; height: 40px; border-radius: 100px" src="http://rasel.me/static/media/rasel.abab25e7.jpg" alt="Rasel mahmud">
            <h2>We Are vai vai</h2>