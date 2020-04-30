<div class="cell">
    <section class="block--team">
        <figure>
            <?php the_post_thumbnail('normal'); ?>
        </figure>
        <section class="block--team-info">
            <h4><?php the_title();?></h4>
            <?php the_field('biography');?>
            <a href="<?php the_field('LinkedIn');?>" title="Find <?php the_title();?> on LinkedIn" target="_blank">(i) Find <?php the_title();?> on LinkedIn</a>
            <hr>
            <p><a href="<?php the_field('company_url');?>"><?php the_field('company_name');?></a></p>
        </section>
    </section>
</div>
