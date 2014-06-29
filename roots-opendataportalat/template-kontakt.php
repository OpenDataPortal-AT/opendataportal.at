<?php
/*
Template Name: Kontakt
Template for Kontakt page
*/
?>

<div class="container">

	<div id="contact-wrapper">

		<div class="row">
			<section class="col-md-9">
				<div class="entry-content">
						<?php while (have_posts()) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
					<?php endwhile; 
					wp_reset_postdata(); ?>
				</div>
			</section>

			<section class="col-md-3">
				<div>
					<h3>
						<span>Twitter</span>
					</h3>
					<p class="section-intro"><i>Frage uns auf <a href="https://twitter.com/odp_AT">@odp_AT</a></i></p>
					<div class="twitter-feed">
						<?php echo do_shortcode( '[twitter-widget username="odp_AT" items="3" hidereplies="false" title=" " showintents="false" showretweets="true"]' ) ?>
					</div>
				</div>
			</section>
		</div>

		<div class="col-md-12 row contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="' . get_post_meta($post->ID, 'kontakt_formular', single) . '" title="Kontaktiere-uns"]' ); ?>		
		</div>

		<div  class="row">
			<?php get_template_part('templates/content', 'socialshare'); ?>
		</div>

	</div>
</div>
