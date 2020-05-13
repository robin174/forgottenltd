<?php if( get_field('select_resource') == 'image' ): ?>
    <?php if( have_rows('group_image') ): // Group Name ?>
        <?php while( have_rows('group_image') ): the_row(); ?>

                <section class="block--resource">
                    <figure>
                        <?php the_post_thumbnail('normal'); ?>
                    </figure>
                    <section class="block--resource-info">
                        <h4><?php the_title();?></h4>
                        <?php if( get_sub_field('image_description') ): ?>
                            <p><?php the_sub_field('image_description');?></p>
                        <?php endif; ?>
                        Label and/or credit<br>
                        <a class="button button--cta-or" href="<?php the_post_thumbnail_url('full');?>" download><i class="fas fa-download fa-lg" style="vertical-align: middle;"></i>&nbsp;&nbsp;Download</a>
                    </section>
                </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif( get_field('select_resource') == 'pdf' ): ?>
    <?php if( have_rows('group_pdf') ): // Group Name ?>
        <?php while( have_rows('group_pdf') ): the_row(); ?>

                <section class="block--resource">
                    <figure>
                        <?php the_post_thumbnail('normal'); ?>
                    </figure>
                    <section class="block--resource-info">
                        <h4><?php the_title();?></h4>
                        <?php if( get_sub_field('pdf_description') ): ?>
                            <p><?php the_sub_field('pdf_description');?></p>
                        <?php endif; ?>
                        XPDF test
                    </section>
                </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif( get_field('select_resource') == 'file' ): ?>
    <?php if( have_rows('group_file') ): // Group Name ?>
        <?php while( have_rows('group_file') ): the_row(); ?>

                <section class="block--resource">
                    <figure>
                        <?php the_post_thumbnail('normal'); ?>
                    </figure>
                    <section class="block--resource-info">
                        <h4><?php the_title();?></h4>
                        <?php if( get_sub_field('file_description') ): ?>
                            <p><?php the_sub_field('file_description');?></p>
                        <?php endif; ?>
                        XFile test
                    </section>
                </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif( get_field('select_resource') == 'video' ): ?>
    <?php if( have_rows('group_video') ): // Group Name ?>
        <?php while( have_rows('group_video') ): the_row(); ?>

                <section class="block--resource">
                    <figure>
                        <?php the_post_thumbnail('normal'); ?>
                    </figure>
                    <section class="block--resource-info">
                        <h4><?php the_title();?></h4>
                        <?php if( get_sub_field('video_description') ): ?>
                            <p><?php the_sub_field('video_description');?></p>
                        <?php endif; ?>
                        XVideo test
                    </section>
                </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php endif; ?>