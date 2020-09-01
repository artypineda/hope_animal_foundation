<?php
    //Community Sponsors Component
    if( get_row_layout() == 'sponsors' ):
?>

    <section class="community-sponsors">
       <div class="container-simple">

            <?php 
            if( have_rows('Sponsor') ): //case-sensitive ?> 
                <div class="sponsors">
                 <?php 
                    while( have_rows('Sponsor') ): the_row(); ?>
                        <div class="sponsor">
                            <?php
                            $image = get_sub_field('logo');
                            if( !empty( $image ) ): ?>
                                <?php echo wp_get_attachment_image( $image['ID'], 'medium' ); ?>
                            <?php endif; ?>
                            
                            <?php if(get_sub_field('name')) :?>
                                <span><?php the_sub_field('name'); ?></span>
                            <?php endif; ?>
                            
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
                
        </div>
    </section>

	<?php endif; //end Sponsor ?>