<?php
/*
Preview of applications rendered in template-anwendungen.php and template-thema.php.
*/
?>

<div class="datentool-preview" id="post-<?php echo $post->ID; ?>">

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="col-md-4 datentool-thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="preview-content col-md-8">
		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

		<span class="preview-metadata">
			<span class="einreichungsdatum">
				<?php 
				$sub_date = get_post_meta(get_the_id(), 'tool_einreichdatum', single); 
				echo $sub_date;
				?>
			</span> &#124; 
			<span class="einreicherIn">
				<?php echo get_post_meta(get_the_id(), 'tool_name_einreicherin', single); ?>
			</span> &#124; 
			<span class="link-themen">
				Themen: <?php get_themen_preview(); ?>
			</span> 
		</span>

		<div class="preview-excerpt">
			<?php the_excerpt(); ?> <!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a> -->
		</div>

		<span class="preview-betriebssysteme">
			<?php get_betriebssysteme_preview( 'tools_betriebssysteme' ); ?>
		</span>

	</div>
	<?php } else { ?>
		<div class="preview-content no-thumb col-md-12">
		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

		<span class="preview-metadata">
			<span class="einreichungsdatum">
				<?php 
				$sub_date = get_post_meta(get_the_id(), 'tool_einreichdatum', single); 
				echo $sub_date;
				?>
			</span> &#124; 
			<span class="einreicherIn">
				<?php echo get_post_meta(get_the_id(), 'tool_name_einreicherin', single); ?>
			</span> &#124; 
			<span class="link-themen">
				Themen: <?php get_themen_preview(); ?>
			</span> 
		</span>

		<div class="preview-excerpt">
			<?php the_excerpt(); ?> <!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">weiterlesen</a> -->
		</div>

		<span class="preview-betriebssysteme">
			<?php get_betriebssysteme_preview( 'tools_betriebssysteme' ); ?>
		</span>

	</div>
	<?php }?>	

	
  
