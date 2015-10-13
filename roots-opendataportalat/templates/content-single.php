<?php
/*
Default template for single view a post.
*/
?>

<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
			
		<header class="col-md-offset-3">
			<h1 class="entry-title"><?php the_title(); ?> <?php if(in_category('datastories')) {
				echo '<a href="'. home_url() . '/category/datastories/" title="Data Stories"><button class="btn btn-primary button-alle-highlights" style="float: right;">Data Story</button></a>';
		} ?>
</h1>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>

		<div class="container row">
			<div class="sidebar-single-news col-md-3">
	
				<div class="sidebar-thema">
					<h2>Thema</h2>
					<?php get_themen_sidebar(true); ?>
				</div>

				<div class="sidebar-quelle">
					<h2>Quelle</h2>
					<span><?php $source = get_newssource_sidebar(); ?></span>
				</div>					

				<div class="sidebar-tags">
					<h2>Schlagwörter</h2>
					<?php get_tags_sidebar(); 
					get_cats_sidebar($post->ID); ?>
				</div>

			</div>
				
			<div class="entry-content col-md-9">
				<?php 

						the_content(); ?>
			<div  class="row">
					<?php get_template_part('templates/content', 'socialshare'); ?>
				</div>
			</div>

		</div>

		<footer>
			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		</footer>

		<div  class="comments row col-md-offset-3">
			<?php comments_template('/templates/comments.php'); ?>
		</div>
	</article>
	<?php endwhile;
endif; ?>

</div>

