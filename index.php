<?php get_header() ?>
<div class="container">
    <?php if(have_posts()): ?>
    <div id="content" class="page">
        <div class="content-header">
            <h1 class="title"><?php the_title() ?></h1>
        </div>
        <?php while (have_posts()): the_post(); ?>
        <?php if (has_post_thumbnail()): ?>
            <div class="featured-image">
                <?php the_post_thumbnail( 'medium' ) ?>
            </div>
        <?php endif ?>
        <div class="the-content">
            <?php the_content() ?> 
        </div>
        <?php endwhile; ?>
        <?php comments_template() ?>
    </div>
    <?php endif; ?>
    <?php get_sidebar() ?>
</div>
<?php get_footer() ?>