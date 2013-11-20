	<!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
            	<?php if ( dynamic_sidebar('Footer Widgets') ) : else : endif; ?>
            </div>
            <div class="row">
                <div class="col-xs-12" id="copyright">
                    <p><?php echo ot_get_option('copyright') ?></p>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer() ?>
</body>
</html>