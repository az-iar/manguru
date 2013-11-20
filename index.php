<?php get_header() ?>
<div class="container">
	<div id="content">
        <div class="content-header">
            <h1 class="title">Latest Manners</h1>
            <span class="date">Updated on 4-4-2013</span>
            <div class="list-type">
                <a href="index.html" class="active"><span class="glyphicon glyphicon-th-large"></span> Grid</a>
                <a href="list.html"><span class="glyphicon glyphicon-list"></span> List</a>
            </div>
        </div>
        <div class="post-grid">
        	<?php 
        		$rows = 6;
        		$cols = 3;
        	 ?>
        	<?php for($row = 0; $row < $rows; $row++): ?>
        	<div class="row">
	        	<?php for($col = 0; $col < $cols; $col++): ?>
				<div class="post col-xs-4">
                    <div class="thumbnail">
                        <img src="<?php echo get_stylesheet_directory_uri().'/img/manguruexample.jpg' ?>" alt="thumbnail">
                        <span class="tag">Malaysia</span>
                        <div class="details">
                            <h2 class="title"><a href="#">When Greeting Someone, Always Put Your Hand On Your Chest</a></h2>
                            <div class="excerpt">When greeting a person who has a title, always try to find out his title before meeting him</div>
                            <p><span class="author">By: Marco de Groen</span></p>
                        </div>
                    </div>
                </div>
	        	<?php endfor; ?>
	        </div>
        	<?php endfor; ?>            
        </div>
    </div>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>