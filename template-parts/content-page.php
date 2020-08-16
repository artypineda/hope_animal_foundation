<?php
/**
 * Template part for displaying page content in page.php
 * @package hope_animal_foundation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( !is_front_page() ) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><?php // END .entry-header ?>
		
		<?php hope_animal_foundation_post_thumbnail(); ?>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hope_animal_foundation' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><?php // END .entry-content ?>


</article><!-- #post-<?php the_ID(); ?> -->
