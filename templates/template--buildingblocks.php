<?php while(has_sub_field("add_page_content")): ?>

    <?php if(get_row_layout() == 'block_subheading_h2'): // Subheading: h2 ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <h2 class="font--sub-h2"><?php the_sub_field('unit_subheading_h2'); ?></h2>  
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_subheading_h3'): // Subheading: h3 ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <h3 class="font--sub-h3"><?php the_sub_field('unit_subheading_h3'); ?></h3>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_subheading_h4'): // Subheading: h4 ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <h4 class="font--sub-h4"><?php the_sub_field('unit_subheading_h4'); ?></h3>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_introduction'): // Paragraph: Introduction ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <p class="font--intro"><?php the_sub_field('unit_introduction'); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_paragraph'): // Paragraph: Full Width ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <?php the_sub_field('unit_paragraph'); ?>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if(get_row_layout() == 'block_image'): // layout: Image / Caption - Full Width ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <figure class="">
                    <img class="" src="<?php the_sub_field('unit_image'); ?>" alt="" />
                    <?php if( get_sub_field('unit_image_caption') ): ?>
                        <figcaption class="caption"><?php the_sub_field('unit_image_caption'); ?></figcaption>
                    <?php endif; ?>
                </figure>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_page_break_new'): // layout: Page Break - new ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <!-- Add conventional HR, check box, sort ADMIN -->
                <?php if( get_sub_field('unit_break') ) {
                    echo '<hr class="article">';
                } ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_footnote'): // layout: Footnote ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <section class="unit_footnote">
                    <p class="note"><?php the_sub_field('unit_note'); ?></p>
                </section>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_sub_field('unit_site') == "vimeo"): // If Vimeo Selected ?>
        <div class="grid-container grid-x">
            <div class="medium-offset-1 small-12 large-10 medium-10 cell">

                <div class="responsive-embed vimeo">
                    <iframe width="640" height="360" src="//player.vimeo.com/video/<?php the_sub_field('unit_vimeo_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <?php if(get_sub_field('unit_site') == "youtube"): // If YouTube Selected ?>
        <div class="grid-container grid-x">
            <div class="medium-offset-1 small-12 large-10 medium-10 cell">

                <div class="responsive-embed youtube">
                    <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_sub_field('unit_youtube_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_template_part'): // layout: Template Part ?>
        <div class="grid-container grid-x">
            <?php
                global $templ;
                $templ = get_sub_field('unit_template_name');
            ?>
            
            <div class="small-12 large-12 medium-12 cell">
                <?php include(locate_template("templates/$templ".".php")); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(get_row_layout() == 'block_bullet_list'): // Bullet List  ?>
        <div class="grid-container grid-x">
            <div class="small-12 large-12 medium-12 cell">
                <section>
                     <?php if( get_sub_field('unit_introduction_para') ): ?>
                        <p class="bullet-intro"><?php the_sub_field('unit_introduction_para'); ?></p>
                    <?php endif; ?>

                    <?php if( have_rows('unit_bullet_point') ): // Repeater Field Name ?>
                    <ul class="bullet-black"> 
                        <?php while( have_rows('unit_bullet_point') ): the_row(); ?>
                            <li><?php the_sub_field('item_list'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if( get_sub_field('unit_conclusion_para') ): ?>
                        <p><?php the_sub_field('unit_conclusion_para'); ?></p>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    <?php endif; ?>

<?php endwhile; ?>