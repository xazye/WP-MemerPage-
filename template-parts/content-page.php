<section class="max-w-[1100px] mx-auto">
    <div class="mx-6 ">
        <div class="w-[40%] bg-secondary absolute h-screen -translate-x-1/2 left-1/2 "></div>

        <div class="relative mt-6 rounded-lg bg-bblack">

            <div class="text-left  p-7">
                <h3 class=" text-tertiary text-3xl font-bold "><?php the_title() ?>
                </h3>
                <p class="mt-6 leading-7 ">
                    <?php
                    the_content();
                    ?>
                </p>

            </div>
        </div>

    </div>
</section>