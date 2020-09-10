<?php
    //Two-Columns Image and Content with Paragraph
    if( get_row_layout() == 'two_columns_combo_v2' ):
?>
    <section class="two-up-combo inScreen">
       <div class="container-two-up col" style="background-color: var(--blue-aqua-2)">

            <div class="col-image">
                <?php
                $image = get_sub_field('background_image');
                if( !empty( $image ) ): ?>
                    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                <?php endif; ?>
		    </div>
			<div class="col-data-2">
			    <div class="inner ">
                    <?php the_sub_field('body'); ?>
                    
                    <?php 
                    $link = get_sub_field('operative_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        
                        <button class="hopebtn1 light3"
                            style="border: 2px solid var(--blue-aqua-3);
                            background-color:<?php the_sub_field('background_color'); ?>; ">
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                style="color: var(--rich-blue);"
                                class="wt"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                            </a>
                        </button>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>

	<?php endif; //end Image and Content ?>