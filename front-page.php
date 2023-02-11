<?php
get_header();
?>
<section class="max-w-[1100px] mx-auto ">
    <div class="mx-6  ">
        <div class="w-[40%] bg-secondary absolute h-screen -translate-x-1/2 left-1/2"></div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php
                the_post();
                ?>
                <div class="single-post rounded-lg relative my-6 text-left bg-bblack p-6 md:flex ">
                    <!-- might need to change thumbnail size in wordprewss -->
                    <?php echo get_the_post_thumbnail('', '', array('class' => 'relative mx-auto max-h-[150] max-w-[150] object-fit rounded-lg md:mr-6 md:max-h-[250] md:max-w-[250] md:object-fit ')) ?>
                    <!-- col-start-2  row-star-1 -->
                    <div class="md:grow">
                        <h3 class=" text-tertiary text-3xl font-bold mt-6 "><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title() ?></a></h3>
                        <span class="text-muted mx-3"><?php the_date(); ?></span>
                        <span class="text-muted mx-3"><?php comments_number(); ?></span>

                        <!-- col-start-2 row-start-2 row-end-2 -->
                        <?php echo '<p class="mt-6 leading-7  ">' . get_the_excerpt() . '</p>'
                        ?>
                        <!-- col-start-2 row-start-3 row-end-3 -->
                        <a class="tracking-[2px] inline-block font-bold mt-5 bg-secondary px-3 py-3 rounded-lg " href="<?php echo esc_url(get_permalink()) ?>"> Read more </a>
                    </div>

                </div>
            <?php endwhile ?>
        <?php endif ?>
        <?php
        the_posts_pagination();
        ?>
    </div>
</section>
<?php
get_footer();
?>