<?php
/**
 * Hope AF Header
 * @package hope_animal_foundation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hope_animal_foundation' ); ?></a>

	<div class="aboveHeaderMenu">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'depth'             => 1,
				'container'         => 'nav'
			));
		?>
	</div>
	
	<header id="masthead" class="site-header">
		<div class="head-centered">

			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$hope_animal_foundation_description = get_bloginfo( 'description', 'display' );
				if ( $hope_animal_foundation_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $hope_animal_foundation_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><?php // END .site-branding ?>

			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'hope_animal_foundation' ); ?></button> -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><?php // END #site-navigation ?>

		</div>
	</header><?php // END #masthead --> ?>
