<?php
    // Basic Columns
	if( get_row_layout() == 'columns' ):
?>
    <section class="layout-segment" style="background-color:<?php the_sub_field('background_color'); ?>">
       <div class="container-simple">
           
            <?php if( get_sub_field('single_column') ): ?>
                <div class="single">
                   <?php the_sub_field('single_column_data'); ?>
                </div>
            <?php elseif( get_sub_field('two_column') ): ?>
                <div class="two_column">
                    <div class="left">
                        <?php the_sub_field('left_column'); ?>
                   </div>
                   <div class="right">
                        <?php the_sub_field('right_column'); ?>
                   </div>
                </div>
           	<?php endif; ?>
        </div>
    </section>

	<?php endif; //End Basic Columns ?>