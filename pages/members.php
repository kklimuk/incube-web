<?php
global $wpdb;
$query = "SELECT ID, user_nicename from $wpdb->users ORDER BY user_nicename";
$author_ids = $wpdb->get_results($query);

	foreach($author_ids as $author) :
		$curauth = get_userdata($author->ID);
		if($curauth->user_level > 0):
			$user_link = get_author_posts_url($curauth->ID);
			var_dump($curauth);
?>

<article>
	<a href="<?=$user_link?>" target="_blank">
		<div class="img-holder">
			<img src="<?=get_avatar($curauth->ID)?>"/>
		</div>

		<div class="info-holder">
			<h1>
				<?=$curauth->display_name?>
			</h1>
			<div>
				Dr. Moneta has been instrumental to the founding of InCube in its early days (2011). Without him, InCube wouldn't exist.
			</div>
		</div>
	</a>
</article>

<?php
endif;
endforeach;
?>