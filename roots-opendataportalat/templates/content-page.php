<?php
/*
Default template for content of a page.
*/
?>

<div class="container">
	<?php while (have_posts()) : the_post(); ?>
	  <?php the_content(); ?>
	  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
	<?php endwhile; ?>

	<div  class="row">
		<?php get_template_part('templates/content', 'socialshare'); ?>
	</div>

</div>