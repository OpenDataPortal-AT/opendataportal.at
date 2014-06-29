<?php
/*
Preview of highlight rendered in front-page.php, template-highlights.php and template-thema.php.
*/
?>

<div class="highlight-preview col-md-12 row" id="post-<?php $post->ID; ?>">

	<div class="preview-content col-md-11">
		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
		<span class="highlight-metadata">
			<?php if(is_page_template( 'template-thema.php' ) ) { ?>

				<span class="tags">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/tag.png'; ?>">tag<span class="num-tags"><?php echo count(get_the_tags()); ?><span>
				</span>

				<span class="comments">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/comment.png'; ?>"><span class="num-comments"><?php echo comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?><span>
				</span>

			<?php } else { ?>
				<span>
					 <strong>Quelle: </strong><?php $source = get_newssource(); ?>
				</span>
				<span class="tags">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/tag.png'; ?>">tag<span class="num-tags"><?php echo count(get_the_tags()); ?><span>
				</span>
				<span class="link-themen">
					<strong>Themen: </strong><?php get_themen_preview(); ?>
				</span> 
				<?php if($source == 'odp') { ?>
					<span class="comments">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/comment.png'; ?>"><span class="num-comments"><?php echo comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?><span>
					</span>
				<?php } ?>
			<?php } ?>
		</span>

		<div class="preview-excerpt">
			<?php the_excerpt(); ?>
			<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a></strong>
		</div>

	</div>
	<div class="preview-date col-md-1">
		<?php get_template_part('templates/content', 'date-field'); ?>
	</div>
</div>

