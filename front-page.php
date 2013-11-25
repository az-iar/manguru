<?php 
/*
Template Name : Front Page
*/
 ?>

<?php get_header() ?>
<div class="container">
    <?php get_template_part( 'content', 'manners' ) ?>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>