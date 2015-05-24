<?php
/*
Single page fo anwendungen
*/
?>

<div class="container">
	<article <?php post_class(); ?>>
		<header class="col-md-offset-3">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="container row">	
			<div class="sidebar-anwendung col-md-3">
				<div class="sidebar-anwendung-themen">
					<h2>Themen</h2>
					<?php get_themen_sidebar(); ?>
				</div>

				<div class="sidebar-anwendung-typ">
					<h2>Typ</h2>
					<?php get_typ_sidebar('app_typ'); ?>
				</div>
				
				<div class="sidebar-anwendung-betriebssysteme">
					<h2>Systeme</h2>
					 <?php get_betriebssysteme_sidebar('app_betriebssysteme'); ?> 
				</div>

				<div class="sidebar-anwendung-datasources">
					<h2>Verwendete Daten</h2>
					 <?php get_datasources_sidebar(); ?> 
				</div>

				<div class="sidebar-anwendung-kontakt">
					<h2>Kontakt</h2>
					<?php get_name_submitter('app'); ?><br>
					<a class="icon-mail" href="mailto:<?php echo get_post_meta($post->ID, 'app_email_einreicherin', single); ?>"><?php echo get_post_meta($post->ID, 'app_email_einreicherin', single); ?></a><br>
					<?php get_website_organisation('app'); ?>
				</div>
				
				<div class="sidebar-anwendung-website">
					<h2>Links zur Anwendung</h2>
					<?php get_websites_sidebar( 'app' ); ?>
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
		
				<div  class="comments row col-md-12">
					<?php comments_template('/templates/comments.php'); ?>
				</div>

			</div>
		</div>
	</article>
</div>

