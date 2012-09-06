<?php
$isUser = is_author() || is_single();

if ($isUser):
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
	if (!$curauth) {
		while ( have_posts() ) : the_post();
			$curauth = get_user_by('id', get_the_author_meta('ID'));
			rewind_posts();
			break;
		endwhile;
	}
endif;
?>



<?php
if ($isUser):
?>

<a href="/">
	<?=get_avatar($curauth->ID, 100)?>
</a>

<hgroup>
	<h1><?=$curauth->display_name?></h1>
	<h2><a href="mailto:<?=$curauth->user_email?>" target="_blank"><?=$curauth->user_email?></a></h2>
	<?php
	if ($curauth->user_url):
	?>
	<h2><a href="<?=$curauth->user_url?>" target="_blank">website</a></h2>
	<?php
	endif;
	?>
</hgroup>

<?php
else:
?>

<a class="coologo" href="/">
	<div class="logo-center"> </div>
	<div class="logo-top-right-corner"> </div>
	<div class="logo-bottom-left-corner"> </div>
</a>

<?php
endif;
?>



<section>
	<?php
	if (!$isUser):
	?>
		<p>InCube is a small, student-run, enterpreneurial community determined to make a dent in the universe.</p>
		<p>We founded InCube to offer a place for the curious, a place for those that act.</p>
	<?php
	else:
	?>
	<p>
		<?=get_the_author_meta('description', $curauth->ID)?>
	</p>
	<?php
	endif;
	?>
	<a href="/">
		<img src="<?php bloginfo('template_directory'); ?>/img/logo_sm.png" width="28" height="28"/>
		<h1>incube</h1>
	</a>
</section>