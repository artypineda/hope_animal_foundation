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
                                
                                    <form>
                                        <button class="hopebtn1" type="submit" formaction="mailto:info@hopeaf.com?subject=New Application Submission" 
                                        style="border: 4px solid var(--rich-blue)";>
                                            Submit Application
                                        </button>
                                    </form>

                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
                
        </div>
    </section>

	<?php endif; //end Employment ?>