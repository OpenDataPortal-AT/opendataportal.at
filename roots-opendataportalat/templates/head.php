<?php
/*
Head
*/
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <!-- 
  OpenDataPortal Österreich is a project of the Open Knowledge Foundation Austria, Wkimedia Austria 
  and the Cooperation OGD Austria - funded by NetIdee.

  The theme basis heavily on the roots.io theme and data.gov.
	
  Wordpress Theme is adapted by: 
  Stefan Kasberger, http://www.stefankasberger.at, http://twitter.com/stefankasberger
  Susan Härtig, Semantic Web Company, http://www.semantic-web.at
  Gernot Musil, Semantic Web Company, http://www.semantic-web.at

	This website is powered by Wordpress.
	Wordpress is a free open source Content Management System under GNU/GPL.
	Information and contribution at http://wordpress.org/
	-->

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" />
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-120.png" sizes="120x120" />
</head>
