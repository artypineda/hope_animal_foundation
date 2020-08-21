<?php
    // Click Thru Button with Styling
    if( get_row_layout() == 'book_appointment_link' ):
?>
    <section class="container-simple center1">

        <?php 
        $link = get_sub_field('book_appointment_button_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <button class="hopebtn2"
                style="border: 3px solid <?php the_sub_field('book_appointment_button_color') ?>;
                background-color:<?php the_sub_field('book_appointment_button_color'); ?>; ">
                <a href="<?php echo esc_url( $link_url ); ?>"
                    style="color: white;"
                    target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo esc_html( $link_title ); ?>
                </a>
            </button>
            
           <?php if( get_sub_field('more_details') ): ?>
           <div class="more_details">
                <?php the_sub_field('more_details'); ?>
               </div>
            <?php endif; ?>
            
        <?php endif; ?>
    </section>
    
	<?php endif; ?>
	<?php //end CTA V1?>