<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage InCube
 * @since InCube 1.0
 */

/*
TO DO:
1. Make bottom border of posts go till end of screen
5. move out CSS and Git Push!!!!
*/
?>
<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
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
		<a href="/">
			<div class="logo-center"> </div>
			<div class="logo-top-right-corner"> </div>
			<div class="logo-bottom-left-corner"> </div>
		</a>

		<div id="author_details">
			<div id="member_avatar"><?php echo get_avatar( $curauth->user_email, 150, '', false ); ?> </div>
			<div id="member_info">
				<div id="member_nickname"><?php echo $curauth->nickname; ?></div>
				<div id="member_fullname"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></div>
				<div id="member_description"><?php echo $curauth->description; ?></div>
				<div id="member_email"><a class='hidden_link' href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></div>
				<div id="member_email"><a class='hidden_link' href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></div>
				<div id="member_email"><a class='hidden_link' href="http://twitter.com/<?php echo substr($curauth->jabber, 1); ?>"><?php echo $curauth->jabber; ?></a></div>
			</div>
		</div>

		
	</aside>


	<article>
		<div class="random_date"><?php echo the_time('F jS, Y'); ?></div>

		<div id="member_posts">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="entry">
						<p class="post_title"><?php the_title(); ?></p>
			   			<?php the_content(); ?>
		 		</div>

			<?php endwhile; else: ?>
			<div id="no_posts_message">Oh shucks, looks like <?php echo $curauth->first_name; ?> has been too busy building companies to blog about it yet.</div>
			<?php endif; ?>
		</div>
	</article>
</body>
</html>