<?php
/*
Single page of datentools
*/
?>

<div class="container">
	<article <?php post_class(); ?>>
	
		<header class="col-md-offset-3">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="container row">	
		
			<div class="sidebar-datentool col-md-3">
				
				<div class="sidebar-datentool-themen">
					<h2>Themen</h2>
					<?php get_themen_sidebar(); ?>
				</div>

				<div class="sidebar-datentool-typ">
					<h2>Typ</h2>
					<?php get_typ_sidebar('tools_typ'); ?>
				</div>
				
				<div class="sidebar-datentool-betriebssysteme">
					<h2>Systeme</h2>
					 <?php get_betriebssysteme_sidebar('tools_betriebssysteme'); ?> 
				</div>

				<div class="sidebar-datentool-kontakt">
					<h2>Kontakt</h2>
					<?php get_name_submitter('tool'); ?>
					<a class="icon-mail" href="mailto:<?php echo get_post_meta($post->ID, 'tool_email_einreicherin', single); ?>"><?php echo get_post_meta($post->ID, 'tool_email_einreicherin', single); ?></a><br>
					<?php get_website_organisation('tool'); ?>
				</div>
				
				<div class="sidebar-datentool-website">
					<h2>Links zur Anwendung</h2>
					<?php get_websites_sidebar( 'tool' ); ?>
				</div>

			</div>

			<div class="entry-content col-md-9">
				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;	
				wp_reset_postdata(); ?>
		
				<div  class="row col-md-12">
					<?php get_template_part('templates/content', 'socialshare'); ?>
				</div>
			</div>
		</div>
		
		<footer>
			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		</footer>

		<div  class="comments row col-md-12">
			<?php comments_template('/templates/comments.php'); ?>
		</div>
		
	</article>
</div>

<script>

