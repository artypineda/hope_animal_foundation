<?php
    //Two-Columns Listings / UL Component on Blue BG
	if( get_row_layout() == 'two_columns_lists_2' ):
?>
    <section class="two-up-lists simple-lists-footer">
       <div class="container-simple two-up-list">
           
           <?php if( get_sub_field('two_col_title') ): ?>
                <h2 style="color:<?php the_sub_field('two_col_title_color'); ?>">
                   <?php the_sub_field('two_col_title'); ?>
               </h2>
            <?php endif; ?>
            
           	<div class="inner">
           	    <div class="left">
          	        <?php the_sub_field('two_col_left'); ?>
           	    </div>
           	    <div class="right">
          	        <?php the_sub_field('two_col_right'); ?>
           	    </div>
            </div>
        </div>
    </section>

	<?php endif; //Two-Columns Listings / UL Ending ?>