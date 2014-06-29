<?php
/*

*/
?>


<span class="news-preview-metadata text-italic">
	
	<span><span class="text-bold">Quelle: </span><?php $source = get_newssource(); ?></span>

	<span class="preview-seperator">|</span>
	
	<span class="link-themen"><?php get_themen_preview(); ?></span> 

	<span class="preview-seperator">|</span>

	<span class="tags">
		<?php print_tags(); ?>
	</span>

	<span class="preview-seperator">|</span>

	<?php if($source == 'odp') { ?>
		<span class="comments">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/comment.png'; ?>"><span class="num-comments"><?php echo comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?><span>
		</span>
	<?php } ?>

</span>