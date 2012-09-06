<!DOCTYPE html>
<html>
<head>
<?php
	get_header();
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
</head>
<body>
	<div class="top-bar"></div>

	<div class="totop">
		&#8593;
	</div>

	<aside>
		<?php
			get_sidebar();
		?>
	</aside>

	<article>
			<?php include "pages/blog.php"; ?>
	</article>
</body>
</html>