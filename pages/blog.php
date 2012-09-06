<?php
while ( have_posts() ) :
	the_post();
?>

<hgroup class="<?php
		if (!$curauth):
	?>padded<?php endif; ?>">
	<?php
		if ($curauth):
	?>
	<a href="?p=<?=the_ID()?>">
	<?php
	endif;
	?>

		<h1><?php the_title();?></h1>
		<h2><?php the_date(); ?></h2>

	<?php
		if ($curauth):
	?>
	</a>
	<?php
	endif;
	?>
</hgroup>

<article>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>

<?php
endwhile;

if (!have_posts()):
?>

<hgroup class="padded">
		<h1>Aw Shucks, nothing to see...</h1>
		<h2>I have a company to build!</h2>
</hgroup>

<article>
	<div class="content">
		<p>
			This is the space where I would normally write something insightful and amazing, but alas, it has not been written.
			So here is a completely random video:
		</p>

		<iframe width="600" height="335" src="http://www.youtube.com/embed/4r7wHMg5Yjg?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>

		<p>
			Yes, you just watched that. And, yes, it was awesome.
		</p>

	</div>
</article>

<?php
endif;
?>