<?php
/*
Template for Landing Page.
*/
?>

<!-- HIGHLIGHT -->

<div class="wrapper-home-highlight container-fluid row">
	<div class="home-highlight container">
		<a href="<?php echo home_url(); ?>/highlights" title="Alle Highlights"><h3 class="text-center"><button class="btn btn-primary button-alle-highlights">Alle Highlights</buttton></h3></a>
		<div class="row">
			<?php $myQuery_Highlight = new WP_Query( array( 'post_type' => 'cpt_highlights', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC') );
			while ( $myQuery_Highlight->have_posts() ) : $myQuery_Highlight->the_post(); { ?>
				<?php get_template_part('templates/content', 'highlight-preview'); ?>
			<?php } endwhile; // end of the loop.
			wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<!-- MITMACHEN -->

<div class="wrapper-home-mitmachen container-fluid row">
	<div class="home-mitmachen container text-center">
		<h3>Wie kann ich mitmachen?</h3>
		<p class="text-mitmachen"><?php echo get_post_meta($post->ID, 'lp_mitmachen', single); ?></p>
		<div class="home-mitmachen-buttons">
			<a href="http://data.opendataportal.at/user/login" title="Daten einstellen" class="col-md-4">
				<button type="button" class="btn btn-primary button-daten-einstellen"><span class="icon-daten-einstellen">Daten einstellen</span></button>
			</a>
			<a href="<?php echo home_url(); ?>/anwendung-einreichen" title="Anwendung einreichen" class="col-md-4">
				<button type="button" class="btn btn-primary button-anwendung-einreichen"><span class="icon-anwendung-einreichen">Anwendung einreichen</span></button>
			</a>
			<a href="https://intern.opendataportal.at/lists/listinfo/discuss" title="Mailingliste" class="col-md-4">
				<button type="button" class="btn btn-primary button-mailingliste"><span class="icon-mailingliste">Mailingliste</span></button>
			</a>
		</div>
		<div id="button-tutorial" class="col-sm-6 col-sm-offset-3">
			<a href="/tutorial-daten-hochladen/" title="Tutorial: Daten hochladen">
				<button type="button" class="btn btn-primary button-tutorial col-sm-12"><span>Tutorial: Daten hochladen</span></button>
			</a>
		</div>
	</div>
</div>

<!-- CONTENT -->

<div class="wrapper-home-content container-fluid row">
	<div class="home-content container">
		<div class="row">
			<div class="home-datenkatalog text-center col-md-4">
				<a class="logos" href="http://data.opendataportal.at" title="Datenkatalog OpenDataPortal Austria"></a>
				<h4>Datenkatalog</h4>
				<p><?php echo get_post_meta($post->ID, 'lp_datenkatalog', single); ?></p>
				<a href="https://data.opendataportal.at" title="Datenkatalog" class="weiterlesen">weiterlesen</a>
			</div>
			<div class="home-anwendungen text-center col-md-4">
				<a class="logos" href="<?php echo home_url() ?>/anwendungen" title="Anwendungen"></a>
				<h4>Anwendungen</h4>
				<p><?php echo get_post_meta($post->ID, 'lp_anwendungen', single); ?></p>
				<a href="<?php echo home_url() ?>/anwendungen" title="Anwendungen" class="weiterlesen">weiterlesen</a>
			</div>
			<div class="home-ueber-odp text-center col-md-4">
				<a class="logos" href="<?php echo home_url() ?>/ueber-odp" title="Über OpenDataPortal AT"></a>
				<h4>&#220;ber ODP</h4>
				<p><?php echo get_post_meta($post->ID, 'lp_ueber-odp', single); ?></p>
				<a href="<?php echo home_url() ?>/ueber-odp" title="&#220;ber ODP" class="weiterlesen">weiterlesen</a>
			</div>
		</div>
	</div>
</div>

<!-- THEMEN -->

<div class="wrapper-home-themen container-fluid row">
	<div class="home-themen container text-center">
		<h3><a href="<?php echo home_url() ?>/themen" title="Themen">Themen</a></h2>

		<a href="<?php echo home_url() ?>/themen/arbeit" title="Arbeit">
			<div class="logo-thema logo-arbeit">
				<h4>Arbeit</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/bevoelkerung" title="Bev&ouml;lkerung">
			<div class="logo-thema logo-bevoelkerung">
				<h4>Bev&ouml;lkerung</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/bildung-und-forschung" title="Bildung &amp; Forschung">
			<div class="logo-thema logo-bildung-und-forschung">
				<h4>Bildung &amp; Forschung</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/finanzen-und-rechnungswesen" title="Finanzen &amp; Rechnungswesen">
			<div class="logo-thema logo-finanzen-und-rechnungswesen">
				<h4>Finanzen &amp; Rechnungswesen</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/geographie-und-planung" title="Geographie &amp; Planung">
			<div class="logo-thema logo-geographie-und-planung">
				<h4>Geographie &amp; Planung</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/gesellschaft-und-soziales" title="Gesellschaft &amp; Soziales">
			<div class="logo-thema logo-gesellschaft-und-soziales">
				<h4>Gesellschaft &amp; Soziales</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/gesundheit" title="Gesundheit">
			<div class="logo-thema logo-gesundheit">
				<h4>Gesundheit</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/kunst-und-kultur" title="Kunst &amp; Kultur">
			<div class="logo-thema logo-kunst-und-kultur">
				<h4>Kunst &amp; Kultur</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/land-und-forstwirtschaft" title="Land- &amp; Forstwirtschaft">
			<div class="logo-thema logo-land-und-forstwirtschaft">
				<h4>Land- &amp; Forstwirtschaft</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/sport-und-freizeit" title="Sport &amp; Freizeit">
			<div class="logo-thema logo-sport-und-freizeit">
				<h4>Sport &amp; Freizeit</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/umwelt" title="Umwelt">
			<div class="logo-thema logo-umwelt">
				<h4>Umwelt</h3>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/verkehr-und-technik" title="Verkehr &amp; Technik">
			<div class="logo-thema logo-verkehr-und-technik">
				<h4>Verkehr &amp; Technik</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/verwaltung-und-politik" title="Verwaltung &amp; Politik">
			<div class="logo-thema logo-verwaltung-und-politik">
				<h4>Verwaltung &amp; Politik</h4>
			</div>
		</a>

		<a href="<?php echo home_url() ?>/themen/wirtschaft-und-tourismus" title="Wirtschaft &amp; Tourismus">
			<div class="logo-thema logo-wirtschaft-und-tourismus">
				<h4>Wirtschaft &amp; Tourismus</h4>
			</div>
		</a>
	</div>
</div>

<!-- NEWS PREVIEW -->

<div class="wrapper-home-news container-fluid row">
	<div class="home-news container">
		<h3 class="text-center"><a href="<?php echo home_url() ?>/news" title="News">News</a></h3>
		<?php $myQuery_News = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
		while ( $myQuery_News->have_posts() ) : $myQuery_News->the_post(); { ?>
			<div class="home-preview-news col-md-4" id="post-<?php echo $post->ID; ?>">
				<?php get_template_part('templates/content', 'landingpage-news-preview'); ?>
			</div>
		<?php } endwhile; // end of the loop. ?>
	</div>
</div>
