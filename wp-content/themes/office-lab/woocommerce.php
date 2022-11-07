<?php
get_header();

global $wp;
$current_url = home_url($wp->request);
?>
<div class="shop-container mx-auto mb-5">
    <?php if (is_shop() or is_product_category()) : ?>
        <section id="shop-categories" class="sp-topbar col-12 col-md-12 col-lg-9 px-md-5 hidden">
            <div class="d-flex fled-row">
                <div class="col w-50 pl-0 pr-1">
                     <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'menu'            => 'Shop Category',
                        'container'       => 'div',
                        'container_class' => 'collapse show navbar-collapse container-shop-category',
                        'container_id'    => 'sp__navbar-collapse',
                        'menu_id'         => 'sp__menu-shop-category',
                        'menu_class'      => 'menu-shop-category navbar-nav mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'device_type'      => '__sp',
                    ) );
                    ?>
                </div>
            </div>
            <div class="col-12 px-0">
                <span>キーワード検索</span>
                <?php get_product_search_form(); ?>
            </div>
        </section>
        <section id="shop-categories" class="pc-sidebar col-3 pr-0">
            <?php

            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu'            => 'Shop Category',
                'container'       => 'div',
                'container_class' => 'collapse show navbar-collapse container-shop-category',
                'container_id'    => 'pc__navbar-collapse',
                'menu_id'         => 'pc__menu-shop-category',
                'menu_class'      => 'menu-shop-category navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'device_type'      => '__pc',
            ) );
            ?>
            <div class="search-group mt-5">
                <?php get_product_search_form(); ?>
            </div>
        </section>
    <?php endif; ?>
    <section id="shop-container" class="col-12 col-md-12 <?php if (is_shop() or is_product_category()) echo 'col-lg-9 px-md-5' ?>">
        <?php if (is_shop()) { ?>
         <?php } ?>
        <?php
        if (isset($_GET['search'])) {
            set_query_var('search', $_GET['search']);
            get_template_part('search-product');
        } else {
            woocommerce_content();
        }
        ?>
    </section>
</div>
<script>
    jQuery(document).ready(function($) {
        $('#<?php echo single_cat_title() ?>').css('background', '#232323');
        $('#add-to-cart').on('click', function() {
            $(this).prop('disable', true).css('background', '#232323');
            $('html, body').animate({scrollTop:0}, 'slow');
        });

        let elem_product = $('.product-price.my-1');
        let child_product = elem_product.find('.ml-1').remove();

        // plugin name: Advanced WooCommerce Product Gallery Slider
        // default settings
        $(".wpgis-slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            asNavFor: ".wpgis-slider-nav",
            adaptiveHeight: true,
        });

        $(".wpgis-slider-nav").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".wpgis-slider-for",
            arrows: true,
            dots: false,
            focusOnSelect: true,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                        draggable: true,
                        // centerMode:true,
                    },
                },
            ],
        });

    });
</script>
<?php
get_footer();
