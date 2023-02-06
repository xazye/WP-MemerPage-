<section class="max-w-[1100px] mx-auto">
    <div class="mx-6 ">
        <div class="relative mt-6 text-center bg-bblack rounded-t-lg  py-6">
            <p class="text-muted font-bold">Added: <?php the_date();
                                                    ?> By: <?php the_author();  ?></p>
            <div class="overflow-hidden  text-muted font-bold">
                Tags: <?php the_tags('<i class="fa-solid fa-tag inline-block m-3 " >', '</i><i class="fa-solid fa-tag inline-block m-3">', '</i>'); ?>
            </div>
            <p class="text-muted font-bold my-2"><?php comments_number(); ?></p>
        </div>
        <div class="w-[40%] bg-secondary absolute h-screen -translate-x-1/2 left-1/2 "></div>

        <?php echo get_the_post_thumbnail('', '', array('class' => 'relative  mx-auto max-h-[480] object-none rounded-b-lg	')) ?>
        <div class="relative mt-6 rounded-lg bg-bblack">

            <div class="text-left  p-7">
                <h3 class=" text-tertiary text-3xl font-bold "><?php the_title() ?>
                </h3>
                <p class="mt-6 leading-7 ">
                    <?php
                    the_content('');
                    ?>
                </p>

            </div>
        </div>

        <?php
        comments_template();
        ?>
    </div>
</section>