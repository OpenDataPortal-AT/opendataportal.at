<?php
/*
Shows all posts of a particular tag
*/
?>

<div class="tag-list col-md-12">
	<div class="container">

        <?php while (have_posts()) : the_post(); { ?>
			<div id="post-<?php echo $post->ID; ?>" class="preview-post">
				
				<div class="preview-date col-md-1">
					<?php get_template_part('templates/content', 'date-field'); ?>
				</div>
				
				<div class="col-md-11">
					<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php get_template_part('templates/news-meta'); ?>
					<div class="entry-summary">
						<div class="entry-content preview-excerpt">
							<?php the_excerpt(); ?>
							<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a></strong>
						</div>
					</div>
				</div>

			</div>
        <?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>
</div>

