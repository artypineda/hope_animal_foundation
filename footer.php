<?php
/**
 * The template for displaying the hope footer
 * @package hope_animal_foundation
 */

?>

	<footer id="colophon" class="site-footer">
		<?php //printf( esc_html__( 'Design and Development: %1$s'), '<a href="http://wearejsa.com/">WE ARE JSA</a>' ); ?>

		<div class="footer-contain">

			<div class="footer-logo">
		        <img class="custom-logo" src="<?php bloginfo('template_url'); ?>/src/hope-animal-foundation-logo.svg" alt="Hope Animal Foundation">
			</div>	
			
			<div class="services">
				<h2>Services</h2>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'depth'             => 1,
					'container'         => 'nav'
				));
				?>
			</div>
			
			<div class="contact">
			    <ul>
				<?php if ( is_active_sidebar( 'footer-details' ) ) : ?>
					<?php dynamic_sidebar( 'footer-details' ); ?>
				<?php endif; ?>
				</ul>
			</div>

			
			<div class="support-us">
				<h2>Support Us</h2>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-4',
					'depth'             => 1,
					'container'         => 'nav'
				));
				?>
			</div>

		</div><?php // End .site-info ?>
	</footer><?php // End #colophon ?>

</div><?php // End #page ?>

<?php wp_footer(); ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177651750-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177651750-1');
</script>


</body>
</html>



