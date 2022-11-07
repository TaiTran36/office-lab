<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Shoes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body class="main-layout">
    <div class="header_section">
        <div class="container">
            <div class="row" style="padding: 20px 0">
                <div class="logo_header">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/logo-royal.png'?>" alt="">
                </div>
                <div class="menu_bar_header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" tabindex="-1">Best Seller</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" tabindex="-1">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" tabindex="-1">Sale Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" tabindex="-1">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="auth_header" style="display: flex">
                    <div>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control form-group" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/cart.svg'?>" alt=""></span>
                    <div><img src="<?= get_stylesheet_directory_uri() . '/assets/images/search.svg'?>" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="component_full">
        <div class="container">
            <div class="main_left">
                <button class="btn btn-categories" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                   <div>
                       <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/menu_toggle.svg'?>" alt=""></span> Categories
                   </div>
                    <div>
                        <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/arrow_up.svg'?>" alt=""></span>
                    </div>
                </button>
                <div class="collapse" id="collapseExample">
                    <?php wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'menu'            => 'Top Navigation Menu',
                            'container'       => 'div',
                            'container_class' => 'collapse show navbar-collapse container-shop-category',
                            'container_id'    => 'top_nav_cats',
                            'menu_id'         => 'menu_top_nav_cats',
                            'menu_class'      => 'menu_top_nav_cats navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'device_type'      => '__sp', )
                    );
                    ?>
                </div>

            </div>

            <div class="main_right" style="flex-grow: 2;order: 3">
                <div style="border: 1px solid #000000">
                    <div>Feature Products</div>
                </div>
            </div>
            <div class="main_center" style="flex-grow: 6;order: 2">
                <?php
                    global $wp;
                    if (home_url( $wp->request ) == get_home_url()): ?>
                    <div class="banner">
                        <?php
                        echo do_shortcode('[smartslider3 slider="2"]');
                        ?>
                    </div>
                    <div class="shop_feature" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px">
                    <?php
                        $items = (object)[
                            (object)[
                                    'icon' => 'fa fa-plane',
                                    'small_text' => 'Free Shipping',
                                    'big_text' => 'On all order above $22',
                                ],
                            (object)[
                                    'icon' => 'fa fa-commenting',
                                    'small_text' => 'Support 24x7',
                                    'big_text' => '24 hours Assistance',
                                ],
                            (object)[
                                    'icon' => 'fa fa-child',
                                    'small_text' => 'Zero Contact',
                                    'big_text' => 'No contact delivery',
                                ],
                            (object)[
                                    'icon' => 'fa fa-coffee',
                                    'small_text' => 'Risk Free',
                                    'big_text' => '14 days money back guarantee',
                                ],
                        ];

                        foreach($items as $item):
                    ?>

                    <div class="item" style="padding: 15px 20px; display: flex;align-items: center; max-width: 23.5%">
                        <div class="icon" style="font-size: 35px; margin-right: 20px; color: #c90000">
                            <i class="<?= $item->icon ?>"></i>
                        </div>
                        <div class="content" style="display: flex; flex-direction: column;">
                            <div class="text_small" style="font-weight: bold"><?= $item->small_text ?></div>
                            <div class="text_big"><?= $item->big_text ?></div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <?php endif ?>

