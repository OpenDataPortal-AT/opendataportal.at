<div class="wrap container">
	<?php get_template_part('templates/page', 'header'); ?>

	<div class="alert alert-warning">
		<?php _e('Die gesuchte Seite ist gerade nicht verfügbar.', 'roots'); ?>
	</div>

	<p><?php _e(
			'Unsere Seite unterliegt ständigen Verbesserungen und Aktualisierungen. Es ist möglich, dass diese Seite verschoben oder umbenannt wurde. Du kannst mit deinem Browser Zurueck Button zur vorherigen Seite zurück gehen, oder <a href="' . home_url() . '">zur Homepage</a>, um nach der gesuchten Information zu sehen.',
			'roots'
		); ?></p>
	<?php _e(
		'Wenn du diese Seite erreicht hast wegen einem Fehler auf unserer Seite, <a href="' . home_url() . '/kontakt/">bitte kontaktiere uns</a>.',
		'roots'
	); ?>
	<div>
		<?php get_template_part( 'templates/searchform', '404'); ?>
	</div>
	
</div>

