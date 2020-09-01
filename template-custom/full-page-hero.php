<?php
    //Full-Page Hero Component
?>
<?php if( have_rows('layouts_one') ): ?>
    <?php while( have_rows('layouts_one') ): the_row(); ?>

        <?php if( get_row_layout() == 'full_page_hero' ): ?>

        <section id="post-<?php the_ID(); ?>" class="dynamic-full-page-hero" style="background-color:<?php the_sub_field('hero_background_color'); ?>" >
            
            <div class="container-simple">
                <div class="left fadeInV1">
                    
                    <h1 class="hero-heading floating" style="color: <?php the_sub_field('header_title_color'); ?>">
                        <?php the_sub_field('header_on_hero'); ?>
                    </h1>
                    <div class="hero-paragraph">
                        <?php echo the_sub_field('hero_content'); ?>
                    </div>

                    <?php if ( get_sub_field('hero_button_link') ): ?>
                    <form>
                        <button class="hopebtn1 light1" type="submit" formaction="<?php the_sub_field('hero_button_link'); ?>"
                        style="border: 2px solid <?php the_sub_field('hero_button_bg'); ?>; background-color:<?php the_sub_field('hero_button_bg'); ?>" >
                            <?php the_sub_field('hero_button_text'); ?>
                        </button>
                    </form>

                    <?php endif; ?>
                
                </div>
                
                <div class="right">
                    <div class="post-thumbnail fullpagesize slideInFromBottom">
                        <?php
                        $image = get_sub_field('hero_image_right');
                        if( !empty( $image ) ): ?>
                    
                        <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                    </div>
        
                    <?php else : ?>
                    
                        <div class="fullpagesize">
                            <?php hope_animal_foundation_post_thumbnail(); ?>
                        </div>
                                    
                    <?php endif; ?>
                </div>
            </div>
        
        </section>

        <?php endif; ?>
    <?php endwhile; ?>
    
<?php endif; ?>
<?php //end Header Hero Component?>