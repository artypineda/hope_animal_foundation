<?php
    // Button Banner with Link
    if( get_row_layout() == 'button_banner_with_link' ):
?>
    <section style="background-color:var(--blue-aqua-2b);">
        <div class="container-simple banner1">
        
        <div class="heading">
            <h2 style="color:<?php the_sub_field('button_banner_text_color');?>">
                <?php the_sub_field('header_title');?>
            </h2>
        </div>
        
        <div class="btndiv">
            <?php 
            $link = get_sub_field('button_banner_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <button class="hopebtn3" style="border: 3px solid white;">
                    <a href="<?php echo esc_url( $link_url ); ?>"
                        style="color: <?php the_sub_field('button_banner_text_color'); ?>;"
                        target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                    </a>
                </button>
            <?php endif; ?>
        </div>
        
        </div>
    </section>
    
	<?php endif; ?>
	<?php //end CTA V1?>