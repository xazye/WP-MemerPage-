<div class="archive-tag-post rounded-lg relative my-6 text-left bg-bblack p-6 md:flex ">

    <!-- might need to change thumbnail size in wordprewss -->
    <?php echo get_the_post_thumbnail('', '', array('class' => 'relative mx-auto max-h-[150] max-w-[150] object-fit rounded-lg md:mr-6 md:max-h-[250] md:max-w-[250] md:object-fit ')) ?>

    <div class="md:grow">

        <h3 class=" text-tertiary text-3xl font-bold mt-6 "><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title() ?></a></h3>
        <span class="text-muted mx-3"><?php the_date(); ?></span>
        <span class="text-muted mx-3"><?php comments_number(); ?></span>

        <?php echo '<p class="mt-6 leading-7  ">' . get_the_excerpt() . '</p>'
        ?>
        <a class="tracking-[2px] inline-block font-bold mt-5 bg-secondary px-3 py-3 rounded-lg " href="<?php echo esc_url(get_permalink()) ?>"> Read more </a>
    </div>
</div>