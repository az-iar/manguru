<?php get_header() ?>
<div class="container">
    <?php if(have_posts()): the_post(); ?>
    <div id="content" <?php post_class('blog') ?>>
        <div class="row content-header">
            <div class="col-xs-2">
                <div class="date">
                    <span class="day"><?php echo get_the_date('d') ?></span>
                    <br>
                    <span class="month-year"><?php echo get_the_date('M Y') ?></span>
                </div>
            </div>
            <div class="col-xs-10">
                <h2 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
                <div class="post-meta">
                    <span class="author">By : <a href="<?php the_author_link() ?>" title="<?php the_author() ?>"><?php the_author() ?></a></span>
                    <?php edit_post_link( 'Edit', '<span class="edit"> - ', '</span>' ); ?>
                </div>
            </div>
        </div>
        <?php rewind_posts(); ?>
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
    <?php get_sidebar('blog') ?>
</div>
<?php get_footer() ?>