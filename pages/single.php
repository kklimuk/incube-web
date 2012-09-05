	<?php
	while ( have_posts() ) : the_post();
	?>
	<header class = "blog_header">
			<h2><?php the_date(); ?></h2>
	</header>
	<article>
		<!-- <h2><u><?php the_title(); ?></u></h2> -->
		<h2><?php the_title(); ?></h2>
		<h6><?php the_content(); ?></h6>
	</article>

<?php
endwhile;
?>