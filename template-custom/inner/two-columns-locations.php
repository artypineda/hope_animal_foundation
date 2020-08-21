<?php
    //Two-Columns Map and Location Component
    if( get_row_layout() == 'two_columns_locations' ):
?>
    <section class="two-up-locations">
       <div class="container-two-up col" style="background-color:<?php the_sub_field('location_background_color'); ?>">

            <div class="col-map">
                <div class="foreground-image">
                    <?php
    				$image = get_sub_field('location_image_on_map');
    				if( !empty( $image ) ): ?>
					    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
				    <?php endif; ?>
                </div>
                <div class="map-settings">
                 <?php echo the_sub_field('location_map_data'); ?>
                </div>
		    </div>
			<div class="col-location">
			    <div class="inner ">
                    <?php the_sub_field('location_entry'); ?>
                </div>
            </div>
        </div>
    </section>

	<?php endif; //end Two-Columns-Map-Locations?>