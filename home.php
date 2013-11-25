<?php 
/*
Template Name : Blog Posts
*/
 ?>
<?php get_header() ?>
<div class="container">
    <?php if (is_home()): ?>
        <?php get_template_part( 'content', 'blogs' ) ?>
    <?php elseif(is_front_page()): ?>
        <?php get_template_part( 'content', 'manners' ) ?>
    <?php endif; ?>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>