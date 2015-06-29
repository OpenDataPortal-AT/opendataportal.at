<?php
/*
Header
*/
?>

<header>
	<div class="banner navbar navbar-default navbar-static-top yamm" role="banner">
		<div class="container">
				<div class="header-row">  

						<div class="navbar-header col-sm-4">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="<?php echo home_url(); ?>/" alt="OpenDataPortal Österreich"><h1 class="navbar-brand"><?php bloginfo('name'); ?></h1></a>
								<a href="<?php echo home_url(); ?>/kontakt" alt="Beta"><img class="logo-beta" src="<?php echo get_template_directory_uri() ?>/assets/img/beta.png"></a><br>
								<span class="tagline"><i>All you can <span class="tagline-data">Data</i></span></span>
						</div>
	
						<div class="header-box-right col-sm-6 col-sm-offset-2">

							<div id="open-data-inside">
								<a href="http://www.opendatainside.com/mybadge/open-data-portal-oesterreich/">
								<img src="http://www.opendatainside.com/badge/open-data-portal-oesterreich/" width="100" height="100" alt="Open Data Inside" />
							</div>

							<div class="header-links">
								<a class="header-feedback" href="<?php echo home_url(); ?>/kontakt" title="Feedback">Feedback</a>
								<a class="header-mailinglist" href="https://intern.opendataportal.at/lists/listinfo/discuss" title="Mailingliste OpenDataPortal Österreich">Mailingliste</a>
								<a class="header-login" href="http://data.opendataportal.at/user/login" title="Registrieren und Login">Registrieren &amp; Login</a>
							</div>
							
							<div id="header-search" class="searchbox-row skip-navigation header-searchform" >
								<div class="sr-only skip-link">
										<a href="main">Springe zum Inhalt</a>
								</div>

								<?php if(!is_front_page()): ?>
									<?php get_template_part('templates/searchform'); ?>
								<?php endif; ?>  
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="wrapper-navbar-collapse container-fluid">
			<div class="container">
				<nav class="collapse navbar-collapse" role="navigation">    
					<?php
					if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-left', 'walker' => new Datagov_Nav_Walker));
					endif; ?>  
				</nav> 
			</div>
		</div>
	</div>

	<?php if(is_front_page()): ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="container-fluid">
				<div class="jumbotron text-center">
					<div class="container">
						
						<h2><?php echo get_post_meta($post->ID, 'lp_ueberschrift_inhalt', single); ?></h2>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>

					</div><!--/.container-->
				</div><!--/.jumbotron-->
			</div>
		<?php endwhile; ?>

		<div class="wrapper-frontpage-search container-fluid">
			<div class="header banner frontpage-search container">
				<div class="text-center getstarted">
					
					<h2>Datensuche</h2>
					<h4><label for="search-header">Leg los<br>
					<small>Über <?php echo get_post_meta($post->ID, 'lp_anzahl_datensets', single); ?> Datensätze durchsuchen</small>
					<br/><i class="fa fa-caret-down"></i></label></h4>
				
				</div>

				<?php get_template_part('templates/searchform', 'datenkatalog'); ?>

			</div>
		</div>

	<?php endif; ?>

	<?php if(!is_front_page()): ?>
		<div class="breadcrumbs container">
			<?php if(function_exists('bcn_display')) {
				bcn_display();
			}?>
		</div>
	<?php endif; ?>
</header>
