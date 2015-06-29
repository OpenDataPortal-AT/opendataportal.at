<?php
/*
Template Name: Themen
*/
?>


<div class="container">

	<div class="themen-content container">
		<?php while (have_posts()) : the_post(); { ?>
			<h2 class="text-center"><?php the_title(); ?></h2>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		<?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>

	<div class="themen-themen container text-center">

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
