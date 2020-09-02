<?php
    //Two-Columns Employment
    if( get_row_layout() == 'employment' ):
?>
    <section class="employment_sec">
       <div class="employment">

            <h2><?php the_sub_field('headline'); ?></h2>
        
            <?php 
            if( have_rows('positions') ): ?>

                <div id="positions">
                    <?php 
                    while( have_rows('positions') ): the_row(); ?>
                        <div class="position">
                        
                            <div class="left">
                                <?php
                                $image = get_sub_field('photo');
                                if( !empty( $image ) ): ?>
                                    <?php echo wp_get_attachment_image( $image['ID'], 'medium' ); ?>
                                <?php endif; ?>
                            </div>
                            
                            <div class="right">
                                <div class="inner">
                                    <h2><?php the_sub_field('title'); ?></h2>
                                    <?php the_sub_field('description'); ?>
                                
                                    <!--  <form class="dt">-->
                                    <!--    <button class="hopebtn1 light3" onclick="location.href='mailto:info@hopeaf.com';" type="submit"-->
                                    <!--    style="border:2px solid var(--blue-aqua-3); color: var(--rich-blue);">-->
                                    <!--        Submit Application-->
                                    <!--    </button>-->
                                    <!--</form>-->
                                    <a href="mailto:info@hopeaf.com?subject=New Application Submission">
                                     <button class="hopebtn1 light3"
                                        style="border:2px solid var(--blue-aqua-3); color: var(--rich-blue);">
                                        Submit Application
                                    </button>
                                    </a>
                                    
                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
                
        </div>
    </section>

	<?php endif; //end Employment ?>