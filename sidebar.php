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
	$return_url = "/";
	if (is_single()):
		$return_url = "/?author={$curauth->ID}";
	endif;
?>

<a href="<?=$return_url?>">
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

<a class="coologo" href="#">
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
		<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=213&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=dukeincube%40gmail.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style=" border:solid 1px #777 " width="213" height="213" frameborder="0" scrolling="no"></iframe>
		<p>InCube is a student-run, enterpreneurial residential program determined to make a dent in the universe.</p>
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