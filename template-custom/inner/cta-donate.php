<?php
    //Donate Now Component
?>
    <?php if( have_rows('layouts_one') ): ?>
		<?php while( have_rows('layouts_one') ): the_row(); ?>
            <?php if( get_row_layout() == 'cta_donate' ): ?>
		    
		    <section id="cta-donate-<?php the_ID(); ?>" class="donate inScreen" style="background-color:<?php the_sub_field('background_color'); ?>">
                <div class="left">
                    <div class="inner">
                        <h2 style="color:<?php the_sub_field('title_color'); ?>"><?php the_sub_field('title_for_featured_image'); ?></h2>
                        <?php the_sub_field('featured_image_paragraph'); ?>
                        
                        <?php if(get_sub_field('button_1_link') ): ?>
                            <?php 
                            $link = get_sub_field('button_1_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            
                            <button class="hopebtn1 bl-over-wh">
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            </button>
            
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if(get_sub_field('button_2_link') ): ?>
                            <?php 
                            $link = get_sub_field('button_2_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            
                            <button class="hopebtn2 wh-over-blue" style="margin-left: 15px;">
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            </button>
            
                            <?php endif; ?>
                        <?php endif; ?>
                    
                    </div>
                </div>    
                <div class="right">
                    <?php
        				$image = get_sub_field('featured_image_right');
        				if( !empty( $image ) ): ?>
    					    <?php echo wp_get_attachment_image( $image['ID'], 'full', true ); ?>
			        <?php endif; ?>
                </div>


		    </section>
		    
			<?php endif; ?>
		<?php endwhile; ?>
			
	<?php endif; ?>
	<?php //end CTA V1?>