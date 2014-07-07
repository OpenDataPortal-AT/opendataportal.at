<?php
/*
Search page
*/
?>	

<div class="news-list col-md-12">
	<div class="container">
		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array('post_type' => 'cpt_anwendungen', 'posts_per_page' => 2, 'paged' => $paged );
		$num_posts = $wp_query->found_posts; ?>

		<div class="sentence-num-posts">
			<span class="num-posts"><?php echo $num_posts ?></span>
			<?php echo ' Treffer'; ?> 
		</div>
	
		<div class="search-results" >
			<?php while (have_posts()) : the_post(); ?>		
				       
				<div class="search-results-content" >
						<div class="preview-date">
							<?php get_template_part('templates/content', 'date-field'); ?>
						</div>
					<div class="col-md-11">
						<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						
						<div class="entry-summary">
						<div class="entry-content preview-excerpt">
							<?php the_excerpt(); ?>
							<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a></strong>
						</div>
					</div>
					</div>

					
				</div>

			<?php endwhile; ?>
		</div>

	    <div style="clear:both;"></div>

			<?php if ($wp_query->max_num_pages > 1) : ?>
				<nav class="post-nav">
					<ul class="pager">
						<li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
						<li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
					</ul>
				</nav>
			<?php endif; ?>

			<div  class="row">
				<?php get_template_part('templates/content', 'socialshare'); ?>
			</div>
		</div>
	<div>
</div>
