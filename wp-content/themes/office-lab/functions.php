<?php
require get_template_directory() . '/functions/script.php';
add_theme_support( 'menus' );
function register_menus() {

    register_nav_menus(
        array(
            'primary-menu' => _( 'Primary Menu' ),
            'footer-menu'  => __( 'Footer Menu'),
    )
  );
}

add_action( 'init', 'register_menus' );

function cptui_register_my_cpts()
{


    /**
     * Post Type: Maintain.
     */

    $labels = [
        "name" => __("Collection", "custom-post-type-ui"),
        "singular_name" => __("Collection", "custom-post-type-ui"),
        'all_items'           => __('All Collection', 'twentythirteen'),
        'add_new_item'        => 'Add Collection',
        'add_new'             => __('Add Collection', 'twentythirteen'),
    ];

    $args = [
        "label" => __("Collection", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "supports" => ["title", "editor", "thumbnail"],
    ];

    register_post_type("collection", $args);


    $labels = [
        "name" => __("Racing Boots", "custom-post-type-ui"),
        "singular_name" => __("Racing Boots", "custom-post-type-ui"),
        'all_items'           => __('All Racing Boots', 'twentythirteen'),
        'add_new_item'        => 'Add Racing Boots',
        'add_new'             => __('Add Racing Boots', 'twentythirteen')
    ];

    $args = [
        "label" => "Racing Boots",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "racing-boots", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats"],
        "taxonomies" => ["category"],
    ];

    register_post_type("racing-boots", $args);
}
add_action('init', 'cptui_register_my_cpts');

function wpbeginner_numeric_posts_nav($max_num_pages = null)
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = !empty($max_num_pages) ? $max_num_pages : intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link('<'));
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&lt;</a>');
    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if ($paged < $max)
        printf('<li>%s</li>' . "\n", get_next_posts_link(">"));
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&gt;</a>', esc_url(get_pagenum_link($max)));

    echo '</ul></div>' . "\n";
}

function wpbeginner_numeric_cft($max_num_pages, $paged, $url)
{

    /** Stop execution if there's only 1 page */
    if ($max_num_pages <= 1)
        return;

    $max = intval($max_num_pages);
    $colorPick = 'style="color: #9C7A48"';
    $color = 'style="color: #000"';

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ($paged > 1)
        printf('<li>%s</li>' . "\n", '<a href="' . $url . ($paged - 1 == 0 ? '/' : ('/page/' . ($paged - 1) . '/')) . '" ' . $color . ' >&lt;</a>');
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&lt;</a>');

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == 1 ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, esc_url($url), 1);

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == $link ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, esc_url($url . '/page/' . $link . '/'), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == $max ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, esc_url($url . '/page/' . $max . '/'), $max);
    }

    /** Next Post Link */
    if ($paged < $max)
        printf('<li>%s</li>' . "\n", '<a href="' . $url . '/page/' . ($paged + 1) . '/' . '" ' . $color . '>&gt;</a>');
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&gt;</a>');

    echo '</ul></div>' . "\n";
}

function wpbeginner_numeric_shop($max_num_pages, $paged, $url, $search)
{

    /** Stop execution if there's only 1 page */
    if ($max_num_pages <= 1)
        return;

    $max = intval($max_num_pages);
    $colorPick = 'style="color: #9C7A48"';
    $color = 'style="color: #fff"';

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ($paged > 1)
        printf('<li>%s</li>' . "\n", '<a href="' . $url . ($paged - 1 == 0 ? '/' : ('/page/' . ($paged - 1) . '/')) . (empty($search) ? '' : $search) . '" ' . $color . ' >&lt;</a>');
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&lt;</a>');

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == 1 ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, functions . phpesc_url($url), 1);

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == $link ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, $url . '/page/', $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s" ' . ($paged == $max ? $colorPick : $color) . '>%s</a></li>' . "\n", $class, $url . '/page/', $max);
    }

    /** Next Post Link */
    if ($paged < $max)
        printf('<li>%s</li>' . "\n", '<a href="' . $url . '/page/' . ($paged + 1) . '/' . (empty($search) ? '' : $search) . '" ' . $color . '>&gt;</a>');
    else
        printf('<li>%s</li>' . "\n", '<a href="#" class="isDisabled">&gt;</a>');

    echo '</ul></div>' . "\n";
}

