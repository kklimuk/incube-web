<!DOCTYPE html>
<html>
<head>
<?php
	get_header();
?>
</head>
<body>
	<div class="top-bar"></div>

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