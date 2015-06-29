<?php
/*
Template Name: Thema
Template for Thema page
*/
?>

<div class="wrapper-thema-content container-fluid row">
	<div class="thema-content container">
		<?php while (have_posts()) : the_post(); { 
			$thema = basename( get_permalink() ); ?>
			<h2 class="text-center logo-thema-medium"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $thema; ?>_medium.png" alt=""><?php the_title(); ?></h2>
			<div class="text-center">
				<?php 
				the_content(); 
				?>
			</div>
		<?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>	
</div>


<?php 
// latest Highlight
$myQuery_Highlight = new WP_Query( array( 'post_type' => 'cpt_highlights', 'tax_query' =>  array( array( 'taxonomy' => 'ct_themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC') );
if($myQuery_Highlight->found_posts >= 1) { ?>
	more
	<div class="wrapper-thema-highlight container-fluid row">
		<div class="thema-highlight container">
			<h3 class="text-center"><a href="<?php echo home_url() ?>/highlights/?taxonomy&ct_themen=<?php echo $thema; ?>" title="Highlight">Highlights</a></h3>
			<?php while ( $myQuery_Highlight->have_posts() ) : $myQuery_Highlight->the_post(); { ?>
				<?php get_template_part('templates/content', 'highlight-preview'); ?>
				<?php } endwhile; // end of the loop. 
				wp_reset_postdata(); ?>
		</div>
	</div>
<?php } ?>

<?php 
// recent three News
$myQuery_News = new WP_Query( array( 'post_type' => 'post', 'tax_query' =>  array( array( 'taxonomy' => 'ct_themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
if($myQuery_News->found_posts >= 1) { ?>
	<div class="wrapper-thema-news container-fluid row"> 
		<div class="thema-news container"> 	
			<h3>News zu diesem Thema</h3>	
			<?php while ( $myQuery_News->have_posts() ) : $myQuery_News->the_post(); { ?>
				<div class="thema-preview-news col-md-12" id="post-<?php echo $post->ID; ?>">
					<?php get_template_part('templates/content', 'news-preview'); ?>
				</div>	
			<?php } endwhile; // end of the loop. 
			wp_reset_postdata(); ?>
			<a href="<?php echo home_url() ?>/news/?taxonomy&ct_themen=<?php echo $thema; ?>" title="News"><button class="btn btn-primary">mehr anzeigen</button></a>
		</div>	
	</div>
<?php } ?>

<?php 
// recent three applications
$myQuery_Anwendungen = new WP_Query( array( 'post_type' => 'cpt_anwendungen', 'tax_query' =>  array( array( 'taxonomy' => 'ct_themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
if($myQuery_Anwendungen->found_posts >= 1) { ?>
	<div class="wrapper-thema-anwendungen container-fluid row"> 
		<div class="wrapper-thema-anwendungen container"> 
			<h3>Anwendungen zu diesem Thema</h3>
			<?php while ( $myQuery_Anwendungen->have_posts() ) : $myQuery_Anwendungen->the_post(); { ?>	
				<div class="anwendung-preview col-md-12 row" id="post-<?php echo $post->ID; ?>">
					<?php get_template_part('templates/content', 'anwendung-preview'); ?>
				</div>		
			<?php } endwhile; // end of the loop. 
			wp_reset_postdata(); ?>
			<a href="<?php echo home_url() ?>/anwendungen/?taxonomy&ct_themen=<?php echo $thema; ?>" title="Anwendungen"><button class="btn btn-primary">mehr anzeigen</button></a>
		</div>	
	</div>	
<?php } ?>

<div class="wrapper-thema-socialshare container-fluid row"> 
	<div  class="container">
		<?php get_template_part('templates/content', 'socialshare'); ?>
	</div>
</div>

