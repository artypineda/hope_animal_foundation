<?php
    //Two-Columns Veterinarian Staff
    if( get_row_layout() == 'vet_staff' ):
?>
    <section class="vet">
       <div class="container-simple three-up-items">

            <div class="item">
                <h2><?php the_sub_field('headline'); ?></h2>
            </div>
            
            <?php 
            if( have_rows('veterinarians') ): ?>
                <div id="veterinarians">
                    <?php 
                    while( have_rows('veterinarians') ): the_row(); ?>
                        <div class="holder">
                        
                            <div class="item">
                                <?php
                                $image = get_sub_field('photo');
                                if( !empty( $image ) ): ?>
                                    <?php echo wp_get_attachment_image( $image['ID'], 'medium' ); ?>
                                <?php endif; ?>
                            </div>
                            
                            <h3><?php the_sub_field('name'); ?></h3>
                            <p><?php the_sub_field('info'); ?></p>
                        
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
                
        </div>
    </section>

	<?php endif; //end Veterinarian Staff ?>