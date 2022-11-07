<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>
<main id="main" class="site-main-content section-archive-movie">
    <div class="movie-detail">
        <?php
//        var_dump(get_site_url());die();
        if (have_posts()) {
            the_post();
            get_template_part('template-parts/content/content', get_post_type());
//            get_template_part('woocommerce/checkout/form-checkout');
        } else {
            echo "<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>";
        }
        ?>
    </div>
</main>
<?php get_footer(); ?>
