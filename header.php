<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ) ?><?php wp_title(' | ') ?></title>

	<?php wp_head() ?>

	<?php if (is_user_logged_in()): ?>
	<style>
		#header {
			top:28px;
		}
	</style>
	<?php endif ?>
</head>
<body <?php body_class() ?>>
	<!-- Facebook JDK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Header -->
	<header id="header">
        <nav role="navigation" id="topnav">
            <div class="container">
                <ul>
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">Table Manners</a></li>
                    <li><a href="#">Appearances</a></li>
                    <li><a href="#">Meeting and Greeting</a></li>
                    <li><a href="#">Entering</a></li>
                    <li><a href="#">Exchanging</a></li>
                    <li><a href="#">Relationships</a></li>
                    <li><a href="#">Conversating</a></li>
                    <li><a href="#">Image</a></li>
                    <li class="more"><a href="#">More</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <a href="<?php echo home_url() ?>" title="Manguru"><img src="<?php echo get_stylesheet_directory_uri().'/img/logo.jpg' ?>" alt="Manguru" class="logo"></a>
                </div>
                <div class="col-xs-2">
                    <!-- <img src="img/fblike.jpg" alt="FB Like" style="margin:23px 0 0 50px;">-->
                    <div class="fb-like" data-href="http://manguru.nl/" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                <div class="col-xs-4">
                    <div id="top-search">
                        <form action="<?php echo site_url() ?>" role="form" method="get">
                        	<?php //wp_nonce_field( 'search', 'search_nonce') ?>
                            <input type="text" class="form-control" name="s" value="" placeholder="Search">
                            <button type="submit" class="search-icon">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div id="social-links">
                        <a href="#" class="icon fb" title="Facebook" target="_blank">Facebook</a>
                        <a href="#" class="icon tw" title="Twitter" target="_blank">Twitter</a>
                        <a href="#" class="icon in" title="Instagram" target="_blank">Instagram</a>
                        <a href="#" class="icon pn" title="Pinterest" target="_blank">Pinterest</a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <a href="<?php echo site_url( 'manners/add-your-own') ?>" class="btn btn-default" role="button" id="add-your-own-btn"><span class="glyphicon glyphicon-plus"></span> Add Your Own!</a>
                </div>
            </div>
        </div>
    </header>
