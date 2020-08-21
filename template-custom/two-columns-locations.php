<?php
    //Two-Columns Map and Location Component
?>
    <?php if( have_rows('layouts_one') ): ?>
		<?php while( have_rows('layouts_one') ): the_row(); ?>
            <?php if( get_row_layout() == 'two_columns_locations' ): ?>
		    
		    <section id="twoup-<?php the_ID(); ?>" class="two-up-locations">
               <div class="container-two-up col" style="background-color:<?php the_sub_field('background_color'); ?>">

                    <div class="col-map">
                        <div class="foreground-image">
                            <?php
            				$image = get_sub_field('image_on_map');
            				if( !empty( $image ) ): ?>
        					    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
    					    <?php endif; ?>
                        </div>
                        <div class="map-settings">
                         <?php echo the_sub_field('map'); ?>
                        </div>
				    </div>
					<div class="col-location" style="color:<?php the_sub_field('col3_color'); ?>">
					    <div class="inner ">
                            <?php the_sub_field('locations_entry'); ?>
                        </div>
                    </div>
                </div>
		    </section>
		    
			<?php endif; ?>
		<?php endwhile; ?>
			
	<?php endif; ?>
	<?php //end Two-Columns-Map-Locations?>