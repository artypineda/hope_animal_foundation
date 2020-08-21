<?php
    //Call To Action Headling / Paragraph / Button Component V1
    if( get_row_layout() == 'cta_simple' ):
?>
    <section class="container-simple simple1">
        <h2 style="color:<?php the_sub_field('cta_title_color'); ?>"><?php the_sub_field('cta_title_1'); ?></h2>
        <?php the_sub_field('cta_paragraph_1'); ?>

        <?php if ( get_sub_field('cta_button_link_1') ): ?>
        <form>
            <button class="hopebtn1" type="submit" formaction="<?php the_sub_field('cta_button_link_1'); ?>"
            style="border: 3px solid <?php the_sub_field('cta_button_border_color') ?>; color:<?php the_sub_field('cta_title_color'); ?>" >
                <?php the_sub_field('cta_button_title_1'); ?>
            </button>
        </form>

        <?php endif; ?>
    </section>
    
	<?php endif; ?>
	<?php //end CTA V1?>