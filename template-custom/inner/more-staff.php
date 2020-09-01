<?php
    //Two-Columns More Staff
    if( get_row_layout() == 'more_staff' ):
?>
    <section class="vet">
       <div class="container-simple three-up-items inScreen">

            <div class="item">
                <h2><?php the_sub_field('headline'); ?></h2>
                
                <?php if(get_sub_field('subhead')):?>
                    <span class='subhead'><?php the_sub_field('subhead'); ?></span>
                <?php endif; ?>
                
            </div>
            
            <div id="staff">
                <div class="holder-full">
                
                    <?php
                    $image = get_sub_field('photo');
                    if( !empty( $image ) ): ?>
                        <?php echo wp_get_attachment_image( $image['ID'], 'large' ); ?>
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('staff_names')):?>
                        <p><?php the_sub_field('staff_names'); ?></p>
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </section>

	<?php endif; //end Veterinarian Staff ?>