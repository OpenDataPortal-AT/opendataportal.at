<?php
/*
Preview of news rendered in index.php, front-page.php and template-thema.php.
*/
?>

<div class="header row">
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


