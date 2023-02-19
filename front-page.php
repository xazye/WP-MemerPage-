<?php
get_header();
?>
<section class="max-w-[1100px] mx-auto ">
    <?php while (have_posts()) {
        the_post();
        get_template_part('template-parts/front', 'post');
    }
    the_posts_pagination();

    ?>
</section>
<?php
get_footer();
?>