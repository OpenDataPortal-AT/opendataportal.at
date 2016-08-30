<?php
/**
 * Custom functions
 */



/**
 * Register custom post type highlights
 */


add_action('init', 'cptui_register_my_cpt_highlights');

function cptui_register_my_cpt_highlights() {
	register_post_type('cpt_highlights', array(
		'label' => 'Highlights',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'highlights', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'taxonomies' => array('category','post_tag'),
		'labels' => array (
				'name' => 'Highlights',
				'singular_name' => 'Highlight',
				'menu_name' => 'Highlights',
				'add_new' => 'Erstellen',
				'add_new_item' => 'Neues Highlight erstellen',
				'edit' => 'Bearbeiten',
				'edit_item' => 'Bearbeite Highlight',
				'new_item' => 'Erstelle Highlight',
				'view' => 'Alle Highlights',
				'view_item' => 'Highlight',
				'search_items' => 'Suche Highlights',
				'not_found' => 'Keine Highlights gefunden',
				'not_found_in_trash' => 'Keine Highlights im Papierkorb gefunden',
				'parent' => 'Eltern Highlight',
			)
		) 
	); 
}


/**
 * Register custom post type anwendungen
 */


add_action('init', 'cptui_register_my_cpt_anwendungen');

function cptui_register_my_cpt_anwendungen() {
	register_post_type('cpt_anwendungen', array(
		'label' => 'Anwendungen',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'anwendungen', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
				'name' => 'Anwendungen',
				'singular_name' => 'Anwendung',
				'menu_name' => 'Anwendungen',
				'add_new' => 'Erstellen',
				'add_new_item' => 'Neue Anwendung erstellen',
				'edit' => 'Bearbeiten',
				'edit_item' => 'Bearbeite Anwendung',
				'new_item' => 'Erstelle Anwendung',
				'view' => 'Alle Anwendung',
				'view_item' => 'Anwendung',
				'search_items' => 'Suche Anwendungen',
				'not_found' => 'Keine Anwendungen gefunden',
				'not_found_in_trash' => 'Keine Anwendungen im Papierkorb gefunden',
				'parent' => 'Eltern Anwendung',
			)
		) 
	); 
}


/**
 * Register custom post type datentools
 */


add_action('init', 'cptui_register_my_cpt_datentools');
function cptui_register_my_cpt_datentools() {
	register_post_type('cpt_datentools', array(
		'label' => 'Datentools',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'datentools', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
				'name' => 'Datentools',
				'singular_name' => ' Datentool',
				'menu_name' => 'Datentools',
				'add_new' => 'Erstellen',
				'add_new_item' => 'Neues Datentool erstellen',
				'edit' => 'Bearbeiten',
				'edit_item' => 'Bearbeite Datentool',
				'new_item' => 'Erstelle Datentool',
				'view' => 'Alle Datentools',
				'view_item' => 'Datentool',
				'search_items' => 'Suche Datentools',
				'not_found' => 'Keine Datentools gefunden',
				'not_found_in_trash' => 'Keine Datentools im Papierkorb gefunden',
				'parent' => 'Eltern Datentool',
			)
		) 
	); 
}


/**
 * Register custom taxonomy themen for post, page, anwendungen, highlights and datentools
 */


