<?php
    // Subscribe component
    if( get_row_layout() == 'subscribe' ):
?>
    <section style="background-color:var(--blue-aqua-2);">
        <div class="container-simple subscribe">
        
        <div class="heading">
            <h2 style="color: var(--rich-blue);">
                <?php the_sub_field('subscribe_title');?>
            </h2>
        </div>

        <div class="subscribe_message">
            <p><?php the_sub_field('subscribe_message');?></p>
        </div>
        
        <div class="subscribe_code">
            <?php the_sub_field('subscribe_code');?>
        </div>
        
        </div>
    </section>
    
	<?php endif; ?>
    <?php //end Subscribe Component ?>
    


