<?php
    // Horizontal Image Componnent
    if( get_row_layout() == 'horizontal_image' ):
?>
    <section class="wide-image-container inScreen">
        <div class="wide-image">
        
            <?php
            $image = get_sub_field('background_image');
            if( !empty( $image ) ): ?>
                <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
            <?php endif; ?>
        
        </div>
    </section>
    
	<?php endif; ?>
	<?php //end Image?>