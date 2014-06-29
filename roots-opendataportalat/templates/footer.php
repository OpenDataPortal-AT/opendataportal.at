<?php
/*
Footer
*/
?>

<footer class="content-info" role="contentinfo">

	<div class="wrapper-footer-logos container-fluid row">
		<div class="footer-logos container">

			<div class="col-md-4 opd-mehropendata">
				<h2>Mehr Open Data:</h2>
					<a class="logo-datagvat" href="http://data.gv.at/" title="data.gv.at"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-datagv.png" alt="data.gv.at"></a>
					<a class="logo-wikidata" href="http://wikidata.org/" title="Wikidata"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wikidata.png" alt="Wikidata"></a>
			</div>
			
			<div class="col-md-8 odp-kooperation">
				<h2>ODP ist eine Kooperation von:</h2>
				<a class="logo-okfat" href="http://okfn.at/" title="Open Knowledge Foundation Österreich"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-okf.png" alt=""></a>
				<a class="logo-cooperation-ogd" href="http://www.data.gv.at/hintergrund-infos/cooperation-ogd-oesterreich/" title="Cooperation OGD Österreich"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-ogd.png" alt="Cooperation OGD Österreich"></a>
				<a class="logo-wikimedia" href="https://www.wikimedia.at/" title="Wikimedia Österreich"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wikimedia.png" alt="Wikimedia Österreich"></a>
			</div>
		
		</div>
	</div>

	<div class="wrapper-footer-content container">
		<div class="row">
			
			<div class="footer-sprachauswahl col-md-3">

				<nav class="sprachauswahl row" role="navigation">
					<h2>Sprachauswahl</h2>
					<select class="form-control form-sprachauswahl">
  						<option>Deutsch</option>
					</select>
				</nav>
				<!--
				<div class="footer-searchform row">
					<?php // get_template_part('templates/searchform', 'datenkatalog'); ?>
				</div>
				-->
			</div>

			<div class="footer-rss-feeds col-md-3">
				<h2>RSS Feeds</h2>
				<ul>
					<li><a href="http://data.dataportal.at/feeds/dataset.atom" title="RSS Feed Updates Datenkatalog">Updates Datenkatalog</a></li>
					<li><a href="<?php echo home_url(); ?>/feed/?post_type=anwendungen" title="RSS Feed Anwendungen">Anwendungen</a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed News">News</a></li>
				</ul>
			</div>

			<div class="footer-kontakt col-md-6 social-nav">
				<h2>Kontakt <a class="logo-twitter" href="https://twitter.com/odp_AT" title="Twitter odp_AT"></a><a class="logo-facebook" href="https://www.facebook.com/OpenDataPortalAT" title="Facebook odp_AT"></a></h2>
				<li class="icon-adresse"><span class="text-bold">Adresse: </span>Wikimedia Österreich, Siebensterngasse 25/15, 1070 Wien</li><br>
				<!--<li class="icon-telefon"><span class="text-bold">Telefon: </span></li><br> -->
				<li class="icon-email"><span class="text-bold">Email: </span><a class="footer-email" href="mailto:info@opendataportal.at ">info@opendataportal.at</a></li><br>
			</div>
		</div>

	<div class="footer-copyright-links row">
		<span class="footer-links">
			<a href="<?php echo home_url(); ?>/faqs" title="Frequently Asked Questions">FAQs</a> &#124; 
			<a href="<?php echo home_url(); ?>/impressum" title="Impressum">Impressum</a> &#124; 
			<a href="<?php echo home_url(); ?>/netiquette" title="Netiquette">Netiquette</a> &#124; 
			<a href="<?php echo home_url(); ?>/nutzungsbedingungen" title="Nutzungsbedingungen">Nutzungsbedingungen</a> &#124; 
			<a href="<?php echo home_url(); ?>/kontakt" title="Kontakt">Kontakt</a>
		</span>
	</div>

</footer>

<?php wp_footer(); ?>
