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

	<?php  //Home Page Only
		if( have_rows('layouts_one') ): ?>
    	<?php while( have_rows('layouts_one') ): the_row(); ?>
            <?php if( get_row_layout() == 'full_page_hero' ): ?>
	
        	<header id="masthead" class="site-header" style="background-color:<?php the_sub_field('hero_background_color'); ?>">
	    
            <?php endif; ?>
        <?php endwhile; ?>

	<?php else : // fallback ?>
		<header id="masthead" class="site-header">
	<?php endif; ?>
	
	
	<div class="aboveHeaderMenu">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'depth'             => 1,
				'container'         => 'nav'
			));
		?>
	</div>
    	
	<div class="head-centered">

		<div class="site-branding">
			<?php
			if ( is_front_page() ) :
    			the_custom_logo();
				?>
				<h1 class="site-title">
				    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			    </h1>
				<?php
			else : 
                ?>
			    <a class="custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-current="page">
    		        <img class="custom-logo" src="<?php bloginfo('template_url'); ?>/src/hope-animal-foundation-logo-blue-01.svg">
		        </a>
				<?php
			endif;
			$hope_animal_foundation_description = get_bloginfo( 'description', 'display' );
			if ( $hope_animal_foundation_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hope_animal_foundation_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><?php // END .site-branding ?>
    
    		<nav id="site-navigation" class="main-navigation">
    			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'hope_animal_foundation' ); ?></button>-->
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
    		
    	<div class="head-mobile">
			<?php if ( is_front_page() ) : ?>
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    			<?php the_custom_logo(); ?>
			</a>
			<?php else : ?>
			    <a class="custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-current="page">
    		        <img class="custom-logo" src="<?php bloginfo('template_url'); ?>/src/hope-animal-foundation-logo-blue-01.svg">
		        </a>
			<?php endif; ?>
			
			<?php //mobile version ?>
			<div class="mobile">
					<input id="burger" type="checkbox"/>

					<label for="burger" role>
						<span></span>
						<span></span>
						<span></span>
					</label>

					<nav class="mobile-menu" role="navigation"  aria-label="<?php _e( 'Navigation', 'hope_animal_foundation' ); ?>">    
						<?php
						if ( has_nav_menu( 'menu-1' ) ) {
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu-mobile',
									'items_wrap'     => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
								)
							);
						}
						?>
					</nav>

				</div>
			<?php //endMobile ?>
			
    	</div>
    		
	</header><?php // END #masthead --> ?>