function my_load_more_scripts($wp_query)
{

    // register our main script but do not enqueue it yet
    wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery'));

    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script('my_loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ));

    wp_enqueue_script('my_loadmore');
}

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query)
{
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type)
            $post_type = $post_type;
        else
            $post_type = array('movies'); // don't forget nav_menu_item to allow menus to work!
        $query->set('post_type', $post_type);
        return $query;
    }
}

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 162,
        'single_image_width' => 516,

        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 2,
            'max_rows' => 6,
            'default_columns' => 4,
            'min_columns' => 2,
            'max_columns' => 4,
        ),
    ));
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

add_filter('woocommerce_page_title', 'custom_woocommerce_page_title');
function custom_woocommerce_page_title($page_title)
{
    if ($page_title == 'Shop' or $page_title == 'ショップ') {
        return "すべての商品";
    }

    if (is_product_category()) {
        return single_term_title();
    }
}

add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');

function get_product_categories(string $get_condition, string $screen_type)
{
    $parent = get_term_by('slug', $get_condition, 'product_cat');
    $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'parent' => $parent->term_id,
        'exclude' => 0
    );
    $product_categories = get_terms($args);

    if ($screen_type == 'mobi') {
        echo '<select class="form-control sort-option-list"
		id="product-category"
		name="product-category"
		onchange = "location = this.value;"
    >';
        echo "<option selected>$parent->name</option>";
        foreach ($product_categories as $category) {
            $link = get_term_link($category->term_id);
            print_r('<option class"sort-option" value="' . $link . '">' . $category->name . '</option>');
        }
        echo "</select>";
    }

    if ($screen_type == 'pc') {
        echo '<div class="category"><a href="' . get_term_link($parent->term_id) . '">' . $parent->name . '</a></div>';
        foreach ($product_categories as $category) {
            echo '<div class="sub-category px-3" style="margin: 0;" id="' . $category->name . '"> <a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a></div>';
        }
    }
}

if (!function_exists('write_log')) {

    function write_log($log)
    {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
                error_log("\n");
            } else {
                error_log($log);
                error_log("\n");
            }
        }
    }
}

add_filter('woocommerce_order_shipping_to_display_shipped_via', '__return_null');

add_filter('pre_get_posts', 'query_post_type');

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
    $my_attr = 'email';
    $my_attr1 = 'user_name';

    if (isset($atts[$my_attr])) {
        $out[$my_attr] = $atts[$my_attr];
    }

    if (isset($atts[$my_attr1])) {
        $out[$my_attr1] = $atts[$my_attr1];
    }

    return $out;
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

add_filter('woocommerce_page_title', 'custom_woocommerce_page_title');

add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');
function lw_hide_sale_flash()
{
    return false;
}

function get_product_categories_and_sort_condition()
{
    $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'parent'   => 0,
        'exclude' => 15
    );
    $product_cat = get_terms($args);

    foreach ($product_cat as $parent_product_cat) {

        echo '<div class="category"><a href="' . get_term_link($parent_product_cat->term_id) . '">' . $parent_product_cat->name . '</a></div>';
        $child_args = array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'parent'   => $parent_product_cat->term_id
        );
        $child_product_cats = get_terms($child_args);
        foreach ($child_product_cats as $child_product_cat) {
            echo '<div class="sub-category"> <a href="' . get_term_link($child_product_cat->term_id) . '">' . $child_product_cat->name . '</a></div>';
        }
    }
}

function get_single_category(string $category_name, string $option, string $optional_button_text)
{
    $term_id = get_term_by('slug', $category_name, 'product_cat');
    $link = get_term_link($term_id);
    $text  =  isset($optional_button_text) ? $optional_button_text : $category_name;
    if ($option == 'button') {
        echo '<div class="text-center block-more">';
        $button =  '<a href="' . $link . '" class="btn btn-dark btn-more">' . $text .'</a>';
        echo $button;
        echo '</div>';
    }

    if ($option == 'label') {
        echo '<div class="product-category my-1">' . $text . '</div>';
    }
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'override_woocommerce_image_size_gallery_thumbnail' );
function override_woocommerce_image_size_gallery_thumbnail( $size ) {
    // Gallery thumbnails: proportional, max width 200px
    return array(
        'width'  => 160,
        'height' => 160,
        'crop'   => 0,
    );
}

