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

$query_shops = new WP_Query([
    'post_type' => 'product',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 10,
    'product_cat' => 'Best Seller',
]);

$shops_top_page = $query_shops->posts;
//var_dump($shops_top_page);die();
?>

<div class="list-product" style="display: flex; flex-wrap: wrap; ">
    <?php
        if (count($shops_top_page) > 0) :
        foreach ($shops_top_page as $shop) :
    ?>
    <div class="" style="width: 100px; height: 100px">
        <a href="<?= get_the_permalink($shop->ID) ?>"></a>
    </div>
    <?php endforeach;endif; ?>
</div>


<?php get_footer()?>


