<?php
/*
Template Name: Highlights
Template for Highlights overview page
*/
?>

<div class="highlights-list col-md-12" data-searchfilters="<?php echo get_post_meta($pid, 'highlights_searchfilters', single); ?>" data-textsearch="<?php echo get_post_meta($pid, 'highlights_textsearch', single); ?>">
	<div class="container">
  
		<div class="row">
			<?php get_template_part('templates/page', 'header'); ?>
	    </div>

	    <div class="entry-content">
			<?php if ( have_posts() ) : while (have_posts()) : the_post();
			    	the_content();
	      		endwhile; // end of the loop.
	      	endif ?>
	    </div>

   	    <div class="highlights-results container filter-results" style="float:right;">
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('post_type' => 'cpt_highlights', 'posts_per_page' => -1, 'paged' => $paged );
			query_posts($args); 
			$num_posts = $wp_query->found_posts; ?>

			<span class="sentence-num-posts">
				<span class="num-posts"><?php echo $num_posts; ?></span>
				
				<?php if($num_posts == 0) {
					echo ' Highlights';
				} elseif($num_posts == 1) {
					echo ' Highlight'; 
				} else {
					echo ' Highlights';
				}
				echo ' gefunden'; ?>
			</span>
			
			<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/content', 'highlight'); ?>
	      		<?php endwhile; // end of the loop. 
	      	endif; 

			wp_reset_postdata();

			get_template_part('templates/pagination'); ?>

		</div>

	</div>
</div>

