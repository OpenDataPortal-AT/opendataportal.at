<?php
/*
Template for the blog.
*/
?>	

<?php 


if(is_search()) {

	get_template_part('templates/search');

} else {
	$page = get_page_by_path('news');

	if ($page) {
		$pid = $page->ID;
		$permalink = get_permalink($pid);
	} else {
		$pid = null;
	} ?>

	<div class="news-list col-md-12" style="padding: 28px;" data-searchfilters="<?php echo get_post_meta($pid, 'news_searchfilters', single); ?>" data-textsearch="<?php echo get_post_meta($pid, 'news_textsearch', single); ?>">
		<div class="container">
	  
			<div class="news-sidebar filter-sidebar col-md-3" style="float:left;">
				<?php echo do_shortcode('[ULWPQSF id=768 formtitle="0"]'); ?>
				<?php echo do_shortcode('[ULWPQSF id=769 button=0 formtitle="0"]'); ?>
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
					overwriteTextSearchFilter("#uwpqsffrom_768", "News durchsuchen");
					
					// Overwrite search filter for Taxonomy Filter 'Themen'
					overwriteSearchFilter("#uwpqsffrom_769", "#uwpqsffrom_769 .uwpqsf_class.tax-check-0");
					
					// Overwrite search filter for Taxonomy Filter 'Kategorie'
					overwriteSearchFilter("#uwpqsffrom_769", "#uwpqsffrom_769 .uwpqsf_class.tax-check-1");
					
					//Call reset all search filters function
					resetAllSearchFilters();
					
				});

			</script>
	    
			<div class="col-md-9" style="float:right;">
				<?php get_template_part('templates/page', 'header'); ?>
	      		<?php if (!have_posts()) : ?>
	        		<div class="alert alert-warning">
	          			<?php _e('Sorry, no results were found.', 'roots'); ?>
	        		</div>
	        		<?php get_search_form(); ?>
	      		<?php endif; ?>
		    </div>
	    
		    <div class="news-results filter-results col-md-9" style="float:right;">
	    		<?php 
	      		$num_posts = wp_count_posts(); ?>
	      		<div class="sentence-num-posts"><span class="num-posts"><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->category_count; ?></span> Data Stories gefunden <a href="<?php echo home_url(); ?>/news" title="News"><button class="btn btn-primary button-alle-highlights" style="float:right;">News</buttton></div>
		      		<?php 
		      		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					while (have_posts()) : the_post(); ?>
						<div class="preview-news" id="post-<?php echo $post->ID; ?>">
							<?php get_template_part('templates/content', 'news-preview'); ?>
						</div>
					<?php endwhile; 
			      	get_template_part('templates/pagination'); ?>
				</div>
			</div>
		<div>
	</div>

<?php } ?>
