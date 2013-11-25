    <div id="content" class="page">
        <div class="content-header">
            <h1 class="title">Manguru Blog <span class="note">Updated on <?php echo get_the_modified_date( 'd-m-Y' ) ?></span></h1>
        </div>
        <?php if(have_posts()): ?>
        <div class="blog-list">
            <?php while(have_posts()): the_post(); ?>
            <div class="blog">
                <div class="row">
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
                            -
                            <a href="<?php comments_link(); ?>" class="comment">Leave a comment</a>
                            <?php edit_post_link( 'Edit', '<span class="edit"> - ', '</span>' ); ?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <?php if(has_post_thumbnail()): ?>
                    <div class="col-xs-4">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium', array('class'=>'thumbnail') ) ?></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="the-content"><?php the_excerpt() ?></div>
                        <p><a href="<?php the_permalink() ?>" class="read-more">Read More &raquo;</a></p>
                    </div>
                    <?php else: ?>
                    <div class="col-xs-12">
                        <div class="the-content"><?php the_excerpt() ?></div>
                        <p><a href="<?php the_permalink() ?>" class="read-more">Read More &raquo;</a></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
        <div class="no-post">
            <p>No post found.</p>
        </div>
        <?php endif; ?>
        <?php if(function_exists('wp_pagenavi')) wp_pagenavi(); ?>
    </div>