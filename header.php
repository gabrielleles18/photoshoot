<?php

use PhotoShoot\Banner;

$banners = Banner::getBanners();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/fonts/icones/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoMotor</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="banners">
        <div class="swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $value) { ?>
                        <div class="swiper-slide" style="background: url('<?= $value['imagem']['url'] ?>')"></div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="topo">
        <div class="container">
            <a href="<?= home_url() ?>" class="logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png"/>
            </a>
            <?php
            wp_nav_menu([
                'menu' => 'Menu Principal',
                'container_class' => 'menu'
            ]);
            ?>
            <form action="" class="search">
                <input type="text" placeholder="Busque pelo site"/>
                <button type="submit" name="search" class="icon-search open-search"></button>
            </form>
        </div>
    </div>
    <div class="contact">
        <h1>Photography Studio</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
        <a href=""><i class="icon-whatsapp"></i>Whatsapp</a>
    </div>
</header>

