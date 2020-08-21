<?php
    //Two-Columns Image and Content with UL LI
    if( get_row_layout() == 'two_columns_combo_v1' ):
?>
    <section class="two-up-combo inScreen">
       <div class="container-two-up">

            <div class="col-image">
                <?php
                $image = get_sub_field('background_image');
                if( !empty( $image ) ): ?>
                    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                <?php endif; ?>
		    </div>
			<div class="col-data">
			    <div class="inner ">
                    <?php the_sub_field('body'); ?>
                    
                    <?php 
                    $link = get_sub_field('operative_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        
                        <button class="hopebtn1 mt35"
                            style="border: 3px solid var(--blue-aqua-3);
                            background-color:<?php the_sub_field('background_color'); ?>; ">
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                style="color: var(--rich-blue);"
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