add_filter('the_content', 'strip_images',2);

function strip_images($content){
    return preg_replace('/<figure[^>]+./','',$content);
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
function woocommerce_template_product_description() {
    woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

function my_extra_button_on_product_page($product, $variationSelected = null, $isExceed) {
    // global $product;
    echo '<div class="text-center block-more add-cart">';
    if($isExceed > -1) {
        echo '<span class="exceed">You cannot add that amount to the cart — we have ' . $isExceed . ' in stock and you already have  ' . $isExceed . ' in your cart.</span>';
    }
    $url =  '<div  class="btn btn-dark btn-more ' . ($isExceed > -1 ? 'product_exceed' : '') .' " id="add-to-cart" data-variable="'. $variationSelected .'" data-product="' . $product->id . '">カートに入れる</div>';
    echo $url;
    echo '</div>';
}

add_filter('wc_add_to_cart_message', 'handler_function_name', 10, 2);
function handler_function_name($message, $product_id) {

    return "カートに商品" . get_the_title($product_id) . "を正常に追加しました";
}

add_action( 'template_redirect', 'woo_custom_redirect_after_purchase' );
function woo_custom_redirect_after_purchase() {
    global $wp;
    if ( is_checkout() && !empty( $wp->query_vars['order-received'] ) ) {
        wp_redirect(site_url('/cart-done'));
        exit;
    }
}

function custom_woocommerce_output_related_products(){
    $args = array(
        'posts_per_page' => 5,
        'columns' => 5,
        'orderby' => 'rand'
    );
    woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}

add_action('woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1);
function remove_add_to_cart_buttons()
{
//    var_dump(12);die();
    if (!is_product()) {
        remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
    }
}
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    return $html;
}

add_action( 'woocommerce_single_product_summary', 'add_to_cart_button_woocommerce', 20 );
function add_to_cart_button_woocommerce() {
    global $product;
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    echo $html;
}

add_action('wp_ajax_update_total_price', 'update_total_price_function');
add_action('wp_ajax_nopriv_update_total_price', 'update_total_price_function');

function update_total_price_function() {

    // Skip product if no updated quantity was posted or no hash on WC_Cart
    if( !isset( $_POST['hash'] ) || !isset( $_POST['quantity'] ) ){
        exit;
    }

    $cart_item_key = $_POST['hash'];

    if( !isset( WC()->cart->get_cart()[ $cart_item_key ] ) ){
        exit;
    }

    $values = WC()->cart->get_cart()[ $cart_item_key ];

    $_product = $values['data'];

    // Sanitize
    $quantity = apply_filters( 'woocommerce_stock_amount_cart_item', apply_filters( 'woocommerce_stock_amount', preg_replace( "/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT)) ), $cart_item_key );

    if ( '' === $quantity || $quantity == $values['quantity'] )
        exit;

    // Update cart validation
    $passed_validation  = apply_filters( 'woocommerce_update_cart_validation', true, $cart_item_key, $values, $quantity );

    // is_sold_individually
    if ( $_product->is_sold_individually() && $quantity > 1 ) {
        wc_add_notice( sprintf( __( 'You can only have 1 %s in your cart.', 'woocommerce' ), $_product->get_title() ), 'error' );
        $passed_validation = false;
    }

    $quantityUpdate = $quantity;
    if ( $quantity > $_product->get_stock_quantity() ) {
        $quantityUpdate = $_product->get_stock_quantity();
        wc_add_notice( sprintf( __( '申し訳ありません。%s の在庫量が不足しており、お客様のご注文を完了できません (在庫数量 ' . $_product->get_stock_quantity() . ')。ご迷惑をおかけして申し訳ありません。', 'woocommerce' ), $_product->get_name() ), 'error' );
    }

    WC()->cart->set_quantity( $cart_item_key, $quantityUpdate, false);


    // Recalc our totals
    WC()->cart->calculate_totals();
    woocommerce_cart_totals();
    exit;
}

add_action('wp_ajax_check_exist_cart', 'check_exist_cart_function');
add_action('wp_ajax_nopriv_check_exist_cart', 'check_exist_cart_function');

function check_exist_cart_function() {
    $variableId = $_POST['variable_id'];
    $productId = $_POST['product_id'];

    foreach( WC()->cart->get_cart() as $cart_item ){
        $values = WC()->cart->get_cart()[ $cart_item['key'] ];
        $_product = $values['data'];

        if(($cart_item['product_id'] == $productId)  && ($cart_item['variation_id'] == $variableId) && $cart_item['quantity'] == $_product->get_stock_quantity()) {
            wp_send_json_error($_product->get_stock_quantity());
        }
    }

    wp_send_json_success('success');
}

add_action('wp_ajax_add_to_cart', 'add_to_cart_function');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_function');

function add_to_cart_function() {
    var_dump(12);die();
    $variableId = $_POST['variable_id'];
    $productId = $_POST['product_id'];

    $product_cart_id = WC()->cart->generate_cart_id( $productId );

    if( ! WC()->cart->find_product_in_cart( $product_cart_id ) ){
        WC()->cart->add_to_cart( $productId, 1, $variableId );
    }

    $product= wc_get_product( $productId );

    wp_send_json_success($product->get_title());
}

add_action('wp_ajax_create_order', 'create_order_function');
add_action('wp_ajax_nopriv_create_order', 'create_order_function');

function create_order_function() {
    $api_url = get_api_url('paygent/charge');
    $response = wp_remote_post($api_url, array(
        'headers' => [
            'Authorization' =>  'Bearer ' . $_SESSION['token_'],
        ],
        'body' => [
            'amount' => WC()->cart->total
        ],
        'sslverify' => FALSE
    ));

    $response = (array) $response;
    write_log("_______________________");
    write_log($response);
    if ($response['response']['code'] != 200) return false;
    $user = get_user_info($_SESSION['token_']);

    $address = array(
        'first_name' => $user->kanji_surname,
        'last_name'  => $user->kanji_given_name,
        'email'      => $user->email,
        'phone'      => $user->phone,
        'address_1'  => $user->address,
        'address_2'  => $user->address_building,
        'postcode'   => $user->zip_code,
        'country'    => 'JP'
    );

    $cart = WC()->cart;
    $coupon_code = ''; 	// initialize if code used is from post
    $type = 'role';		// initialize if code used is from post
    $cart = fetchDiscount($type, $cart, $coupon_code);
    // if discount has error
    if ($cart == false) return false;

    $checkout = WC()->checkout();
    $order_id = $checkout->create_order(array());
    $order = wc_get_order($order_id);
    $order->set_address( $address, 'billing');
    $order->calculate_totals();
    write_log("_______________________");
    write_log("ORDER TOTAL START");
    write_log($order);
    write_log("ORDER TOTAL END");
    write_log("_______________________");
    $order->payment_complete();
    $cart->empty_cart();
    $result = ob_get_clean();
    wp_send_json_success($result);
}

add_action('wp_ajax_create_order_non_member', 'create_order_non_member_function');
add_action('wp_ajax_nopriv_create_order_non_member', 'create_order_non_member_function');

function create_order_non_member_function() {
    $api_url = get_api_url('paygent/charge-non-member');
    $verify_url = get_api_url('verify');
    $response = wp_remote_post($api_url, array(
        'body' => [
            'amount' => WC()->cart->total,
            'id' => $_SESSION['NON_MEMBER_USER']['id']
        ],
        'sslverify' => FALSE
    ));

    $response = (array) $response;
    write_log("_______________________");
    write_log($response);
    if ($response['response']['code'] != 200) return false;
    $user = get_non_member_info($_SESSION['NON_MEMBER_USER']['id']);

    $address = array(
        'first_name' => $user->kanji_surname,
        'last_name'  => $user->kanji_given_name,
        'email'      => $user->email,
        'phone'      => $user->phone,
        'address_1'  => $user->address,
        'address_2'  => $user->address_building,
        'postcode'   => $user->zip_code,
        'country'    => 'JP'
    );

    $cart = WC()->cart;
    $checkout = WC()->checkout();
    $order_id = $checkout->create_order(array());
    $order = wc_get_order($order_id);
    $order->set_address( $address, 'billing');
    $order->calculate_totals();
    $order->payment_complete();
    $cart->empty_cart();
    $result = ob_get_clean();
    $order_success = check_if_order_is_successful($order_id);
    if($order_success) unset($_SESSION['NON_MEMBER_USER']);
    $verify = wp_remote_post($verify_url, array(
        'body' => [
            'title' 		=> 'VERIFY CART DATA',
            'order_id'		=> $order_id,
            'order_success' => $order_success,
        ],
        'sslverify' => FALSE
    ));
    wp_send_json_success($result);
}

function mailtrap($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '668424b9049083';
    $phpmailer->Password = 'a38c27a1287d6c';
}

add_action('phpmailer_init', 'mailtrap');

remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_action( 'woocommerce_cart_is_empty', 'custom_empty_cart_message', 10 );

function custom_empty_cart_message()
{
    $html =
        '
		<div class="container">
			<div class="breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumbs" typeof=”BreadcrumbList” vocab=”http://schema.org/”>
					<a href="'. site_url("/") . '"><span style="color: #9c7a48;">TOP</span></a> > <a href="' . site_url("/shop") . '"> <span> ' . get_the_title(get_page_by_path("shop")) . ' </span> > </a> <a href="' . site_url('cart') . '"> <span>' . get_the_title(get_page_by_path("cart")) . '</span> </a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 empty-cart-table">
			<hr class="empty-cart-hr-one" style="background: #4d4d4d;">
			<table class="empty-cart-header" style="width: 100%;">
				<thead>
				<th class="text-center" style="width: 15%; background: #232323; border-right: 1px solid #4d4d4d;"></th>
				<th class="text-center" style="width: 35%; background: #232323; border-right: 1px solid #4d4d4d;">商品</th>
				<th class="text-center" style="width: 20%; background: #232323; border-right: 1px solid #4d4d4d;">価格（税込）</th>
				<th class="text-center" style="width: 20%; background: #232323; border-right: 1px solid #4d4d4d;">個数</th>
				<th class="text-center" style="width: 10%; background: #232323; height: 40px;"></th>
				</thead>
			</table>
			<div class="d-flex justify-content-center empty-cart-message">
				<span>現在カートに入っている商品はありません。</span>
			</div>
			<hr style="background: #4d4d4d;">
			<div class="d-flex justify-content-center" style="margin-top: 3em; margin-bottom: 5em;">
				<a href="' . site_url("/shop") . '" class="btn btn-dark btn-more">買い物を続ける</a>
			</div>
		</div>
	';
    echo $html;
}

add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');

function remove_item_from_cart() {
    $key = $_POST['key'];
    if(!WC()->cart->remove_cart_item( $key )) {
        wp_send_json_error('Err');
    }
    wp_send_json_success('OK');
}

function get_category_sub_cat($screen_type)
{
    $parent = get_term_by('slug', 'shop-category', 'product_cat');
    $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'parent'   => $parent->term_id,
        'exclude' => 0
    );
    $product_categories = get_terms($args);

    if ($screen_type == 'mobi') {
        foreach ($product_categories as $category) {
            echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">';
            echo '<a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a>';
            echo '</li>';
        }
    }

    if ($screen_type == 'pc') {
        foreach ($product_categories as $category) {
            echo '<li><a href="' . get_term_link($category->term_id) . '" class="menu-footer-item-link d-block pb-1 mb-1">- ' . $category->name . '</a></li>';
        }
    }
}

if (!function_exists('write_log')) {

    function write_log($log)
    {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
                error_log("\n");
            } else {
                error_log($log);
                error_log("\n");
            }
        }
    }
}

add_action('woocommerce_display_discount', 'display_discount');
do_action( 'woocommerce_display_discount' );

function display_discount() {
    // $wc_coupon = new WC_Coupon('gold_discount');
    // if ($wc_coupon && !$wc_coupon->is_valid_for_cart() && $wc_coupon->get_code()) {
    add_filter( 'woocommerce_get_price_html', 'cw_change_product_price_display', 10, 3);
    // } else {
    // }
}

function cw_change_product_price_display( $price ) {

    global $product;
    $coupon_code = '';
    $WC = new WC_Coupon($coupon_code);

    $price_dup = str_replace('<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">¥</span>', "", $price);

    // If invalid discount
    if (!($WC && !$WC->is_valid_for_cart() && $WC->get_code())) return $price;

    $args = apply_filters(
        'wc_price_args',
        wp_parse_args(
            '',
            array(
                'ex_tax_label'       => false,
                'currency'           => '',
                'decimal_separator'  => wc_get_price_decimal_separator(),
                'thousand_separator' => wc_get_price_thousand_separator(),
                'decimals'           => wc_get_price_decimals(),
                'price_format'       => get_woocommerce_price_format(),
            )
        )
    );

    $price_check = $price;
    $start = '</span>';
    $end   = '</bdi>';
    $price_array = get_price_string($price_check, $start, $end);

    $discount = $WC->get_amount();
    $discount = intval($discount);

    if (count($price_array) == 1) {
        $price = filter_var($price, FILTER_SANITIZE_NUMBER_INT);

        $original_price 	= intval($product->get_price());
        $discounted_price 	= wc_trim_zeros( $original_price );
        $original_negative	= $original_price < 0;

        $discount_amount  	= $original_price * ($discount / 100);
        $discounted_price 	= $original_price - $discount_amount;
        $discounted_price 	= wc_trim_zeros( $discounted_price );
        $discount_negative	= $discounted_price < 0;

        $original_html 	= ( $original_negative ? '-' : '' ) . '<span class="woocommerce-Price-currencySymbol">' . get_woocommerce_currency_symbol( $args['currency'] ) . '</span>' .  number_format_i18n($original_price, 0) ;
        $updated_html  	= ( $discount_negative ? '-' : '' ) . '<span class="woocommerce-Price-currencySymbol">' . get_woocommerce_currency_symbol( $args['currency'] ) . '</span>' .  number_format_i18n($discounted_price, 0) ;
        $final_html  	=  '<span class="woocommerce-Price-amount amount" style="text-decoration-line: line-through;"><bdi>' . $original_html . '</bdi></span>'  . '</bdi></span>'  . '<span class="ml-1" style="color: white; font-size: 12px; font-family: Noto Sans JP;">(税込)</span>';
        $final_html    .= '<br/><span class="woocommerce-Price-amount amount"><bdi>' . $updated_html;
        return $final_html;
    }

    else {

        $price_original = array();
        $price_discounted = array();

        $original_html = '';
        $updated_html  = '';
        foreach ($price_array as $key => $amount) {

            $original_price 		= filter_var($price_array[$key], FILTER_SANITIZE_NUMBER_INT);
            $original_price 		= intval($original_price);

            $discounted_price 		= wc_trim_zeros( $original_price );
            $original_negative		= $original_price < 0;

            $discount_amount  		= $original_price * ($discount / 100);
            $discounted_price 		= $original_price - $discount_amount;
            $discounted_price 		= wc_trim_zeros( $discounted_price );
            $discount_negative		= $discounted_price < 0;

            $price_original[$key] 	= functions . phpget_woocommerce_currency_symbol($args['currency']);
            $price_discounted[$key] = functions . phpget_woocommerce_currency_symbol($args['currency']);

            $original_html .= $price_original[$key];
            $updated_html  .= $price_discounted[$key];
            $original_html .= ' - ';
            $updated_html  .= ' - ';
        }

        // remove extra space and '-' character
        $original_html = trim($original_html);
        $updated_html  = trim($updated_html);

        $original_html = substr_replace($original_html ,'', -1);
        $updated_html  = substr_replace($updated_html ,'', -1);

        $original_html = trim($original_html);
        $updated_html  = trim($updated_html);

        $final_html =  '<span class="woocommerce-Price-amount amount" style="text-decoration-line: line-through;"><bdi>' . $original_html . '</bdi></span>' . '</bdi></span>' . '<span class="ml-1" style="color: white; font-size: 12px; font-family: Noto Sans JP;">(税込)</span>';
        $final_html .= '<br/><span class="woocommerce-Price-amount amount"><bdi>' . $updated_html;

    }

    return $final_html;
}


function get_price_string($string, $start, $end) {

    $has_amount = true;
    $amount = array();
    $ctr = 0;

    while($has_amount) {
        $result = get_string_between($string, $start, $end);
        $amount[$ctr] = $result;
        if ($result == false) $has_amount =  false;
        try {
            $pos = strpos($string, $result) + strlen($result) + strlen($start) + strlen($end);
            $string = substr($string, $pos);
        } catch (\Error $e) {
            $has_amount =  false;
        }
        $ctr++;
    }

    for ($i=0; $i < count($amount); $i++) {
        if(empty($amount[$i])) unset ($amount[$i]);
    }
    return $amount;
}

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

add_filter( 'gettext', 'custom_add_to_cart_stock_error_notice', 10, 3 );
function custom_add_to_cart_stock_error_notice( $translated, $text, $domain ) {

    if ( $text === 'You cannot add that amount to the cart &mdash; we have %1$s in stock and you already have %2$s in your cart.' && 'woocommerce' === $domain ) {
        $translated = __('You cannot add that amount to the cart &mdash; we have %1$s in stock and you already have %2$s in your cart.', $domain );
    }

    return $translated;
}

add_filter( 'gettext', 'ds_change_readmore_text', 20, 3 );

function ds_change_readmore_text( $translated_text, $text, $domain ) {
    if ( ! is_admin() && $domain === 'woocommerce' && $translated_text === 'Read more') {
        $translated_text = 'Read more';
    }
    return $translated_text;
}

add_action('woocommerce_loop_add_to_cart_link', 'remove_buy_button_when_out_of_stock', 10, 3 );
function remove_buy_button_when_out_of_stock($html, $product, $args){
    // if ( ! $product->is_in_stock() && ! $product->backorders_allowed() ) {
    // 	return '';
    // }
    // return $html;

    return '';
}


function getListProducts($search) {
    $queryProduct = new WP_Query([
        's' => $search,
        'post_type' => 'product',
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => -1,
    ]);

    return $queryProduct->posts;
}

function showPriceProduct($product, $discount) {
    $pricesVariables = [];
    if (count($product->attributes) > 0) {
        $variations = $product->get_available_variations();
        foreach ($variations as $variation) {
            array_push($pricesVariables, $variation['display_price']);
        }
    }

//    $isSale = $product->is_on_sale();
    if(empty($pricesVariables)) {
        $regularPrice =  ceil($product->get_regular_price() - $product->get_regular_price() * ($discount / 100));
        return generateHTMLPrice($product->get_regular_price(), $regularPrice, $discount);
    }

    $minPrice = ceil(min($pricesVariables) - min($pricesVariables) * ($discount / 100));
    $maxPrice =  ceil(max($pricesVariables) - max($pricesVariables) * ($discount / 100));

    return generateHTMLPrice(min($pricesVariables) . '- £' . max($pricesVariables), $minPrice . '-' . $maxPrice, $discount);
}

function generateHTMLPrice($regularPrice, $salePrice, $discount) {
    if($discount > 0) {
        echo '<span class="woocommerce-Price-amount amount" style="text-decoration-line: line-through;">
                   <bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $regularPrice . '</bdi>
              </span>
              <br>
              <span class="woocommerce-Price-amount amount">
                   <bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $salePrice . '</bdi>
              </span>';
    } else {
        echo '<span class="woocommerce-Price-amount amount">
                   <bdi><span class="woocommerce-Price-currencySymbol">£</span>' . $regularPrice . '</bdi>
              </span>';
    }
}

add_action('wp_ajax_register_user', 'register_user');
add_action('wp_ajax_nopriv_register_user', 'register_user');
function register_user()
{
    if (!empty($_REQUEST['action']) && !($_REQUEST['action'] == "register_user")) {
        $response['error'] = true;
        $response['error_message'] = '';
        exit(json_encode($response));
    }
    $data = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'password_confirmation' => $_POST['password_confirmation'],
    ];

    wp_create_user('Tai',$data['password'], $data['email'] );
    exit();

}



