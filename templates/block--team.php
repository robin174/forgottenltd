<div class="cell">
    <section class="block--team">
        <figure>
            <?php the_post_thumbnail('normal'); ?>
        </figure>
        <section class="block--team-info">
            <h4><?php the_title();?></h4>
            <?php the_field('biography');?>
            <a href="<?php the_field('linkedin_url');?>" title="Find <?php the_title();?> on LinkedIn" target="_blank"><i class="fab fa-linkedin"></i>&nbsp;Find <?php the_field('first_name');?> on LinkedIn</a>
            <hr>
            <h5><?php the_field('company_name');?></h5>
            <p><i class="fas fa-map-marker-alt"></i>&nbsp;<?php the_field('company_location');?><br>
            <a href="<?php the_field('company_url');?>" title="<?php the_field('company_name');?>" target="_blank"><i class="fas fa-external-link"></i>&nbsp;<?php the_field('company_url_clean');?></a></p>
        </section>
    </section>
</div>
