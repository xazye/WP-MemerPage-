<div class="rounded-lg relative my-6 text-left bg-bblack p-6">

    <!-- col-start-1 col-end-1 row-start-1  -->
    <?php echo get_the_post_thumbnail('', 'thumbnail', array('class' => 'relative  mx-auto max-h-[480]   object-none rounded-lg  ')) ?>
    <!-- col-start-2  row-star-1 -->
    <h3 class=" text-tertiary text-3xl font-bold mt-6 "><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title() ?></a></h3>
    <span class="text-muted"><?php the_date(); ?></span>
    <span class="text-muted"><?php comments_number(); ?></span>

    <!-- col-start-2 row-start-2 row-end-2 -->
    <?php echo '<p class="mt-6 leading-7  ">' . get_the_excerpt() . '</p>'
    ?>
    <!-- col-start-2 row-start-3 row-end-3 -->
    <a class="tracking-[2px] inline-block font-bold mt-5 bg-secondary px-3 py-3 rounded-lg " href="<?php echo esc_url(get_permalink()) ?>"> Read more </a>
</div>