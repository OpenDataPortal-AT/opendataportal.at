<?php
/*
Single page of datentools
*/
?>

<div class="container">
	<article <?php post_class(); ?>>
	
		<header class="col-md-offset-3">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="container row">	
		
			<div class="sidebar-datentool col-md-3">
				
				<div class="sidebar-datentool-themen">
					<h2>Themen</h2>
					<?php get_themen_sidebar(); ?>
				</div>

				<div class="sidebar-datentool-typ">
					<h2>Typ</h2>
					<?php get_typ_sidebar('tools_typ'); ?>
				</div>
				
				<div class="sidebar-datentool-betriebssysteme">
					<h2>Systeme</h2>
					 <?php get_betriebssysteme_sidebar('tools_betriebssysteme'); ?> 
				</div>

				<div class="sidebar-datentool-kontakt">
					<h2>Kontakt</h2>
					<?php get_name_submitter('tool'); ?>
					<a class="icon-mail" href="mailto:<?php echo get_post_meta($post->ID, 'tool_email_einreicherin', single); ?>"><?php echo get_post_meta($post->ID, 'tool_email_einreicherin', single); ?></a><br>
					<?php get_website_organisation('tool'); ?>
				</div>
				
				<div class="sidebar-datentool-website">
					<h2>Links zur Anwendung</h2>
					<?php get_websites_sidebar( 'tool' ); ?>
				</div>

			</div>

			<div class="entry-content col-md-9">
				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;	

				$data = get_post_meta( get_the_ID(), 'tool_verwendete_datensaetze', single);
				if($data) { ?>
				<div>
					
					<h3>Diese Anwendung verwendet folgende Datensätze/Dienste:</h3>
					
					<table id="table-data" class="table-related-datasets table table-striped" onload="start();" data-ids="<?php echo $data; ?>">
						<tr>
							<th>Titel des Datensatzes (Datenherkunft)</th>
						</tr>
					</table>

				</div>
				<?php } 
				wp_reset_postdata(); ?>
		
				<div  class="row col-md-12">
					<?php get_template_part('templates/content', 'socialshare'); ?>
				</div>
			</div>
		</div>
		

		<footer>
			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		</footer>
		
	</article>
</div>

<script>

window.addEventListener("load", start, false);

function start() {

	var table = document.getElementById('table-data');

	// get dataset id's via data attribute
	var tableIDs = $( ".table-related-datasets" );
	idsStr = tableIDs.data("ids");
	ids = idsStr.split('\n');
	console.log(ids);

	for(i=0; i < ids.length; i++) {

		// create api call
		var url = "http://data.opendataportal.at/api/2/rest/dataset/" + ids[i];

		// access ckan api
		var request = new XMLHttpRequest();
		request.open("GET", url, false);
		request.send();
	  
		// check api call for errors
		if (request.status === 200) {

			// fetch result
			var data = JSON.parse(request.responseText);

			// Create an empty <tr> element and add it to the 1st position of the table:
			var row = table.insertRow(i+1);

			// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
			var cell = row.insertCell(0);
	
			// Add some text to the new cells:
			cell.innerHTML = '<tr><a href="http://data.opendataportal.at/dataset/' + data.id + '" title="' + data.title + '">' + data.title + '</a></tr>';
		}
	}
}


</script>
