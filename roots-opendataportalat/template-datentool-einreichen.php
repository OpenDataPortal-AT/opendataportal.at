<?php
/*
Template Name: Datentool einreichen
Description: Template to submit datentool via frontend and automatically create a post.
*/
?>

<?php
/*
Template Name: Anwendungen
Description: Template for applications overview page
*/
?>


<div class="wrapper-datentool-einreichen-content container-fluid row">
	<div class="datentool-einreichen-content container">
		<?php while (have_posts()) : the_post(); { ?>

			<h2><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<div class="datentool-einreichen-form">
				<?php echo do_shortcode( '[contact-form-7 id="' . get_post_meta($post->ID, 'toolsub_formular', single) . '" title="Datentool einreichen"]' ); ?>
			</div>

		<?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>	
</div>







