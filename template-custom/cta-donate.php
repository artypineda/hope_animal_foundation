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
                        
                        <?php if ( get_sub_field('button_1_link') ): ?>
                        <form>
                            <button class="hopebtn1" type="submit" formaction="<?php the_sub_field('button_1_link'); ?>"
                            style="border: 2px solid <?php the_sub_field('button_1_color') ?>; background-color:<?php the_sub_field('button_1_color'); ?>" >
                                <?php the_sub_field('button_1_text'); ?>
                            </button>
                        </form>
                        <?php endif; ?>
                    
                        <?php if ( get_sub_field('button_2_link') ): ?>
                        <form>
                            <button class="hopebtn2" type="submit" formaction="<?php the_sub_field('button_2_link'); ?>"
                            style="border: 2px solid <?php the_sub_field('button_2_color') ?>; color:<?php the_sub_field('button_2_color'); ?>" >
                                <?php the_sub_field('button_2_text'); ?>
                            </button>
                        </form>
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