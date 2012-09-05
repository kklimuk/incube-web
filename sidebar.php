<a href="/">
	<div class="logo-center"> </div>
	<div class="logo-top-right-corner"> </div>
	<div class="logo-bottom-left-corner"> </div>
</a>

<?php
if (have_posts() && is_single()):
	while ( have_posts() ) : the_post();
		?>
		<div class="author">By <?php the_author(); ?></div>
		<?php 
		endwhile;
endif;	
?>



<section>
	<p>InCube is a small, student-run, enterpreneurial community determined to make a dent in the universe.</p>
	<p>We founded InCube to offer a place for the curious, a place for those that act.</p>
	<a href="/">
		<img src="<?php bloginfo('template_directory'); ?>/img/logo_sm.png" width="28" height="28"/>
		<h1>incube</h1>
	</a>
</section>