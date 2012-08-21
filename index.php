<!DOCTYPE html>
<html>
<head>
<?php
	get_header();
?>
</head>
<body>
<?php
	get_sidebar();
	if (is_front_page()):
		include "front_page.php";
	endif;
?>
</body>
</html>