<?php
/*



*/
?>

<form role="search" method="get" class="search-form search-form-header form-inline" action="<?php echo get_template_directory_uri(); ?>/ckan-search.php" data-ckan="<?php echo get_template_directory_uri(); ?>/ckan-search.php" data-wordpress="<?php echo home_url('/'); ?>">
  <div class="input-group">
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="q" class="search-field row form-control" placeholder="Suchbegriff eingeben">
    <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"></button>
    </span>
  </div>
   <div class="search-radio-buttons">
 		<label>
 			<input type="radio" name="optionsSearch" id="optionsRadios-ckan" value="ckan" onclick="activateCKAN();" checked>Datenkatalog
 		</label>
 		<label>
 			<input type="radio" name="optionsSearch" id="optionsRadios-wordpress" value="wordpress" onclick="activateWordpress();">Portal
 		</label>
  </div>
</form>

<script>

//var searchform = document.getElementById('header-suche');
var searchform = $( ".search-form" );

function activateWordpress() {
  action = searchform.data("wordpress");
  searchform.attr("action", action);
  searchform.children('.input-group').children('.search-field').attr('name', 's');
}

function activateCKAN() {
  action = searchform.data("ckan");
  searchform.attr("action", action);
  searchform.children('.input-group').children('.search-field').attr('name', 'q');
}

</script>
