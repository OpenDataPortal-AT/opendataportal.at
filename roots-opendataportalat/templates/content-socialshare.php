<?php
/*

*/
?>

<div class="socialshare container">
<!--	<h2>Teilen<span class="icon-help"></span></h2> -->
	<h2>Teilen</h2>
	<?php if ( function_exists('socialshareprivacy') ) { socialshareprivacy(); } ?>
</div>

<script>

$(document).ready(function() {
	$(".icon-help").tooltip();
});

</script>