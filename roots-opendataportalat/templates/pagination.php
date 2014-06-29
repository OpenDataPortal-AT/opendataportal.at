

<?php if ($wp_query->max_num_pages > 1) :  ?>
	<nav class="post-nav">
		<?php 
		$ext_down = '';
		$ext_up = '';
		$next = $paged+1;
		$previous = $paged-1; 

		if($paged <= 0 ) {
			$ext_down = '-disabled'; ?>
			<button class="btn btn-first<?php echo $ext_down; ?>"></button>
			<button class="btn btn-previous<?php echo $ext_down; ?>"></button>
			<a href="<?php echo $permalink . 'page/' . $next; ?>" title="Pagination Next Page"><button class="btn btn-next<?php echo $ext_up; ?>"></button></a>
			<a href="<?php echo $permalink . 'page/' . $last_page; ?>" title="Pagination Last Page"><button class="btn btn-last<?php echo $ext_up; ?>"></button></a>
		<?php } elseif($paged >= $last_page ) {
			$ext_up = '-disabled'; ?>
			<a href="<?php echo $permalink; ?>" title="Pagination First Page"><button class="btn btn-first<?php echo $ext_down; ?>"></button></a>
			<a href="<?php echo $permalink . 'page/' . $previous; ?>" title="Pagination Previous Page"><button class="btn btn-previous<?php echo $ext_down; ?>"></button></a>
			<button class="btn btn-next<?php echo $ext_up; ?>"></button>
			<button class="btn btn-last<?php echo $ext_up; ?>"></button>
		<?php } else { ?>
			<a href="<?php echo $permalink; ?>" title="Pagination First Page"><button class="btn btn-first<?php echo $ext_down; ?>"></button></a>
			<a href="<?php echo $permalink . 'page/' . $previous; ?>" title="Pagination Previous Page"><button class="btn btn-previous<?php echo $ext_down; ?>"></button></a>
			<a href="<?php echo $permalink . 'page/' . $next; ?>" title="Pagination Next Page"><button class="btn btn-next<?php echo $ext_up; ?>"></button></a>
			<a href="<?php echo $permalink . 'page/' . $last_page; ?>" title="Pagination Last Page"><button class="btn btn-last<?php echo $ext_up; ?>"></button></a>
		<?php } ?>
	</nav>
<?php endif; ?>



<!--
<nav>
    <div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
</nav>
-->


