<?php
/* Template Name: Shoes */

get_header();
?>

<div class="collection_text">Shoes</div>
<div class="layout_padding contact_section">
    <div class="container">
        <h1 class="new_text"><strong>Sport Shoes</strong></h1>
        <div class="product_detail col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="product_image col-lg-5 col-md-5 col-sm-12 col-12">
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

            <div class="product_info col-lg-7 col-md-7 col-sm-12 col-12">

            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
