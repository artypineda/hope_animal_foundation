<?php
    //Call To Action Headling / Paragraph / Button Component
?>
    <?php if( have_rows('layouts_one') ): ?>
		<?php while( have_rows('layouts_one') ): the_row(); ?>
            <?php if( get_row_layout() == 'cta_simple' ): ?>
		    
		    <section id="cta-v1-<?php the_ID(); ?>" class="container-simple simple1">
                <h2 style="color:<?php the_sub_field('cta_title_color'); ?>"><?php the_sub_field('cta_title_1'); ?></h2>
                <?php the_sub_field('cta_paragraph_1'); ?>

                <?php if ( get_sub_field('cta_button_link_1') ): ?>
                <form>
                    <button class="hopebtn1" type="submit" formaction="<?php the_sub_field('cta_button_link_1'); ?>"
                    style="border: 4px solid <?php the_sub_field('hero_button_bg'); ?>; background-color:<?php the_sub_field('hero_button_bg'); ?>" >
                        <?php the_sub_field('hero_button_text'); ?>
                    </button>
                </form>

                <?php endif; ?>
		    </section>
		    
			<?php endif; ?>
		<?php endwhile; ?>
			
	<?php endif; ?>
	<?php //end CTA V1?>