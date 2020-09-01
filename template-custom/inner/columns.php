<?php
    // Basic Columns
	if( get_row_layout() == 'add_columns' ):
?>
    <section class="layout-segment">
           
           <?php if( have_rows('single_columns') ): ?>
            <div class="container-simple">

                <div class="single">
                    <?php while( have_rows('single_columns') ): the_row(); ?>
                      
                       <?php the_sub_field('body'); ?>
                   
                   <?php endwhile; ?>
                </div>
            </div>
           <?php endif; ?>

           <?php if( have_rows('two_columns') ): ?>
            <div class="container-full" style="background-color: var(--blue-aqua-2);">
                <div class="container-simple hasDos">
                    <?php while( have_rows('two_columns') ): the_row(); ?>
                    <div class="left">

                       <?php the_sub_field('body1'); ?>

                    </div>
                    <div class="right">

                        <?php the_sub_field('body2'); ?>

                    </div>
                   <?php endwhile; ?>
                </div>
            </div>
           <?php endif; ?>

           

    </section>

	<?php endif; //End Basic Columns ?>