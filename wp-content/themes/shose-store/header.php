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
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="main-layout">
    <div class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'?>"></a></div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="<?php echo get_home_url()?>">Home</a>
                                <a class="nav-item nav-link" href="<?php echo get_post_type_archive_link('collection'); ?>">Collection</a>
                                <a class="nav-item nav-link" href="<?php echo site_url('shop'); ?>">Shoes</a>
                                <a class="nav-item nav-link" href="<?php echo site_url('racing-boots'); ?>">Racing Boots</a>
                                <a class="nav-item nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                <a class="nav-item nav-link last" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/search_icon.png'?>"></a>
                                <a class="nav-item nav-link last" href="<?php echo site_url('racing-boots'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shop_icon.png'?>"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php if(is_home()): ?>
        <div class="banner_section">
            <div class="container-fluid">
                <section class="slide-wrapper">
                    <div class="container-fluid">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">See More</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/running-shoes.png'?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">See More</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/running-shoes.png'?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">See More</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/running-shoes.png'?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-2 padding_0">
                                            <p class="mens_taital">Men Shoes</p>
                                            <div class="page_no">0/2</div>
                                            <p class="mens_taital_2">Men Shoes</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="banner_taital">
                                                <h1 class="banner_text">New Running Shoes </h1>
                                                <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                                <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <button class="buy_bt">Buy Now</button>
                                                <button class="more_bt">See More</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="shoes_img"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/running-shoes.png'?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php endif; ?>
    </div>
