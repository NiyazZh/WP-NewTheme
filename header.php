<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <?php 
        wp_head();
    ?>
</head>
<body>
    <header>
        <div class="wrapper_nav">
            <nav class="nav_horizontal wrapper">
                <ul>
                    <?php 
                        wp_nav_menu( [
                            'menu'            => 'nav-horizontal', 
                            'container'       => false, 
                            'menu_class'      => '', 
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                            'depth'           => 1
                        ] );
                    ?>
                    <!-- <li><a href="#">Главная</a></li>
                    <li><a href="#">Строительство</a></li>
                    <li><a href="#">Инженерные системы и сети</a></li>
                    <li><a href="#">Smart Пособия</a></li> -->
                </ul>
                <div class="lang">
                <?php
                if ( function_exists( 'pll_the_languages' ) ) {
                    pll_the_languages( array(
                        'show_flags' => 1,    // Показывать флаги
                        'show_names' => 0,    // Показывать названия языков
                        'hide_if_no_translation' => 0, // Скрывать, если нет перевода
                        'dropdown' => 0,      // Показать как выпадающий список (0 - список, 1 - выпадающий список)
                    ));
                }
                ?>
                </div>
            </nav>
        </div>    
        <nav class="navbar_vertical close">
            <div class="nav_vertical_wrapper wrapper">
                <ul class="navbar_vertical__top" style="margin-top:50px;">
                <?php 
                        wp_nav_menu( [
                            'menu'            => 'nav-vertical-top', 
                            'container'       => false, 
                            'menu_class'      => '', 
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="">%3$s</ul>',
                            'depth'           => 1
                        ] );
                    ?>
                    <!-- <li><a href="#">Главная</a></li>
                    <li><a href="#">Команда разработчиков</a></li>
                    <li><a href="#">Контакты</a></li> -->
                </ul>
            </div>    
            <div class="nav_col_wrapper wrapper">
                <!-- First nav column -->
                <div class="wrapper_col">
                    <ul class="nav_col">
                        <?php 
                            wp_nav_menu( [
                                'menu'            => 'nav-vertical-col-1', 
                                'container'       => false, 
                                'menu_class'      => '', 
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                                'depth'           => 3
                            ] );
                        ?>
                    </ul>
                </div>    
                
                <!-- Second nav column -->
                <div class="wrapper_col">
                    <ul class="nav_col">
                    <?php 
                            wp_nav_menu( [
                                'menu'            => 'nav-vertical-col-2', 
                                'container'       => false, 
                                'menu_class'      => '', 
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                                'depth'           => 3
                            ] );
                        ?>
                    </ul>
                </div>  
                <!-- Third Column --> 
                <div class="wrapper_col">
                    <ul class="nav_col">
                    <?php 
                            wp_nav_menu( [
                                'menu'            => 'nav-vertical-col-3', 
                                'container'       => false, 
                                'menu_class'      => '', 
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                                'depth'           => 3
                            ] );
                        ?>
                    </ul>
                </div> 
            </div>   
            <div class="menu_icon">
                <img src="<?php bloginfo('template_url');?>/assets/images/menu.svg" alt="">
            </div>
        </nav>
    </header>