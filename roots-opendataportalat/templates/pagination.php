
<?php if ($wp_query->found_posts > 1) :  ?>
	<nav class="post-nav">
		<?php 
		$next = $paged+1;
		$previous = $paged-1; 
		$last_page = $wp_query->max_num_pages;
		//echo $title_url;
		//$title_url = 'news';
		
		if($paged <= 1 ) { ?>
			<!--<button class="btn btn-first-disabled"></button> -->
			<button class="btn btn-previous-disabled"></button>
		<?php } else { ?>
			<!--<a href="<?php echo get_site_url() . '/'.$title_url.'/'; ?>" title="Pagination First Page"><button class="btn btn-first"></button></a> -->
			<?php echo get_previous_posts_link('<button class="btn btn-previous"></button>');
		}
		
		if($paged >= $last_page ) { ?>
			<button class="btn btn-next-disabled"></button>
			<!-- <button class="btn btn-last-disabled"></button> -->
		<?php } else {
			echo get_next_posts_link('<button class="btn btn-next" style="margin-left: 5px"></button>'); ?>
			<!-- <a href="<?php echo get_site_url() . '/'.$title_url.'/page/' . $last_page.'/'; ?>" title="Pagination Last Page"><button class="btn btn-last<?php echo $ext_up; ?>"></button></a> -->
		<?php } ?>
	</nav>
<?php endif; ?>


