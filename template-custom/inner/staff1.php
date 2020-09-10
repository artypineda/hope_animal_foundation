<?php
    //Two-Columns More Staff
    if( get_row_layout() == 'more_staff' ):
?>
    <section class="vet">
       <div class="container-simple three-up-items">

            <div class="item">
                <h2><?php the_sub_field('headline'); ?></h2>
            </div>
            
            <div id="staff">
                <div class="holder">
                
                    <?php
                    $image = get_sub_field('photo');
                    if( !empty( $image ) ): ?>
                        <?php echo wp_get_attachment_image( $image['ID'], 'large' ); ?>
                    <?php endif; ?>
                    
                    <h3><?php the_sub_field('name'); ?></h3>
                    <p><?php the_sub_field('info'); ?></p>
                
                </div>
            </div>
        </div>
    </section>

	<?php endif; //end Veterinarian Staff ?>