<?php
    //Call To Action Headling / Paragraph / Button Component V2
    if( get_row_layout() == 'cta_simple_2' ):
?>
    <section style="background-color:<?php the_sub_field('cta_background_color'); ?>">
        <div class="container-simple simple2">
            
            <?php if( get_sub_field('cta_title') ): ?>
                <h2 style="color:<?php the_sub_field('cta_title_color'); ?>"><?php the_sub_field('cta_title'); ?></h2>
            <?php endif; ?>
            
            <?php the_sub_field('cta_paragraph'); ?>

            <?php if( get_sub_field('cta_button_link') ): ?>
                <?php 
                $link = get_sub_field('cta_button_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    
                    <button class="hopebtn1 mt35"
                        style="border: 3px solid var(--blue-aqua-3);">
                        <a href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"
                            style="color:<?php the_sub_field('cta_title_color'); ?>;">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </button>
    
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </section>
    
	<?php endif; ?>
	<?php //end CTA V1?>