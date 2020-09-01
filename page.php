<?php
/**
 * The template for displaying all hope pages
 * @package hope_animal_foundation
 */

get_header();
?>


	<main id="primary" class="site-main">

		<?php // Top-Page Hero Component and Content
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
		?>
	</main>
	
    <?php if( have_rows('layout_inside') ): ?>
		<?php while( have_rows('layout_inside') ): the_row(); ?>
                    
        	<?php
        	    require('template-custom/inner/full-page-hero.php');
	        	require('template-custom/inner/horizontal-image.php');
        	    require('template-custom/inner/three-columns-text.php');
        		require('template-custom/inner/two-columns-locations.php');
        	    require('template-custom/inner/two-columns-lists.php');
        	    require('template-custom/inner/two-columns-lists-2.php');
	        	require('template-custom/inner/cta-v1.php');
	        	require('template-custom/inner/cta-v2.php');
	        	require('template-custom/inner/cta-donate.php');
	        	require('template-custom/inner/button.php');
	        	require('template-custom/inner/button-banner.php');
	        	require('template-custom/inner/two-columns-combo-v1.php');
	        	require('template-custom/inner/two-columns-combo-v2.php');
	        	require('template-custom/inner/two-columns-pricing.php');
	        	require('template-custom/inner/pricing-packages.php');
	        	require('template-custom/inner/pricing-list.php');
	        	require('template-custom/inner/promotions-data.php');
	        	require('template-custom/inner/subscribe.php');
	        	require('template-custom/inner/contact.php');
	        	require('template-custom/inner/hours-of-operation.php');
	        	require('template-custom/inner/vet-staff.php');
	        	require('template-custom/inner/more-staff.php');
	        	require('template-custom/inner/employment.php');
				require('template-custom/inner/sponsors.php');
				require('template-custom/inner/margins.php');
        	    require('template-custom/inner/columns.php');
        	    require('template-custom/inner/columns2.php');
        	?>
        
		<?php endwhile; ?>
	<?php endif; ?>

	
<?php
get_footer();