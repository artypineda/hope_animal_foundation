<?php
    //Two-Columns Pricing Component
    if( get_row_layout() == 'two_columns_pricing' ):
?>
    <section class="two-up-pricing">
       <div class="container-simple prices">

			<div class="leftside">
                <?php 
                if( have_rows('left_products') ): ?>
                    <div id="left_products">
                
                    <?php 
                    while( have_rows('left_products') ): the_row(); ?>
                            <?php $mainColor = get_sub_field('main_color'); ?>
                            <h2 style="color:<?php echo $mainColor ?>"><?php the_sub_field('product_title'); ?></h2>
                            <?php 

                            if( have_rows('list_items') ): ?>
                            
                                <ul>
                                <?php 
                                while( have_rows('list_items') ): the_row();
                                    ?>
                                    <li <?php if( get_sub_field('list_title_entry') ){
                                        echo 'class="completed"'; } ?>
                                        style="color:<?php echo $mainColor ?>" >
                                        <?php the_sub_field('list_title_entry'); ?>
                                    </li>
                                    <span>
                                        $<?php the_sub_field('list_price_entry'); ?>
                                    </span>
                                <?php endwhile; ?>
                                </ul>
                                
                            <?php endif; ?>

                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="rightside">
                <?php 
                if( have_rows('right_products') ): ?>
                    <div id="right_products">
                
                    <?php 
                    while( have_rows('right_products') ): the_row(); ?>
                            <?php $mainColor = get_sub_field('main_color'); ?>
                            <h2 style="color:<?php echo $mainColor ?>">
                                <?php the_sub_field('product_title'); ?>
                                <em><?php the_sub_field('product_sub_title'); ?></em>
                            </h2>
                            <?php 

                            if( have_rows('list_items') ): ?>
                            
                                <ul>
                                <?php 
                                while( have_rows('list_items') ): the_row();
                                    ?>
                                    <li <?php if( get_sub_field('list_title_entry') ){
                                        echo 'class="completed"'; } ?>
                                        style="color:<?php echo $mainColor ?>" >
                                        <?php the_sub_field('list_title_entry'); ?>
                                    </li>
                                    <span>
                                        $<?php the_sub_field('list_price_entry'); ?>
                                    </span>
                                <?php endwhile; ?>
                                </ul>
                                
                            <?php endif; ?>

                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </section>

	<?php endif; //end Pricing Component ?>