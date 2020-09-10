<?php
    // Video URL
    if( get_row_layout() == 'video_link' ):
?>

    <section class="container-simple hasVid">
            
       <?php if( get_sub_field('video') ): ?>
       <div class="video">
            <?php the_sub_field('video'); ?>
           </div>
        <?php endif; ?>
            
    </section>
    
	<?php endif; ?>
	<?php //end VidURL?>