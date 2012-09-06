<!DOCTYPE html>
<html>
<head>
<?php
	get_header();
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
</head>
<body>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=499126316783928";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

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