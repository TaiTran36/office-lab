<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();
$description = get_the_archive_description();
$args = array('post_type' => get_post_type());
$archive_title    = get_the_archive_title();
$archive_subtitle = get_the_archive_description();
$the_query = new WP_Query($args);
?>
<?php if (is_archive() && !have_posts() && is_tax()) {
    get_template_part('template-parts/archive', get_post_type());
} else {
    get_template_part('template-parts/archive', get_queried_object()->name);
}
?>

<?php get_footer(); ?>

