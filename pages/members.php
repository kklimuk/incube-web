<?php
global $wpdb;
$query = "SELECT ID from $wpdb->users ORDER BY display_name";
$author_ids = $wpdb->get_results($query);

foreach($author_ids as $author) :
	$curauth = get_userdata($author->ID);
		if($curauth->user_level > 0):
			$user_link = get_author_posts_url($curauth->ID);
?>

<article>
	<a href="<?=$user_link?>">
		<div class="img-holder">
			<?=get_avatar($curauth->ID)?>
		</div>

		<div class="info-holder">
			<h1>
				<?=$curauth->display_name?>
			</h1>
			<div>
				<?=get_the_author_meta('description', $author->ID)?>
			</div>
		</div>
	</a>
</article>

<?php
	endif;
endforeach;
?>