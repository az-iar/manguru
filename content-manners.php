	<div id="content">
        <div class="content-header">
            <h1 class="title">Latest Manners</h1>
            <?php $manners = new WP_Query(array('post_type'=>'manner','posts_per_page'=>18,'orderby'=>'date','order'=>'asc','showposts'=>1)); ?>
            <?php if($manners->have_posts()): $manners->the_post(); endif; ?>
            <span class="date">Updated on <?php echo get_the_modified_date( 'd-m-Y' ) ?></span>
            <div class="list-type">
				<?php $view = (isset($_GET['view']) && $_GET['view'] == 'list') ? 'list' : 'grid'; ?>
                <a href="<?php echo site_url() ?>" <?php if($view == 'grid') echo 'class="active"' ?>><span class="glyphicon glyphicon-th-large"></span> Grid</a>
                <a href="<?php echo site_url() ?>?view=list" <?php if($view == 'list') echo 'class="active"' ?>><span class="glyphicon glyphicon-list"></span> List</a>
            </div>
        </div>
        <?php if ($view == 'list'): ?>
            <?php get_template_part( 'view', 'list' ) ?>
        <?php else: ?>
            <?php get_template_part( 'view', 'grid' ) ?>
        <?php endif ?>
    </div>