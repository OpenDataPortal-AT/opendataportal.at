<?php
/*
Default template for content.
*/
?>

<div class="container">
	<article <?php post_class(); ?>>
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>
		<div class="entry-summary">hello
			<?php the_excerpt(); ?>

			<div  class="row">
				<?php get_template_part('templates/content', 'socialshare'); ?>
			</div>

		</div>
		<?php comments_template('/templates/comments.php'); ?>
	</article>
</div>
