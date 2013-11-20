<div id="sidebar">
    <div class="sidebar-menu row">
        <?php wp_nav_menu( array(
            'theme_location' => 'sidebar_menu'
        ) ); ?>
    </div>
    <div class="widget row" id="popular-post-widget">
        <h1 class="widget-title">Popular Manners On Manguru</h1>
        <div class="widget-content">
            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="row">
                <div class="col-xs-5 thumbnail">
                    <img src="<?php echo get_stylesheet_directory_uri().'/img/post-thumbnail.jpg' ?>" alt="thumbnail">
                </div>
                <div class="col-xs-7">
                    <span class="tag">Malaysia</span><span class="date">on 1-4-2013</span>
                    <h3 class="title"><a href="#">When Greeting Someone, Always Put Your Hand On Your Chest</a></h3>
                    <span class="author">By : Marco de Groen</span>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="widget row">
        <h1 class="widget-title">Blog</h1>
        <div class="widget-content">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/img/blog_featured.jpg' ?>" alt="blog"></a>
        </div>
    </div>
    <div class="widget row">
        <h1 class="widget-title">Downloads</h1>
        <div class="widget-content">
            <ul id="widget-downloads">
                <li><a href="#" target="_blank"><span class="glyphicon glyphicon-file"></span> Doing Business In China PDF</a></li>
                <li><a href="#" target="_blank"><span class="glyphicon glyphicon-file"></span> Doing Business In China PDF</a></li>
                <li><a href="#" target="_blank"><span class="glyphicon glyphicon-file"></span> Doing Business In China PDF</a></li>
                <li><a href="#" target="_blank"><span class="glyphicon glyphicon-file"></span> Doing Business In China PDF</a></li>
            </ul>
        </div>
    </div>
    <div class="widget row">
        <h1 class="widget-title">Sponsors</h1>
        <div class="widget-content">
            <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/img/co-creatie.jpg' ?>" alt="co-creatie" width="290"></a></p>
            <p><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/img/idsgn.jpg' ?>" alt="idsgn" width="290"></a></p>
        </div>
    </div>
    <div class="widget row">
        <h1 class="widget-title">Like Us On Facebook</h1>
        <div class="widget-content">
            <div class="fb-like-box" data-href="https://www.facebook.com/JoinManguru" data-width="290" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
        </div>
    </div>
</div>