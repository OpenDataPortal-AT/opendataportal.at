<?php
/*



*/
?>

<form role="search" method="get" class="search-form search-form-frontpage form-inline" action="<?php echo get_template_directory_uri(); ?>/ckan-search.php">
	<div class="input-group">
		<label class="sr-only" for="search-frontpage"><?php _e('Suche in:', 'roots'); ?></label>
		<input type="search" id="search-frontpage" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="q" class="search-field form-control" placeholder="<?php _e('Suche in', 'roots'); ?> Datenkatalog">
		<span class="input-group-btn">
			<button type="submit" class="search-submit btn btn-default">
				<span class="sr-only"><?php _e('Suche', 'roots'); ?></span>
			</button>
		</span>
	</div>
</form>

