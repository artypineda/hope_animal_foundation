<?php
	//Three-Up with Links Component
	if( get_row_layout() == 'three_columns_links' ):
?>
    <section class="three-up-links">
        <div class="container-three-up">
           <div class="col inScreen">

               <div class="col-image">
               		<?php
    				$image = get_sub_field('column_icon_left');
    				if( !empty( $image ) ): ?>
					    <?php echo wp_get_attachment_image( $image['ID'], 'full', true ); ?>
				    <?php endif; ?>
			    </div>
				<h2 class="col-info" style="color:<?php the_sub_field('col3_color'); ?>">
					<?php echo the_sub_field('content_left'); ?>
				</h2>
				<a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>" href="<?php the_sub_field('content_link_left'); ?>">
					Learn More
					<span>
                        <img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
					</span>
				</a>
				
           </div>
              <div class="col inScreen">
			  
			  <div class="col-image">
               		<?php
    				$image2 = get_sub_field('column_icon_center');
    				if( !empty( $image2 ) ): ?>
					    <?php echo wp_get_attachment_image( $image2['ID'], 'full', true ); ?>
				    <?php endif; ?>
			    </div>
				<h2 class="col-info" style="color:<?php the_sub_field('col3_color'); ?>">
					<?php echo the_sub_field('content_left_center'); ?>
				</h2>
				<a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>" href="<?php the_sub_field('content_link_left'); ?>">
					Learn More
					<span>
                        <img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
					</span>
				</a>
			  
           </div>
              <div class="col inScreen">
			   
			  <div class="col-image">
               		<?php
    				$image3 = get_sub_field('column_icon_right');
    				if( !empty( $image3 ) ): ?>
					    <?php echo wp_get_attachment_image( $image3['ID'], 'full', true ); ?>
				    <?php endif; ?>
			    </div>
				<h2 class="col-info" style="color:<?php the_sub_field('col3_color'); ?>">
					<?php echo the_sub_field('content_left_right'); ?>
				</h2>
				<a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>" href="<?php the_sub_field('content_link_left'); ?>">
					Learn More
					<span>
                        <img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
					</span>
				</a>

           </div>
        </div>
    </section>
    
	<?php endif; //end Three-Columns-with-Text ?>