<?php
    // Margins Columns
    if( get_row_layout() == 'margins' ):
?>

<?php if(get_sub_field('mtop') ) :?>
    <div class="mtop" style="margin-top: <?php the_sub_field('mtop'); ?>px" aria-hidden="true"></div>

<?php elseif(get_sub_field('mbottom') ) :?>
    <div class="mbottom" style="margin-bottom: <?php the_sub_field('mbottom'); ?>px" aria-hidden="true"></div>

<?php endif; ?>
   

<?php endif; //end margins Component ?>