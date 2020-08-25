<?php
    // Hours of Operation Component
    if( get_row_layout() == 'hours_of_operation' ):
?>
    <section style="background-color:var(--blue-aqua-2);">
        <div class="container-simple banner1">
        
            <h2>
                <?php the_sub_field('title');?>
            </h2>
            <div class="left">
                <?php the_sub_field('hours_1');?>
            </div>
            <div class="middle">
                <?php the_sub_field('hours_2');?>
            </div>
            <div class="right">
                <?php the_sub_field('hours_3');?>
            </div>
        
        </div>
    </section>
    
	<?php endif; ?>
	<?php //end Hours of Operation Component ?>