<?php
/*
Template Name: Anwendung einreichen
Description: Template to submit applications via frontend and automatically create a post.
*/
?>

<?php
/*
Template Name: Anwendungen
Description: Template for applications overview page
*/
?>


<div class="wrapper-anwendung-einreichen-content container-fluid row">
	<div class="anwendung-einreichen-content container">
		<?php while (have_posts()) : the_post(); { ?>

			<h2><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<div class="anwendung-einreichen-form">
				<?php echo do_shortcode( '[contact-form-7 id="' . get_post_meta($post->ID, 'appsub_formular', single) . '" title="Anwendung einreichen"]' ); ?>
			</div>

		<?php } endwhile; 
		wp_reset_postdata(); ?>

	</div>	
</div>







