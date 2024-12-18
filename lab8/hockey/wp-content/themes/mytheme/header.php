<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.logo.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png.jpg" alt="Логотип Магазина"> Популярные хоккеисты
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo home_url('/hockey.html'); ?>">Главная</a></li>
                <li><a href="<?php echo home_url('/about.html'); ?>">О нас</a></li>
                <li><a href="<?php echo home_url('/contact.html'); ?>">Контакты</a></li>
            </ul>
        </nav>
    </header>
