<?php
/**
 * Hope Animal Foundation Front-Page
 * @package hope_animal_foundation
 */
?>

	<main id="primary" class="site-main">

		<?php //Start Header Hero ?>
		<?php if( have_rows('layouts_home') ): ?>
			<?php while( have_rows('layouts_home') ): the_row(); ?>

				<?php if( get_row_layout() == 'full_page_hero' ): ?>

					<section id="post-<?php the_ID(); ?>" class="dynamic-full-page-hero" style="background-color:<?php the_sub_field('hero_background_color'); ?>" >

						<?php get_header(); ?>
				
					</section>

				<?php endif; ?>
			<?php endwhile; ?>
			
		<?php endif; ?>
		<?php //end Header Hero ?>

		<?php //Wordpress Loop if Needed 
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>
		<?php //Wordpress Loop End ?>

		</main>

<?php
get_footer();
