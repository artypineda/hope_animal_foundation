<?php
    // Basic Columns
	if( get_row_layout() == 'add_two_columns' ):
?>
    <section class="layout-segment">
       <div class="container-simple">
           
           <?php if( have_rows('two_columns') ): ?>
                <div class="single" style="background-color:<?php the_sub_field('background_color'); ?>">
                    <?php while( have_rows('single_columns') ): the_row(); ?>
                      
                    <div class="left">
                        <?php the_sub_field('left_column'); ?>
                   </div>
                   <div class="right">
                        <?php the_sub_field('right_column'); ?>
                   </div>
                   
                   <?php endwhile; ?>
                </div>
           <?php endif; ?>


        </div>
    </section>

	<?php endif; //End Basic Columns ?>