add_action('init', 'cptui_register_my_taxes_themen');
function cptui_register_my_taxes_themen() {
	register_taxonomy( 'ct_themen',array (
		0 => 'post',
		1 => 'page',
		2 => 'cpt_anwendungen',
		3 => 'cpt_highlights',
		3 => 'cpt_datentools',
	),
	array( 'hierarchical' => false,
		'label' => 'Themen',
		'show_ui' => true,
		'query_var' => true,
		'show_admin_column' => false,
		'labels' => array (
			'search_items' => 'Thema',
			'popular_items' => '',
			'all_items' => '',
			'parent_item' => '',
			'parent_item_colon' => '',
			'edit_item' => '',
			'update_item' => '',
			'add_new_item' => '',
			'new_item_name' => '',
			'separate_items_with_commas' => '',
			'add_or_remove_items' => '',
			'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy betriebssysteme for anwendungen and datentools
 */


add_action('init', 'cptui_register_my_taxes_app_betriebssysteme');

function cptui_register_my_taxes_app_betriebssysteme() {
	register_taxonomy( 'app_betriebssysteme',
		array (
			0 => 'cpt_anwendungen',
		),
		array( 'hierarchical' => false,
			'label' => 'Betriebssysteme',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
  			'search_items' => 'Betriebssystem',
  			'popular_items' => '',
  			'all_items' => '',
  			'parent_item' => '',
  			'parent_item_colon' => '',
  			'edit_item' => '',
	  		'update_item' => '',
  			'add_new_item' => '',
  			'new_item_name' => '',
  			'separate_items_with_commas' => '',
	  		'add_or_remove_items' => '',
	  		'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy betriebssysteme for datentools
 */


add_action('init', 'cptui_register_my_taxes_tools_betriebssysteme');

function cptui_register_my_taxes_tools_betriebssysteme() {
	register_taxonomy( 'tools_betriebssysteme',
		array (
			1 => 'cpt_datentools',
		),
		array( 'hierarchical' => false,
			'label' => 'Betriebssysteme',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
  			'search_items' => 'Betriebssystem',
  			'popular_items' => '',
  			'all_items' => '',
  			'parent_item' => '',
  			'parent_item_colon' => '',
  			'edit_item' => '',
	  		'update_item' => '',
  			'add_new_item' => '',
  			'new_item_name' => '',
  			'separate_items_with_commas' => '',
	  		'add_or_remove_items' => '',
	  		'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy typ for anwendungen
 */


add_action('init', 'cptui_register_my_taxes_app_typ');

function cptui_register_my_taxes_app_typ() {
	register_taxonomy( 'app_typ',
		array (
			0 => 'cpt_anwendungen',
		),
		array( 'hierarchical' => false,
			'label' => 'Typ',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
  			'search_items' => 'Typ',
  			'popular_items' => '',
  			'all_items' => '',
  			'parent_item' => '',
  			'parent_item_colon' => '',
  			'edit_item' => '',
  			'update_item' => '',
  			'add_new_item' => '',
  			'new_item_name' => '',
  			'separate_items_with_commas' => '',
  			'add_or_remove_items' => '',
  			'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy typ for datentools
 */


add_action('init', 'cptui_register_my_taxes_tools_typ');

function cptui_register_my_taxes_tools_typ() {
	register_taxonomy( 'tools_typ',
		array (
			1 => 'cpt_datentools',
		),
		array( 'hierarchical' => false,
			'label' => 'Typ',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
  			'search_items' => 'Typ',
  			'popular_items' => '',
  			'all_items' => '',
  			'parent_item' => '',
  			'parent_item_colon' => '',
  			'edit_item' => '',
  			'update_item' => '',
  			'add_new_item' => '',
  			'new_item_name' => '',
  			'separate_items_with_commas' => '',
  			'add_or_remove_items' => '',
  			'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy funktionen for datentools
 */


add_action('init', 'cptui_register_my_taxes_tools_funktionen');

function cptui_register_my_taxes_tools_funktionen() {
	register_taxonomy( 'tools_funktionen',
		array (
			0 => 'cpt_datentools',
		),
		array( 'hierarchical' => false,
			'label' => 'Funktionen',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
  			'search_items' => 'Funktionen',
  			'popular_items' => '',
  			'all_items' => '',
  			'parent_item' => '',
  			'parent_item_colon' => '',
  			'edit_item' => '',
	  		'update_item' => '',
  			'add_new_item' => '',
  			'new_item_name' => '',
  			'separate_items_with_commas' => '',
	  		'add_or_remove_items' => '',
	  		'choose_from_most_used' => '',
			)
		) 
	); 
}


/**
 * Register custom taxonomy quelle for news
 */


add_action('init', 'cptui_register_my_taxes_quelle');
function cptui_register_my_taxes_quelle() {
	register_taxonomy( 'quelle',array (
		0 => 'post',
	),
	array( 'hierarchical' => false,
		'label' => 'Quelle',
		'show_ui' => false,
		'query_var' => true,
		'show_admin_column' => false,
		'labels' => array (
		  'search_items' => 'Quelle',
  		'popular_items' => '',
  		'all_items' => '',
  		'parent_item' => '',
  		'parent_item_colon' => '',
  		'edit_item' => '',
  		'update_item' => '',
  		'add_new_item' => '',
  		'new_item_name' => '',
  		'separate_items_with_commas' => '',
  		'add_or_remove_items' => '',
  		'choose_from_most_used' => '',
		)
	) 
); 
}


/**
 * Prints links for syndication newsfeed sources and returns source
 */


function get_newssource() {

	$feed = get_post_meta(get_the_ID(), 'syndication_source_uri', single); 

	switch ($feed) {

			case "http://okfn.at":
					$str = '<a href="http://okfn.at" title="Open Knowledge Foundation Österreich">OKF-AT</a>';
					$source = 'okf-at';
					break;

			case "":
					$str = 'ODP';
					$source = 'odp';
					break;

			case "https://www.data.gv.at":
					$str = '<a href="http://data.gv.at" title="data.gv.at">data.gv.at</a>';
					$source = 'data-gv';
					break;

			case "https://www.open3.at":
					$str = '<a href="https://www.open3.at" title="open3.at">open3</a>';
					$source = 'open3';
					break;

			case "https://www.wikimedia.at/taxonomy/term/26/feed":
					$str = '<a href="http://wikimedia.at" title="Wikimedia">Wikimedia</a>';
					$source = 'wikimedia';
					break;
	}

	echo $str;
	return $source;

}/**
 * Prints links for syndication newsfeed sources and returns source
 */


function get_newssource_sidebar() {

	$feed = get_post_meta(get_the_ID(), 'syndication_source_uri', single); 

	switch ($feed) {

			case "http://okfn.at":
					$str = '<a href="http://okfn.at" title="Open Knowledge Foundation Österreich">Open Knowledge Foundation AT</a>';
					$source = 'okf-at';
					break;

			case "":
					$str = 'opendataportal.at';
					$source = 'odp';
					break;

			case "https://data.gv.at":
					$str = '<a href="http://data.gv.at" title="data.gv.at">data.gv.at</a>';
					$source = 'data-gv';
					break;

			case "https://www.open3.at":
					$str = '<a href="https://www.open3.at" title="open3.at">open3.at</a>';
					$source = 'open3';
					break;

			case "https://www.wikimedia.at/taxonomy/term/26/feed":
					$str = '<a href="http://wikimedia.at" title="Wikimedia Österreich">Wikimedia AT</a>';
					$source = 'wikimedia';
					break;
	}
	echo $str;
	return $source;
}


/**
 * Prints themen with icons for preview
 */


function get_themen_preview( $name = false ) {

	$themen_list = wp_get_post_terms(get_the_ID(), 'ct_themen', array("fields" => "all"));
	$thema_name = '';

	if(count($themen_list) == 0 || $themen_list == NULL) {
		echo '<span class="text-bold">Kein Thema</span>';
	} else {
		if(count($themen_list) == 1) {
			echo '<span class="text-bold">Thema: </span>';	
		}
		if(count($themen_list) > 1) {
			echo '<span class="text-bold">Themen: </span>';
		}
		foreach ($themen_list as $thema) {
			if( $name ) {
				$thema_name = $thema->name;
			}
			echo '<a class="icon-thema" href="' . home_url() . '/themen/' . $thema->slug . '" title="' . esc_attr($thema->name) . '"><img src="' . get_template_directory_uri() . '/assets/img/' . $thema->slug . '_small.png" alt="' . esc_attr($thema->name) . '">' . esc_attr($thema_name) . '</a>';
		}
	}
}


/**
 * Prints icons of themen for preview on landing page
 */


function get_themen_preview_landingpage() {

	$themen_list = wp_get_post_terms(get_the_ID(), 'ct_themen', array("fields" => "all"));

	if($themen_list) {
		foreach ($themen_list as $thema) {
			echo '<a class="icon-thema" href="' . home_url() . '/themen/' . $thema->slug . '" title="' . $thema->name . '"><img src="' . get_template_directory_uri() . '/assets/img/' . $thema->slug . '_small.png" alt="' . $thema->name . '"></a>';
		}
		echo "</span>&#44;&#32;";
	}
}


/**
 * Prints number of tags with icon and text
 */


function print_tags() {

	$num_tags = count(get_the_tags());

	echo '<img src="' . get_template_directory_uri() . '/assets/img/tag.png"><span class="num-tags">' . $num_tags . '</span> ';

	if($num_tags == 0 || $num_tags > 1) {
		echo 'Tags';
	} else {
		echo 'Tag';
	}
}


/**
 * Prints themen with icons for datentools or anwendungen sidebar
 */


function get_themen_sidebar() {

	$themen_list = wp_get_post_terms(get_the_ID(), 'ct_themen', array("fields" => "all"));

	if(count($themen_list) == 0 || $themen_list == NULL) {
		
		echo 'Kein Thema';

	} else {
	
		foreach ($themen_list as $thema) {
			
			echo '<span><a class="icon-thema" href="' . home_url() . '/' . $thema->slug . '" title="' . esc_attr($thema->name) . '"><img src="' . get_template_directory_uri() . '/assets/img/' . $thema->slug . '_small.png" alt="' . esc_attr($thema->name) . '">' . esc_attr($thema->name) . '</a></span><br>';
		}
	
	}
}


/**
 * Prints typ for datentools or anwendungen sidebar
 */


function get_typ_sidebar($taxonomy) {

	$typ_list = wp_get_post_terms(get_the_ID(), $taxonomy, array("fields" => "all"));

	if(count($typ_list) == 0 || $typ_list == NULL) {
		
		echo 'Kein Typ';

	} else {
	
		foreach ($typ_list as $typ) {
			echo '<span class="typ-' . $typ->slug . '">' . esc_attr($typ->name) . '</span><br>';
		}
	
	}
}


/**
 * prints out operating systems with icons for the anwendungen or datentools preview
 */


function get_betriebssysteme_preview($taxonomy) {
	$os_list = wp_get_post_terms(get_the_ID(), $taxonomy, array("fields" => "all"));

	if(count($os_list) == 0 || $os_list == NULL) {
		
		echo '<p><i>Kein Thema</i></p>';

	} else {
	
		foreach ($os_list as $os) {
			echo '<p class="icon-betriebssystem icon-' . esc_attr($os->slug) . '"></p>';
		}
	}
}


/**
 * prints out operating systems with icons for the anwendungen or datentools single post sidebar
 */


function get_betriebssysteme_sidebar($taxonomy) {
	$os_list = wp_get_post_terms(get_the_ID(), $taxonomy, array("fields" => "all"));

	if(count($os_list) == 0 || $os_list == NULL) {
		
		echo '<span><i>Kein Thema</i></span>';

	} else {
		foreach ($os_list as $os) {
			echo '<li class="icon-betriebssystem icon-' . $os->slug . '"><span>' . esc_attr($os->name) . '</span></li>';
		}
	}
}


/**
 * prints out websites with links for the anwendungen or datentools single post sidebar
 */


function get_websites_sidebar($typ) {
	$pid = get_the_ID();

	if($typ == 'tool' && get_post_meta($pid, $typ . '_website', single) && get_post_meta($pid, $typ . '_text_website', single)) {
		echo '<a class="icon-link" href="' . get_post_meta($pid, 'tool_website', single) . '" title="' . get_post_meta($pid, 'tool_text_website', single) . '">' . get_post_meta($pid, 'tool_text_website', single) . '</a><br>';		
	}
	if ($typ == 'app') {
		if( get_post_meta($pid, $typ . '_website_1', single) && get_post_meta($pid, $typ . '_text_website_1', single) ) {
			echo '<a class="icon-link" href="' . get_post_meta($pid, $typ . '_website_1', single) . '" title="' . get_post_meta($pid, $typ . '_text_website_1', single) . '">' . get_post_meta($pid, $typ . '_text_website_1', single) . '</a><br>';
		}
		if( get_post_meta($pid, $typ . '_website_2', single) && get_post_meta($pid, $typ . '_text_website_2', single) ) {
			echo '<a class="icon-link" href="' . get_post_meta($pid, $typ . '_website_2', single) . '" title="' . get_post_meta($pid, $typ . '_text_website_2', single) . '">' . get_post_meta($pid, $typ . '_text_website_2', single) . '</a><br>';	
		}
		if( get_post_meta($pid, $typ . '_website_3', single) && get_post_meta($pid, $typ . '_text_website_3', single) ) {
			echo '<a class="icon-link" href="' . get_post_meta($pid, $typ . '_website_3', single) . '" title="' . get_post_meta($pid, $typ . '_text_website_3', single) . '">' . get_post_meta($pid, $typ . '_text_website_3', single) . '</a>';	
		}	
	}
}

function get_website_organisation($taxonomy) {

	$url = get_post_meta( get_the_ID(), $taxonomy . '_website_organisation', single);
	$name = get_post_meta( get_the_ID(), $taxonomy . '_name_organisation', single);
	
	if($url && $name) {
		echo '<a class="icon-globe" href="' . $url . '" title="Website ' . $name . '">' . $name . '</a>';
	}
}

function get_datasources_sidebar() {
	$text = get_post_meta( get_the_ID(), 'app_verwendete_datensaetze', single);
	$rows = explode("\n", $text);
	foreach ($rows as $row) {
		$row = explode(',', $row);
		echo '<a href="' . trim($row[0]) . '"" title="' . trim($row[1]) . '">' . trim($row[1]) . '</a><br>';
	}
}

function get_name_submitter($taxonomy) {
	$name = get_post_meta( get_the_ID(), $taxonomy . '_name_einreicherin', single);
	$website = get_post_meta( get_the_ID(), $taxonomy . '_website_einreicherin', single);
	
	if($website) {
		echo '<a class="name-submitter" href="' . $website . '" title="Website ' . $name . '">' . $name . '</a><br>';
	} else {
		echo '<span>' . $name . '</span>';
	}	
}

function get_tags_sidebar() {
	$tags = get_the_tags();

	if($tags) {
		foreach ($tags as $tag) {
		echo '<a href="' . get_tag_link($tag->term_id) . '" title="' . $tag->name . '"><button class="btn-tags btn">' . $tag->name . '</button></a>';
		}
	}
}

function get_cats_sidebar($postID) {
	$cats = wp_get_post_categories($postID);

	if($cats) {
		foreach ($cats as $cat) {
		echo '<a href="' . get_category_link($cat) . '" title="' . get_cat_name($cat) . '"><button class="btn-tags btn">' . get_cat_name($cat) . '</button></a>';
		}
	}
}

/**
 * Create anwendungen post from anwendungen submission formular before sending mail 
 */


add_action("wpcf7_before_send_mail", "wpcf7_create_anwendung");

function wpcf7_create_anwendung(&$wpcf7_data) {

	include 'vars.php';

	if ( $wpcf7_data->id == $app_form_id ) {

		// add form input to $new_post array
		$new_post = array(
			'post_title'  => $wpcf7_data->posted_data['app_name'],
			'post_content'  => $wpcf7_data->posted_data['app_beschreibung'],
			'post_status' =>  'pending',          
			'post_type' =>  'cpt_anwendungen'
		);

		// save the post, returns post id
		$pid = wp_insert_post($new_post);

		// save taxonomy themen
		$list_themen = $wpcf7_data->posted_data['app_themen'];
		wp_set_post_terms( $pid, $list_themen, 'themen' );

		// save taxonomy betriebssysteme 
		$list_os = $wpcf7_data->posted_data['app_betriebssysteme'];
		wp_set_post_terms( $pid, $list_os, 'app_betriebssysteme' );

		// save taxonomy typ 
		$list_art = $wpcf7_data->posted_data['app_typ'];
		wp_set_post_terms( $pid, $list_art, 'app_typ' );

		// add custon fields from form
		add_post_meta($pid, 'app_name', $wpcf7_data->posted_data['app_name']);
		add_post_meta($pid, 'app_beschreibung', $wpcf7_data->posted_data['app_beschreibung']);
		add_post_meta($pid, 'app_verwendete_datensaetze', $wpcf7_data->posted_data['app_verwendete_datensaetze']); 
		add_post_meta($pid, 'app_bild_url', $wpcf7_data->posted_data['app_bild_url']); 
		add_post_meta($pid, 'app_website_1', $wpcf7_data->posted_data['app_website_1']); 
		add_post_meta($pid, 'app_text_website_1', $wpcf7_data->posted_data['app_text_website_1']); 
		add_post_meta($pid, 'app_website_2', $wpcf7_data->posted_data['app_website_2']); 
		add_post_meta($pid, 'app_text_website_2', $wpcf7_data->posted_data['app_text_website_2']); 
		add_post_meta($pid, 'app_website_3', $wpcf7_data->posted_data['app_website_3']); 
		add_post_meta($pid, 'app_text_website_3', $wpcf7_data->posted_data['app_text_website_3']); 
		add_post_meta($pid, 'app_name_einreicherin', $wpcf7_data->posted_data['app_name_einreicherin']); 
		add_post_meta($pid, 'app_email_einreicherin', $wpcf7_data->posted_data['app_email_einreicherin']); 
		add_post_meta($pid, 'app_website_einreicherin', $wpcf7_data->posted_data['app_website_einreicherin']); 
		add_post_meta($pid, 'app_name_organisation', $wpcf7_data->posted_data['app_name_organisation']); 
		add_post_meta($pid, 'app_website_organisation', $wpcf7_data->posted_data['app_website_organisation']); 
		add_post_meta($pid, 'app_bemerkung_einreicherin', $wpcf7_data->posted_data['app_bemerkung_einreicherin']); 
		add_post_meta($pid, 'app_ckan_user_key', $wpcf7_data->posted_data['app_ckan_user_key']);

		// add submission date
		add_post_meta($pid, 'app_einreichdatum', date('d.m.Y'));  // date format must be dd.mm.yy

		// add image to post
		/*

		http://codex.wordpress.org/Function_Reference/wp_insert_attachment
		http://codex.wordpress.org/Function_Reference/media_handle_upload
		http://codex.wordpress.org/Function_Reference/wp_update_attachment_metadata
		http://codex.wordpress.org/Function_Reference/wp_generate_attachment_metadata
		http://codex.wordpress.org/Function_Reference/get_attached_file
		http://wordpress.stackexchange.com/questions/12339/getting-path-to-uploaded-attachment-image-after-upload
		http://voodoopress.com/review-of-posting-from-front-end-form/

		if ($_FILES) {
			foreach ( $_FILES as $file ) {

				//$attachment_id = wp_insert_attachment( $file, $pid );
				//print_r( get_attached_file( $attachment_id ) );

				//echo $file['name']; // filename funkt nur wenn key in foreach gelöscht wird
				//$file->tmp_name; // path funkt nur wenn key in foreach gelöscht wird
				//print_r($file);

				$uploads = wp_upload_dir();
				$basedir = $uploads['baseurl'] . '/wpcf7_uploads/' . $file['name'];
				echo $basedir;

				print_r(wp_upload_dir('basedir'));
				$newupload = wp_insert_attachment($file, $pid);
				print_r($newupload);

				// $attach_data = wp_generate_attachment_metadata( $attach_id, get_attached_file( $attachment_id ) );
				// wp_update_attachment_metadata( $attach_id, $attach_data );

			}
		}
		*/

		// redirect after all worked properly
		//wp_redirect( get_template_directory_uri() . '/template-formular-eingereicht.php?app_name=' . $wpcf7_data->posted_data['app_name'] . '&wordpress_id=' . $pid );

	} // end of if statement 

	// post the post
	do_action('wp_insert_post', 'wp_insert_post');
}


/**
 * Create datentool post from datentool submission formular before sending mail 
 */


add_action("wpcf7_before_send_mail", "wpcf7_create_datentool");

function wpcf7_create_datentool(&$wpcf7_data) {

	include 'vars.php';

	if ( $wpcf7_data->id == $tool_form_id ) {

		// add form input to $new_post array
		$new_post = array(
			'post_title'  => $wpcf7_data->posted_data['tool_name'],
			'post_content'  => $wpcf7_data->posted_data['tool_beschreibung'],
			'post_status' =>  'pending',          
			'post_type' =>  'cpt_datentools'
		);

		// save the post, returns post id
		$pid = wp_insert_post($new_post);

		// save taxonomy themen
		$list_themen = $wpcf7_data->posted_data['tool_themen'];
		wp_set_post_terms( $pid, $list_themen, 'themen' );

		// save taxonomy funktionen
		$list_funktionen = $wpcf7_data->posted_data['tool_funktionen'];
		wp_set_post_terms( $pid, $list_funktionen, 'tools_funktionen' );

		// save taxonomy betriebssysteme 
		$list_os = $wpcf7_data->posted_data['tool_betriebssysteme'];
		wp_set_post_terms( $pid, $list_os, 'tools_betriebssysteme' );

		// save taxonomy typ 
		$list_typ = $wpcf7_data->posted_data['tool_typ'];
		wp_set_post_terms( $pid, $list_typ, 'tools_typ' );

		// add custon fields from form
		add_post_meta($pid, 'tool_name', $wpcf7_data->posted_data['tool_name']);
		add_post_meta($pid, 'tool_beschreibung', $wpcf7_data->posted_data['tool_beschreibung']);
		add_post_meta($pid, 'tool_bild_url', $wpcf7_data->posted_data['tool_bild_url']);
		add_post_meta($pid, 'tool_website', $wpcf7_data->posted_data['tool_website']); 
		add_post_meta($pid, 'tool_text_website', $wpcf7_data->posted_data['tool_text_website']); 
		add_post_meta($pid, 'tool_name_einreicherin', $wpcf7_data->posted_data['tool_name_einreicherin']); 
		add_post_meta($pid, 'tool_email_einreicherin', $wpcf7_data->posted_data['tool_email_einreicherin']); 
		add_post_meta($pid, 'tool_website_einreicherin', $wpcf7_data->posted_data['tool_website_einreicherin']); 
		add_post_meta($pid, 'tool_name_organisation', $wpcf7_data->posted_data['tool_name_organisation']); 
		add_post_meta($pid, 'tool_website_organisation', $wpcf7_data->posted_data['tool_website_organisation']); 
		add_post_meta($pid, 'tool_bemerkung_einreicherin', $wpcf7_data->posted_data['tool_bemerkung_einreicherin']); 
		add_post_meta($pid, 'tool_ckan_user_key', $wpcf7_data->posted_data['tool_ckan_user_key']);

		// add submission date
		add_post_meta($pid, 'tool_einreichdatum', date('d.m.Y'));  // date format must be dd.mm.yy
		// add image to post
		/*

		http://codex.wordpress.org/Function_Reference/wp_insert_attachment
		http://codex.wordpress.org/Function_Reference/media_handle_upload
		http://codex.wordpress.org/Function_Reference/wp_update_attachment_metadata
		http://codex.wordpress.org/Function_Reference/wp_generate_attachment_metadata
		http://codex.wordpress.org/Function_Reference/get_attached_file
		http://wordpress.stackexchange.com/questions/12339/getting-path-to-uploaded-attachment-image-after-upload
		http://voodoopress.com/review-of-posting-from-front-end-form/

		if ($_FILES) {
			foreach ( $_FILES as $file ) {

				//$attachment_id = wp_insert_attachment( $file, $pid );
				//print_r( get_attached_file( $attachment_id ) );

				//echo $file['name']; // filename funkt nur wenn key in foreach gelöscht wird
				//$file->tmp_name; // path funkt nur wenn key in foreach gelöscht wird
				//print_r($file);

				$uploads = wp_upload_dir();
				$basedir = $uploads['baseurl'] . '/wpcf7_uploads/' . $file['name'];
				echo $basedir;

				print_r(wp_upload_dir('basedir'));
				$newupload = wp_insert_attachment($file, $pid);
				print_r($newupload);

				// $attach_data = wp_generate_attachment_metadata( $attach_id, get_attached_file( $attachment_id ) );
				// wp_update_attachment_metadata( $attach_id, $attach_data );

			}
		}
		*/

		// redirect after all worked properly
		//wp_redirect( get_template_directory_uri() . '/template-formular-eingereicht.php?tool_name=' . $wpcf7_data->posted_data['tool_name'] . '&wordpress_id=' . $pid );

	} // end of if statement 

	// post the post
	do_action('wp_insert_post', 'wp_insert_post');
}


/**
 * write to CKAN API when publishing a custom post type anwendungen
 */


//add_action('save_post', 'write_app2ckan');		// einzige hook die funkt !!!
// add_action('publish_post', 'write_app2ckan');		
// add_action('publish_anwendungen', 'write_app2ckan');		
// add_action('new_to_publish_anwendungen', 'write_app2ckan');		
// add_action('draft_to_publish_anwendungen', 'write_app2ckan');		
// add_action('pending_to_publish_anwendungen', 'write_app2ckan');
// add_action('new_to_publish', 'write_app2ckan');		
// add_action('draft_to_publish', 'write_app2ckan');		
// add_action('pending_to_publish', 'write_app2ckan');

function write_app2ckan() {
	
	$pid = get_the_ID();

	include 'vars.php';

	$i = 0;

	$app_name = get_post_meta($pid, 'app_name', single);

	// get permalink
	$wordpress_url = get_permalink( $pid );

	
	// get themen
	$themen_list = wp_get_post_terms( $pid, 'themen', array("fields" => "all"));
	$themen = '';

	if( count($themen_list) > 0 ) {
		foreach ($themen_list as $thema) {
			$themen = $themen . $thema->name . ', ';
		}
	}

	// split datasets in array
	$datasets = get_post_meta($pid, 'app_verwendete_datensaetze', single);
	$ids = explode("\r", $datasets);

	// get ckan user id
	if( get_post_meta($pid, 'app_ckan_owner_id', single) ) {
		$ckan_user_api_key = get_post_meta( $pid, 'app_ckan_owner_id', single);
	}
	$header = 'Authorization:' . $ckan_user_api_key;
	$app_id = get_post_meta($pid, 'app_ckan_app_id', single);

	// set up curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 45);

	// create app in ckan if no ckan app id exists
	if( $app_id == false || $app_id == NULL ) {

		$api_url = 'http://data.opendataportal.at/api/3/action/related_create';
		$app_description = 'Typ: Anwendung, Wordpress ID: ' . $pid . ', Themen: ' . $themen;
		$data = '{"title":"' . $app_name . '", "type":"application", "description":"' . $app_description . '", "dataset_id":"' . $ids[0] . '", "url":"' . $wordpress_url . '"}';
			
		curl_setopt($ch, CURLOPT_URL, $api_url );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);

		$json_php = json_decode( $result, true );
		update_post_meta( $pid, 'app_notiz_intern', $result);
				
		update_post_meta( $pid, 'app_ckan_api_call_result', $result);
		update_post_meta( $pid, 'app_ckan_app_id', $json_php['result']['id']);
		update_post_meta( $pid, 'app_ckan_owner_id', $json_php['result']['owner_id']);

	} else {

		$api_url = 'http://data.opendataportal.at/api/3/action/related_update';
		$app_description = 'Typ: Anwendung, Wordpress ID: ' . $pid . ', Themen: ' . $themen;
		$data = '{"id":"' . $app_id . '", "title":"' . $app_name . '", "type":"application", "description":"' . $app_description . '", "dataset_id":"' . $id . '", "url":"' . $wordpress_url . '"}';

		curl_setopt($ch, CURLOPT_URL, $api_url );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);

		update_post_meta( $pid, 'app_ckan_api_call_result', $result);

	}

	curl_close($ch);

}


/**
 * adding and saving custom user fields: ckan api key of user
 */


add_action( 'show_user_profile', 'add_profile_fields' );
add_action( 'edit_user_profile', 'add_profile_fields' );

function add_profile_fields( $user ) { ?>

	<h3>OpenDataPortal Austria</h3>

	<table class="form-table">
		<tr>
			<th><label for="ckan-api-key">CKAN API Key</label></th>
			<td>
				<input type="text" name="ckan-api-key" id="ckan-api-key" value="<?php echo esc_attr( get_the_author_meta( 'ckan-api-key', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Hier den CKAN API Key eingeben, falls vorhanden.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'save_profile_fields' );
add_action( 'edit_user_profile_update', 'save_profile_fields' );

function save_profile_fields( $user_id ) {

//	if ( !current_user_can( 'edit_user', $user_id ) )
	//	return false;

	update_user_meta( $user_id, 'ckan-api-key', $_POST['ckan-api-key'] );
}


/**
 * Ultimate WP Query Search Filter hook for ajax call
 */


add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);

function customize_output($results , $arg, $id, $getdata ){
	// The Query
	$apiclass = new uwpqsfprocess();
	$query = new WP_Query( $arg );
	ob_start();    
	$result = '';
	
	// Filter ID´s used in 'Anwendungen'
	$anwendungen_search_filters = '771';
	$anwendungen_text_search = '770';
	
	// Filter ID´s used in 'Datatools'
	$datatools_search_filters = '773';
	$datatools_text_search = '772';
	
	// Filter ID´s used in 'News'
	$news_search_filters = '769';
	$news_text_search = '768';


	// The Loop
	if ( $query->have_posts() ) {

		if($id == $anwendungen_text_search || $id == $anwendungen_search_filters){
			if ($query->found_posts == 1) {
				echo "<script type=\"text/javascript\">$(document).ready(function(){ $('.num-posts-area').html(' Anwendung '); })</script>";
			} else {
				echo "<script type=\"text/javascript\">$(document).ready(function(){ $('.num-posts-area').html(' Anwendungen '); })</script>";
			}
		}
		
		if($id == $datatools_text_search || $id == $datatools_search_filters){
			if ($query->found_posts == 1) {
				echo "<script type=\"text/javascript\">$(document).ready(function(){ $('.num-posts-area').html(' Datentool '); })</script>";
			} else {
				echo "<script type=\"text/javascript\">$(document).ready(function(){ $('.num-posts-area').html(' Datentools '); })</script>";
			}
		}

		if($id == $news_text_search || $id == $news_search_filters){
			echo "<script type=\"text/javascript\">$(document).ready(function(){ $('.num-posts-area').html(' News - Artikel '); })</script>";
		}

		echo "<div class=\"sentence-num-posts ajax-call\"><span class=\"num-posts\">" . $query->found_posts . "</span><span class=\"num-posts-area\"></span> gefunden.</div>";
		
		while ( $query->have_posts() ) {
			$query->the_post();

			// Custom Filter View for Area 'Anwendungen'
			if($id == $anwendungen_text_search || $id == $anwendungen_search_filters){
				echo "<div class=\"anwendungen-preview row\">";
          get_template_part('templates/content', 'anwendung-preview');
        echo "</div>";
			}
			
			// Custom Filter View for Area 'Datatools'
			if($id == $datatools_text_search || $id == $datatools_search_filters){
				echo "<div class=\"datentools-preview row\">";
          get_template_part('templates/content', 'datentool-preview');
        echo "</div>";
			}
			
			// Custom Filter View for Area 'News'
			if($id == $news_text_search || $id == $news_search_filters){
				echo "<div class=\"preview-news\">";
				get_template_part('templates/content', 'news');
				echo "</div>";
			}
		}        
		echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id, $getdata);
	} else {
		echo "<div class=\"alert alert-warning\">Es tut uns leid aber es wurden keine Ergebnisse gefunden.</div>";
	}
	
	/* Restore original Post Data */
	wp_reset_postdata();
	$results = ob_get_clean();        
	return $results;
}


/**
 * Change read more text to no text
 */

function new_excerpt_more( $more ) {
	if( is_page_template('anwendungen') ) {
		return 'weiterlesen';
	} else {
		return '';	
	}
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Scheduled daily event to update number of datasets in landing page
 */


add_action( 'wp', 'prefix_setup_schedule' );
/**
 * On an early action hook, check if the hook is scheduled - if not, schedule it.
 */
function prefix_setup_schedule() {
	if ( ! wp_next_scheduled( 'prefix_daily_event' ) ) {
		wp_schedule_event( time(), 'daily', 'prefix_daily_event');
	}
}

add_action( 'prefix_daily_event', 'prefix_do_this_daily' );

function prefix_do_this_daily() {
	
	$response = file_get_contents( 'http://data.opendataportal.at/api/2/rest/dataset' );
	$json_php = json_decode( $response, true );
	$num_datasets = count( $json_php );

	$post = get_page_by_title( 'Landing Page' );
	print_r( $post );
	echo $post->ID;

	update_post_meta($post->ID, 'lp_anzahl_datensets', $num_datasets);

}

