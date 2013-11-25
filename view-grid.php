		<div class="post-grid">
        	<?php $manners = new WP_Query(array('post_type'=>'manner','posts_per_page'=>18)); ?>
        	<?php if ($manners->have_posts()): ?>
        	<div class="row">
        		<?php while($manners->have_posts()): $manners->the_post(); ?>
        		<div class="post col-xs-4">
                    <div class="thumbnail">
                        <?php the_post_thumbnail( 'medium' ) ?>
                        <span class="tag">Malaysia</span>
                        <div class="details">
                            <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <div class="excerpt"><?php echo get_the_excerpt() ?></div>
                            <p><span class="author">By: <?php the_author() ?></span></p>
                        </div>
                    </div>
                </div>
        		<?php endwhile; ?>
        	</div>
        	<?php endif; ?>
        	<?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query'=>$manners)); ?>
        </div>