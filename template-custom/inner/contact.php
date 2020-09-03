<?php
    //Two-Columns Contact Form
    if( get_row_layout() == 'contact' ):
?>
    <section class="two-up-combo" style="background-color: white;">
       <div class="container-simple contact">

            <div class="col-left">
                <h2><?php the_sub_field('name'); ?></h2>
                <span><?php the_sub_field('address'); ?></span>

                <ul>
                    <?php if(get_sub_field('phone')): ?>
                    <li><strong>Phone</strong><br/>
                        <?php the_sub_field('phone'); ?>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('fax')):?>
                    <li><strong>Fax</strong><br/>
                        <?php the_sub_field('fax'); ?>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('email')): ?>
                    <li><strong>Email</strong><br/>
                        <?php the_sub_field('email'); ?>
                    </li>
                    <?php endif; ?>
                </ul>
		    </div>
			<div class="col-right">
			    <div class="inner ">
                    <?php echo do_shortcode(get_sub_field('contact_form')); ?>
                </div>
            </div>
        </div>
    </section>

	<?php endif; //end Image and Content ?>