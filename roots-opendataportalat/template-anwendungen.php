<?php
/*
Template Name: Anwendungen
Description: Template for applications overview page
*/
?>

<?php
/* 
Das Problem bei der Loop für die Anwendungen ist, dass das mit dem Query von Custom Post Types einige Probleme mit der Pagination macht. 
Ein Ansatz wäre via add_action( 'pre_get_posts', 'set_post_query', 1 ); in der custom.php den normalen query voerher so zu konfiguriere und den Inhalt der Page via einem meta feld rein zu holen. 
Hat aber auf Anhieb nicht funktioniert.
http://wordpress.stackexchange.com/questions/126761/custom-wp-query-pagination-next-posts-link-or-wp-pagenavi-always-empty
http://codex.wordpress.org/Post_Types

*/
?>


<div class="wrapper-anwendungen-preview col-md-12 container-fluid row" data-searchfilters="<?php echo get_post_meta(get_the_ID(), 'app_searchfilters', single); ?>" data-textsearch="<?php echo get_post_meta(get_the_ID(), 'app_textsearch', single); ?>"> 


	<div class="container"> 
  
		<div class="anwendungen-sidebar filter-sidebar col-md-3" style="float:left;">
			<?php echo do_shortcode('[ULWPQSF id=770 formtitle="0"]'); ?>
			<?php echo do_shortcode('[ULWPQSF id=771 button=0 formtitle="0"]'); ?>
		</div>
    
	    <script type="text/javascript">
    
			$(document).ready(function() {
				
				// Search Filter Overwrite Function
				overwriteSearchFilter = function (formid, el) {
					
					// add class ".expanded" to first container of el (main filter label)
					$(el).children().first().addClass("expanded taxolabel");
					
					// append first container of el (main filter label) with collapsible image class
					$(el).children().first().append("<span style=\"float:right\" class=\"collapsible-box-img\"></span><div style=\"clear:both\"></div>");
					
					// wrap labels of el with ".filter-container" css class for toggle and add a clear:both container at the end
					$(el + " label").wrapAll("<div class=\"filter-container\">");
					$("<div style=\"clear:both\"></div>").insertBefore(el + " .filter-container");
					
					$(formid).parent().addClass("filter-search");
			
					// toggle element ".filter-container" by clicking first container of el (main filter label) and change state (collapsed or expanded)
					$(el).children().first().click(function(){
							if ($(this).hasClass("expanded")) {
								$(el + " .filter-container").fadeOut();
								$(this).removeClass("expanded");
								$(this).addClass("collapsed");
							} else if ($(this).hasClass("collapsed")) {
								$(el + " .filter-container").fadeIn();
								$(this).removeClass("collapsed");
								$(this).addClass("expanded");
							}
					});
					
					// add container ".resetFilter" on end of element ".filter-container" and add clear:both containers before .resetFilter and after .filter-container
					$(el + " .filter-container").append("<div class=\"resetFilter\">Filter zurücksetzen</div>");
					$("<div style=\"clear:both;\"></div>").insertBefore(el + " .resetFilter");
					$("<div style=\"clear:both;\"></div>").insertAfter(el + " .filter-container");
			
					// reset all "input:checked" filters of element ".filter-container"
					var resetSingleFilter = function () {
						$(el + " .filter-container label input:checked").parent().removeClass("checked");
						$(el + " .filter-container label input:checked").prop("checked", false);
					};
					
					// call of resetSingleFilter() by clicking element ".resetFilter" and process data of the form
					$(document).on( "click", el + " .resetFilter", function() {
						if ($(el + " .filter-container label input:checked").size() > 0) {
							resetSingleFilter();
							process_data($(formid));
						}
					});
					
				};
				
				// Overwrite Text Search Filter (hide label, add placeholder)
				overwriteTextSearchFilter = function (el, text) {
					$(el + " #uwpqsf_id_key").prev().hide();
					$(el + " #uwpqsf_id_key").attr("placeholder", text);
					$(el).parent().addClass("text-search");
					$(el + " .usfbtn.usearchbtn").val("");
				}
				
				// Search Filter Reset All Function
				resetAllSearchFilters = function () {
					
					// append element ".filter-sidebar" with ".resetFilter.all" container
					$(".filter-sidebar").append("<div class=\"resetFilter all\"><div class=\"inner\">Alle Filter zurücksetzen</div></div>");
					
					// ".resetFilter.all" click method
					$(document).on( "click", ".resetFilter.all", function() {
						// check if search field value is not empty and clear value
						// check if any input is checked and uncheck it
						// process data
						if ($("#uwpqsf_id:first #uwpqsf_id_key").val() != "" || $("input[type=checkbox]:checked").size() > 0) {
							$("#uwpqsf_id:first #uwpqsf_id_key").val("");
							$("input[type=checkbox]:checked").parent().removeClass("checked");
							$("input[type=checkbox]:checked").prop("checked", false);
							process_data($("#uwpqsf_id form"));
						}
					});
					
				}
				
				//Overwrite text search filter
				overwriteTextSearchFilter("#uwpqsffrom_770", "Anwendungen durchsuchen");
				
				// Overwrite search filter for Taxonomy Filter 'Kategorie'
				overwriteSearchFilter("#uwpqsffrom_771", "#uwpqsffrom_771 .uwpqsf_class.tax-check-0");
				
				//Call reset all search filters function
				resetAllSearchFilters();
				
			});
		</script>

	    <div class="wrapper-anwendungen-content container-fluid row col-md-9" style="float:right;">

	      <div class="anwendungen-content container">
	        <?php while (have_posts()) : the_post(); { ?>
	          <h2><?php the_title(); ?>
	            <a href="<?php echo home_url() ?>/anwendung-einreichen" title="Anwendung einreichen">
	              <button type="button" class="btn btn-primary button-anwendung-einreichen"><span class="icon-anwendung-einreichen">Anwendung einreichen</span></button>
	            </a>
	          </h2>
	          <div class="entry-content">
	            <?php the_content(); ?>
	          </div>
	        <?php } endwhile; 
	        wp_reset_postdata(); ?>
	      </div>
	    </div>
	    
	    <div class="anwendungen-preview-list filter-results col-md-9">
	    
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('post_type' => 'cpt_anwendungen', 'posts_per_page' => 5, 'paged' => $paged );
			$wp_query = new WP_Query( $args );
			$num_posts = $wp_query->found_posts; 
			?>

			<span class="sentence-num-posts">
				<span class="num-posts"><?php echo $num_posts; ?></span>
				
				<?php if($num_posts == 0) {
					echo ' Anwendungen';
				} elseif($num_posts == 1) {
					echo ' Anwendung'; 
				} else {
					echo ' Anwendungen';
				}
				echo ' gefunden'; ?>
			</span>

			<?php if ( $wp_query->have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	          		<?php get_template_part('templates/content', 'anwendung-preview'); ?>
	      		<?php endwhile; // end of the loop. 
			
			endif;

	      	get_template_part('templates/pagination'); 
	      	wp_reset_postdata(); ?>
		</div>
	</div>  
</div>  




