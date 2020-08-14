<?php
/**
 * The template for displaying all hope pages
 * @package hope_animal_foundation
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>

	</main>


	<?php if( have_rows('full_page_hero') ): ?>
		<?php while( have_rows('full_page_hero') ): the_row(); ?>

		<section id="post-<?php the_ID(); ?>" class="dynamic-full-page-hero" style="background-color:<?php the_field('hero_background_color'); ?>" >

			<?php if( get_row_layout() == 'paragraph' ): ?>
				<?php the_sub_field('paragraph'); ?>
			<?php elseif( get_row_layout() == 'image' ): 
				$image = get_sub_field('image');
				?>
				<figure>
					<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
					<figcaption><?php echo $image['caption']; ?></figcaption>
				</figure>
			<?php endif; ?>

		</section>
		
		<?php endwhile; ?>
	<?php endif; ?>

<?php
get_footer();