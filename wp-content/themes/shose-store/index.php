<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Mystery Themes
* @subpackage News Portal
* @since 1.0.0
*/


get_header();
?>

<div class="layout_padding collection_section">
    <div class="container">
        <h1 class="new_text"><strong>New  Collection</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <button class="new_bt">New</button>
                        <div class="shoes-img"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img1.png'?>"></div>
                        <p class="sport_text">Men Sports</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                            </ul>
                        </div>
                    </div>
                    <button class="seemore_bt"><a href="<?php echo get_post_type_archive_link('collection'); ?>">See More</a></button>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        <div class="shoes-img2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img2.png'?>"></div>
                        <p class="sport_text">Men Sports</p>
                        <div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_section">
    <div class="container">
        <h1 class="new_text"><strong>Racing Boots</strong></h1>
        <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    </div>
</div>

<div class="collection_section_3 layout_padding">
    <div class="container">
        <div class="racing_shoes">
            <div class="row">
                <div class="col-md-8">
                    <div class="shoes-img3"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img3.png'?>"></div>
                </div>
                <div class="col-md-4">
                    <div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
                    <div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
                    <button class="seemore"><a href="<?php site_url('racing-boots')?>">See More</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
            <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
    </div>

<div class="layout_padding gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img4.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">60</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img5.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">400</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Best Shoes </p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img6.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img7.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">70</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img8.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">100</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="best_shoes" onclick="window.location='<?= get_home_url() . '/product'?>'">
                        <p class="best_text">Sports Shoes</p>
                        <div class="shoes_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/shoes-img9.png'?>"></div>
                        <div class="star_text">
                            <div class="left_part">
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/star-icon.png'?>"></a></li>
                                </ul>
                            </div>
                            <div class="right_part">
                                <div class="shoes_price">$ <span style="color: #ff4e5b;">90</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy_now_bt">
                <button class="buy_text"><a href="<?php echo site_url('shoes')?>">See More</a></button>
            </div>
        </div>
    </div>

<div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text"><strong>Contact Now</strong></h1>
        </div>
        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="send_btn">
                                <button class="main_bt">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop_banner">
                        <div class="our_shop">
                            <button class="out_shop_bt">Our Shop</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer()?>

