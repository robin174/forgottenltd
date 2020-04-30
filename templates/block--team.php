<div class="cell">
    <section class="block--team">
        <figure>
            <?php the_post_thumbnail('normal'); ?>
        </figure>
        <h4><?php the_title();?></h4>
        <p>Bio</p>
        <a href="<?php the_field('LinkedIn');?>" title="">LinkedIn</a>
        <p>_ _ _</p>
        <p><a href="<?php the_field('company_url');?>"><?php the_field('company_name');?></a></p>
    </section>
</div>
