<?php
/*
Template Name: Erfolg Anwendungen einreichen 
Description: Template for successfull applications submission
*/
?>

<?php
$app_name = $_GET["app_name"];
$wordpress_id = $_GET["wordpress_id"];

?>

<div class="wrapper-anwendungen-success container-fluid row">
	<div class="anwendungen-success container">
		<?php while (have_posts()) : the_post(); { ?>
			<h2><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<div class="success-nachricht">
				<p>Ihre Anwendung mit dem Namen <?php echo $app_name; ?> und der ID <?php echo $wordpress_id; ?> wurde erfolgreich eingetragen. Das ODP-AT Team kontrolliert die Eintragen und wird diese dann, wenn alles korrekt ist, demnächst freigeben.</p>

				<p>Sobald die Anwendung freigegeben wird, erhalten sie automatisch ein Information darüber via Email</p>

				<p>Falls du Fragen hast, erfährst du unter <a href="<?php echo home_url() ?>/kontakt" title="Kontakt">Kontakt</a> mehr.</p>
			</div>
			
			<div class="weitere-anwendung-einreichen">
				<a href="<?php echo home_url() ?>/anwendung-einreichen" title="Weitere Anwendung einreichen">
					<button type="button" class="btn btn-primary button-anwendung-einreichen"><span class="icon-anwendung-einreichen">weitere Anwendung einreichen</span></button>
				</a>
			</div>

		<?php } endwhile; 
		wp_reset_postdata(); ?>
	</div>	
</div>


