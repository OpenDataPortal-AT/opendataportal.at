<?php
/*
Template Name: Thema
Template for Thema page
*/
?>	

<div class="wrapper-thema-content container-fluid row">
	<div class="thema-content container">
		<?php while (have_posts()) : the_post(); { 
			$thema = basename( get_permalink() ); ?>
			<h2 class="text-center logo-thema-medium"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $thema; ?>_medium.png" alt=""><?php the_title(); ?></h2>
			<div class="text-center">
				<?php 
				the_content(); 
				?>
			</div>
		<?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>	
</div>

<div class="wrapper-thema-highlight container-fluid row">
	<div class="thema-highlight container">

		<h3 class="text-center"><a href="<?php echo home_url() ?>/highlights/?taxonomy&themen=<?php echo $thema; ?>" title="Highlight">Highlights</a></h3>

		<?php $myQuery_Highlight = new WP_Query( array( 'post_type' => 'cpt_highlights', 'tax_query' =>  array( array( 'taxonomy' => 'themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC') );
		while ( $myQuery_Highlight->have_posts() ) : $myQuery_Highlight->the_post(); { ?>

			<?php get_template_part('templates/content', 'highlight-preview'); ?>

		<?php } endwhile; // end of the loop. 
		wp_reset_postdata(); ?>

	</div>
</div>

<div class="wrapper-thema-data container-fluid row">
	<div class="thema-data container">
		<h3>Datensätze zu diesem Thema</h3>
		<table id="thema-table" class="table-thema table table-striped" data-thema="<?php echo $thema; ?>" onload="start();">
		</table>
	</div>	
</div>	

<div class="wrapper-thema-news container-fluid row"> 
	<div class="thema-news container"> 	
		<h3>News zu diesem Thema</h3>	
		<?php $myQuery_News = new WP_Query( array( 'post_type' => 'post', 'tax_query' =>  array( array( 'taxonomy' => 'themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
		while ( $myQuery_News->have_posts() ) : $myQuery_News->the_post(); { ?>
			<div class="thema-preview-news col-md-12" id="post-<?php echo $post->ID; ?>">
				<?php get_template_part('templates/content', 'news'); ?>
			</div>	
		<?php } endwhile; // end of the loop. 
		wp_reset_postdata(); ?>
		 <a href="<?php echo home_url() ?>/news/?taxonomy&themen=<?php echo $thema; ?>" title="News"><button class="btn btn-primary">mehr anzeigen</button></a>
	</div>	
</div>

<div class="wrapper-thema-anwendungen container-fluid row"> 
	<div class="wrapper-thema-anwendungen container"> 
		
		<h3>Anwendungen zu diesem Thema</h3>
		<?php $myQuery_Anwendungen = new WP_Query( array( 'post_type' => 'cpt_anwendungen', 'tax_query' =>  array( array( 'taxonomy' => 'themen', 'field' => 'slug', 'terms' => $thema ) ), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
		while ( $myQuery_Anwendungen->have_posts() ) : $myQuery_Anwendungen->the_post(); { ?>	
			<div class="anwendung-preview col-md-12 row" id="post-<?php echo $post->ID; ?>">
				<?php get_template_part('templates/content', 'anwendung-preview'); ?>
			</div>		
		<?php } endwhile; // end of the loop. 
		wp_reset_postdata(); ?>
		<a href="<?php echo home_url() ?>/anwendungen/?taxonomy&themen=<?php echo $thema; ?>" title="Anwendungen"><button class="btn btn-primary">mehr anzeigen</button></a>

	</div>	
</div>	

<div class="wrapper-thema-socialshare container-fluid row"> 
	<div  class="container">
		<?php get_template_part('templates/content', 'socialshare'); ?>
	</div>
</div>

<script>

window.addEventListener("load", start, false);

function start() {


	var table = document.getElementById('thema-table');

	// get thema via data attribute
	var tableThema = $( ".table-thema" );
	thema = tableThema.data("thema");
	//var thema = "verwaltung-und-politik";

	// create api call
	var url = "https://data.opendataportal.at/api/3/action/package_search?rows=10&sort=metadata_modified%20desc%20&q=categorization:" + thema;

	// access ckan api
	var request = new XMLHttpRequest();
	request.open("GET", url, false);
	request.send();
  
  // check api call for errors
	if (request.status === 200)
	{
		// fetch result
		var data = JSON.parse(request.responseText);
		var listResults = data.result.results;
		var numResults = listResults.length;

		// check if there are any results
		if ( numResults === 0 ) {
			// output no results
		}
		if( numResults > 0 ) {
			for ( var i = 0; i < numResults; i++ ) {
				//table.append( '<tr><a href="' + ' title="">Titel</a></tr>' );

				// Create an empty <tr> element and add it to the 1st position of the table:
				var row = table.insertRow(i);

				// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
				var cell = row.insertCell(0);

				// Add some text to the new cells:
				cell.innerHTML = '<tr><a href="http://data.opendataportal.at/dataset/' + listResults[i].id + '" title="' + listResults[i].name + '">' + listResults[i].name + '</a></tr>';
			}
		}
	}
}


</script>
