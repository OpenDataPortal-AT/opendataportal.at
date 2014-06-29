<?php
/*
Single page fo anwendungen
*/
?>

<div class="container">
	<article <?php post_class(); ?>>
	
		<header class="col-md-offset-4">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="container row">	
		
			<div class="sidebar-anwendung col-md-3">
				
				<div class="sidebar-anwendung-themen">
					<h2>Themen</h2>
					<?php get_themen_sidebar(); ?>
				</div>

				<div class="sidebar-anwendung-typ">
					<h2>Typ</h2>
					<?php get_typ_sidebar('app_typ'); ?>
				</div>
				
				<div class="sidebar-anwendung-betriebssysteme">
					<h2>Systeme</h2>
					 <?php get_betriebssysteme_sidebar('app_betriebssysteme'); ?> 
				</div>

				<div class="sidebar-anwendung-kontakt">
					<h2>Kontakt</h2>
					<?php get_name_submitter('app'); ?>
					<a class="icon-mail" href="mailto:<?php echo get_post_meta($post->ID, 'app_email_einreicherin', single); ?>"><?php echo get_post_meta($post->ID, 'app_email_einreicherin', single); ?></a><br>
					<?php get_website_organisation('app'); ?>
				</div>
				
				<div class="sidebar-anwendung-website">
					<h2>Links zur Anwendung</h2>
					<?php get_websites_sidebar( 'app' ); ?>
				</div>

			</div>

			<div class="entry-content col-md-9">
				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;	

				$data = get_post_meta( get_the_ID(), 'app_verwendete_datensaetze', single);
				if($data) { ?>
				<div>
					
					<h1>Diese Anwendung verwendet folgende Datensätze/Dienste:</h1>
					
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

				<!-- <?php comments_template('/templates/comments.php'); ?> -->

			</div>
		</div>
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
