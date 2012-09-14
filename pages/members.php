<?php
global $wpdb;
$query = "SELECT DISTINCT(ID), post_title, post_date_gmt FROM ((SELECT wp_users.ID, post_title, post_date_gmt FROM wp_users, wp_posts WHERE post_status = 'publish' AND post_author=wp_users.id  ORDER BY post_date_gmt DESC) UNION (SELECT ID, "" AS post_title, "1800-01-01" AS post_date FROM wp_users)) AS members ORDER BY post_date_gmt DESC;";
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