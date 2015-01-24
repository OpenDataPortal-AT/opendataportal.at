<?php
/*
Preview of news rendered in index.php, front-page.php and template-thema.php.
*/
?>

<div class="header">
	<div class="preview-date">
		<?php get_template_part('templates/content', 'date-field'); ?>
	</div>

	<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<div class="news-preview-metadata text-italic">
		
		<span class="link-themen"><?php get_themen_preview_landingpage(); ?>

		<span class="news-source"><?php $source = get_newssource(); ?></span>&#44;&#32;

		<span class="tags">
			<?php print_tags(); ?>
		</span>

		<?php if($source == 'odp') { ?>
			&#44;&#32;<span class="meta-comments">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/comment.png'; ?>"><span class="num-comments"><?php echo comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?><span>
			</span>
		<?php } ?>

	</div>
</div>

<div class="entry-summary">
	<div class="entry-content preview-excerpt">
		<?php the_excerpt(); ?>
		<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a></strong>
	</div>
</div>


