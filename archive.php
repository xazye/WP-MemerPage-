<?php
get_header();

?>
<section class="max-w-[1100px] mx-auto">
    <div class="mx-6">
        <div class="w-[40%] bg-secondary absolute h-screen -translate-x-1/2 left-1/2"></div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post();
                // just reuse the archive template

                get_template_part('template-parts/content', 'archive');
                ?>
            <?php endwhile ?>
        <?php endif ?>
        <?php
        the_posts_pagination();
        wp_reset_postdata();

        ?>
    </div>


</section>
<?php

get_footer();
