<div class="single-post ">
    <article>
        <header>
            <?php the_author() ?>
            <?php $postedAt = new DateTime(get_the_date());
            $postedAtDiff = $postedAt->diff(new DateTime());
            if ($postedAtDiff->format('%a') == 0) {
                echo $postedAtDiff->format('%hh');
            } else {
                echo $postedAtDiff->format('%ad');
            } ?>
            <a href="<?php echo esc_url(get_permalink()) ?>">
                <h3 class=" text-tertiary text-3xl font-bold"><?php the_title() ?></h3>
            </a>
        </header>
        <div id="post-content">
            <a href="<?php echo esc_url(get_permalink()) ?>">
                <picture>
                    <source srcset="<?php echo get_the_post_thumbnail_url() ?>">
                    <img class="w-[100%]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/not-available.jpg') ?>">

                </picture>

            </a>
        </div>
        <div class="post-tags ">
            <?php
            the_tags('', '', '') ?></div>
        <div class="post-action flex justify-center">
            <a class="btn-upvote "><i class="fa-solid fa-caret-up font-semibold text-3xl mr-2"></i> 7k</a>
            <a class="btn-downvote "><i class="fa-solid fa-caret-down font-semibold text-3xl mr-2"></i>464</a>
            <a class="btn-comments" href="<?php echo esc_url(get_permalink() . '#comments') ?>"><i class="fa-solid fa-message  font-semibold  mr-2"></i><?php echo get_comments_number(); ?></a>


        </div>
    </article>
</div>