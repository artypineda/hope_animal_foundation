<?php
    //Two-Columns Employment
    if( get_row_layout() == 'employment' ):
?>
    <section class="employment_sec">
       <div class="employment">

            <h2><?php the_sub_field('headline'); ?></h2>
        
            <?php 
            if( have_rows('positions') ): ?>

                <div id="positions">
                    <?php 
                    while( have_rows('positions') ): the_row(); ?>
                        <div class="position">
                        
                            <div class="left">
                                <?php
                                $image = get_sub_field('photo');
                                if( !empty( $image ) ): ?>
                                    <?php echo wp_get_attachment_image( $image['ID'], 'medium' ); ?>
                                <?php endif; ?>
                            </div>
                            
                            <div class="right">
                                <div class="inner">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <?php the_sub_field('description'); ?>
                                
                                    <?php 
                                        $link = get_sub_field('submit');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <button class="hopebtn1"
                                            style="border: 3px solid var(--rich-blue);">
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
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
                
        </div>
    </section>

	<?php endif; //end Employment ?>