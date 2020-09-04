<?php
    //Three-Up with Links Component
?>
    <?php if( have_rows('layouts_one') ): ?>
		<?php while( have_rows('layouts_one') ): the_row(); ?>
            <?php if( get_row_layout() == 'three_columns_links' ): ?>
		    
		    <section id="threeup-<?php the_ID(); ?>" class="three-up-links">
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
						
						<?php if(get_sub_field('content_link_left') ): ?>
                            <?php 
                            $link = get_sub_field('content_link_left');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>"
									href="<?php echo esc_url( $link_url ); ?>"
									target="<?php echo esc_attr( $link_target ); ?>">
                                   		<?php echo esc_html( $link_title ); ?>
                                    
									<span>
										<img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
									</span>
                                </a>
            
                            <?php endif; ?>
                        <?php endif; ?>
						
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
							<?php echo the_sub_field('content_center'); ?>
						</h2>
						
						<?php if(get_sub_field('content_link_center') ): ?>
                            <?php 
                            $link = get_sub_field('content_link_center');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>"
									href="<?php echo esc_url( $link_url ); ?>"
									target="<?php echo esc_attr( $link_target ); ?>">
                                   		<?php echo esc_html( $link_title ); ?>
                                    
									<span>
										<img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
									</span>
                                </a>
            
                            <?php endif; ?>
                        <?php endif; ?>
						
					  
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
							<?php echo the_sub_field('content_right'); ?>
						</h2>

						<?php if(get_sub_field('content_link_right') ): ?>
                            <?php 
                            $link = get_sub_field('content_link_right');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="col-link" style="color:<?php echo the_sub_field('col3_color'); ?>"
									href="<?php echo esc_url( $link_url ); ?>"
									target="<?php echo esc_attr( $link_target ); ?>">
                                   		<?php echo esc_html( $link_title ); ?>
                                    
									<span>
										<img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for column item" width="25">
									</span>
                                </a>
            
                            <?php endif; ?>
                        <?php endif; ?>

	               </div>
                </div>
		    </section>
		    
			<?php endif; ?>
		<?php endwhile; ?>
			
	<?php endif; ?>
	<?php //end Three-Columns-with-Text?>