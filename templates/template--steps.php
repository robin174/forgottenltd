<?php while(has_sub_field('add_new_step')): ?>
    <?php if(get_row_layout() == 'new_step'): ?>
        
        <section class="block--step">
            <div class="grid-container grid-x">
                <div class="small-12 large-12 medium-12 cell">
                    <h2><?php the_sub_field('step_title'); ?></h2>
                    <?php the_sub_field('step_description'); ?>

                    <?php while(has_sub_field('step_bl_list')): ?>
                        <?php if(get_row_layout() == 'bullet_list'): ?>

                            <h4><?php the_sub_field('bl_title'); ?></h4>
                            <div>
                                <?php if( have_rows('bl_point') ): // Repeater name ?>
                                <ul class="bullet--or">
                                    <?php while( have_rows('bl_point') ): the_row(); ?>
                                        <li class="blue"><?php the_sub_field('bl_item'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>
                    <?php endwhile; ?>

                    <?php if(get_sub_field('step_notes')): ?>
                        <p class="note"><?php the_sub_field('step_notes'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        
    <?php endif; ?>
<?php endwhile; ?>