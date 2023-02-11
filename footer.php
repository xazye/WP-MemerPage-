<?php wp_footer() ?>
</main>
<footer class="relative bg-purple border-t  text-hwite">
    <div class="mx-6 flex items-center justify-between min-h-32">
        <p class="py-6">Foota</p>
        <p class="py-6">second</p>

        <?php if (is_active_sidebar('footer_1')) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar('footer_1'); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>

    </div>
</footer>


</body>

</html>