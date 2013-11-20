<?php 
/*
Template Name: Add Your Own
*/
?>
<?php get_header() ?>
<div class="container">
	<?php if(have_posts()): the_post(); ?>
	<div id="content" class="page">
       <div class="content-header">
           <h1 class="title">Add Your Own! <span class="note">Missing a manner from your country? Help us and send it in by filling in the form.</span></h1>
       </div>
       <?php get_template_part( 'forms/add-your-own' ) ?>
       <div class="content-header">
           <h1 class="title">Why Help Us?</h1>
       </div>
       <div class="the-content">
           <?php the_content() ?>
       </div>
    </div>
	<?php get_sidebar() ?>
	<?php endif; ?>
</div>
<?php get_footer() ?>