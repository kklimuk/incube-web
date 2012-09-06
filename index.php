<!DOCTYPE html>
<html>
<head>
<?php
	get_header();
?>
</head>
<body>
	<div id="fb-root"></div>

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
		<?php
			if (is_front_page()):
				include "front_page.php";
			endif;
		?>
	</article>
</body>
</html>