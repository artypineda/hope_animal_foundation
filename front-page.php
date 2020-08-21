<?php
/**
 * Hope Animal Foundation Front-Page || non-moveable rows
 * @package hope_animal_foundation
 */
 
get_header();
?>

	<main id="primary" class="site-main">

		<?php // Full-Page Hero Component Goes Here
			require('template-custom/full-page-hero.php');
		?>
		
	</main>
	
	<?php // Three-Column with Text Component
		require('template-custom/three-columns-text.php');
	?>

	<?php // Two-Column iFrame Map with Info
		require('template-custom/two-columns-locations.php');
	?>

	<?php // CTA Version 1 - Title / Body / Button
		require('template-custom/cta-v1.php');
	?>
	
	<?php // CTA Donate Box
		require('template-custom/cta-donate.php');
	?>

<?php
get_footer();
