<?php
    // Promotions Flex Component
    if( get_row_layout() == 'promotions' ):
?>
    <section class="promos">
       <div class="container-simple mt85 mb85">

            <?php 
            if( have_rows('promotion_data') ): ?>
                
                <ul>
                <?php 
                while( have_rows('promotion_data') ): the_row(); ?>
                    <li class="promo">
                        <?php
                            $image = get_sub_field('promotion_image');
                            if( !empty( $image ) ): ?>
                                <?php echo wp_get_attachment_image( $image['ID'], 'medium', "", ["class" => "promo_img"] ); ?>
                            <?php endif; ?>
                        <h2><?php the_sub_field('promotion_title'); ?></h2>
                        <span>
                        <?php 
                            $link = get_sub_field('promotion_link');
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
                                            <img src="<?php bloginfo('template_url'); ?>/src/btn-arrow.svg" alt="link url for promotion" width="25">
                                        </span>
                                </a>
                                
                            <?php endif; ?>
                        </span>
                        
                    </li>
                <?php endwhile; ?>
                </ul>

            <?php endif; ?>
        </div>
    </section>

	<?php endif; //End Promotions Flex Component ?>