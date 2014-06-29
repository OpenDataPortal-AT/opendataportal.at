<?php
/*



*/
?>

<form role="search" method="get" class="search-form searchform-404 form-inline" action="<?php echo home_url('/'); ?>">
  <div class="input-group">
    
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field row form-control" placeholder="Suchbegriff eingeben">
    <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
    
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"></button>
    </span>
  </div>

</form>