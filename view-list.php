					<div class="post-list">
						<?php $manners = new WP_Query(array('post_type'=>'manner','posts_per_page'=>6)); ?>
        				<?php if ($manners->have_posts()): ?>
        				<?php while($manners->have_posts()): $manners->the_post(); ?>
                        <div class="row post">
                            <div class="thumbnail col-xs-3">
                                <?php if (has_post_thumbnail()): ?>
                                	<?php the_post_thumbnail( 'small' ) ?>
                                <?php endif ?>
                            </div>
                            <div class="col-xs-9">
                                <div class="post-meta">
                                    <span class="tag">Malaysia</span>
                                    <span class="date">on <?php echo get_the_modified_date( 'd-m-Y' ) ?></span> | 
                                    <a href="<?php comment_link() ?>" class="comment"><span class="glyphicon glyphicon-comment"></span> <?php comments_number() ?></a>
                                </div>
                                <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <div class="excerpt"><?php the_excerpt() ?></div>
                                <div class="tags"><strong>Follow :</strong> <a href="#">Pizza</a>, <a href="#">Food</a>, <a href="#">Malaysia</a>, <a href="#">Asia</a></div>
                                <span class="author">By : <?php the_author() ?></span>
                                <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" data-width="350"></div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
        				<?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query'=>$manners)); ?>
                    </div>