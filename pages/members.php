<?php
global $wpdb;
$query = "SELECT DISTINCT(ID), (SELECT post_title FROM wp_posts, wp_users WHERE post_author=members.ID WHERE post_status='publish' ORDER BY post_date_gmt DESC LIMIT 1) as post_title FROM ((SELECT wp_users.ID FROM wp_users, wp_posts WHERE post_status = 'publish' AND post_author=wp_users.id  ORDER BY post_date_gmt DESC) UNION (SELECT ID FROM wp_users)) AS members;";
$author_ids = $wpdb->get_results($query);

foreach($author_ids as $author) :
	$curauth = get_userdata($author->ID);
		if($curauth->user_level > 0):
			$user_link = get_author_posts_url($curauth->ID);
			$description = get_the_author_meta('description', $author->ID);
?>

<article>
	<a href="<?=$user_link?>">
		<div class="img-holder">
			<?=get_avatar($curauth->ID)?>
		</div>

		<div class="info-holder">
			<h1 class="<?=$description ? "" : "padded"?>">
				<?=$curauth->display_name?>
				<?php
				if ($author->post_title):
					?>
				<span>
					- Latest: <strong><?=$author->post_title?></strong>
				</span>
					<?php
				endif;
				?>
			</h1>
			<div>
				<?=$description?>
			</div>
		</div>
	</a>
</article>

<?php
	endif;
endforeach;
?>