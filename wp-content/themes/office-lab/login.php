<?php
/* Template Name: Login */
get_header();

?>
<div class="collection_text">Shoes</div>
<div class="layout_padding contact_section">
    <form id="register" action="<?php echo esc_url(admin_url('admin-post.php')) ?>" method="post">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <label for="">Password</label>
        <input type="password" name="password" id="password">
        <label for="">Password Confirm</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <button type="submit">Submit</button>
    </form>
</div>
<?php
get_template_part('template-parts/validate/validate_register');
?>

<?php get_footer()?>
