<?php
    //Pricing Packages Component
    if( get_row_layout() == 'pricing_packages' ):
?>
    <section class="inScreen" style="background-color: var(--blue-aqua-2);">
       <div class="container-simple packages">

			<div class="inner">
			    
                <?php $mainColor = get_sub_field('main_color'); ?>
                <h2 style="color:<?php echo $mainColor; ?>"><?php the_sub_field('main_title'); ?></h2>
                        
                <?php 
                if( have_rows('package_items') ): ?>
                    <div id="package_items">
                    
                    <ul>
                    <?php 
                    while( have_rows('package_items') ): the_row(); ?>

                        <li <?php if( get_sub_field('package_title') ){
                            echo 'class="completed"'; } ?>
                            style="color:<?php echo $mainColor; ?>" >
                            <?php the_sub_field('package_title'); ?>
                            <span>
                                $<?php the_sub_field('list_price_entry'); ?>
                            </span>
                        </li>
                        <p class="subTitle"><?php the_sub_field('package_sub_title'); ?></p>

                    <?php endwhile; ?>
                    </ul>

                    </div>
                <?php endif; ?>

                <p><span style="color: <?php echo $mainColor; ?>; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                    Note: </span><?php the_sub_field('note_1'); ?>
                </p>
                
                <p style="color: <?php echo $mainColor; ?>; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                    <?php the_sub_field('note_2'); ?>
                </p>

            </div>
            
        </div>
    </section>

	<?php endif; //end Pricing Packages Component ?>