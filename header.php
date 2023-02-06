<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="min-h-20  bg-purple text-center text-hwite  group">
        <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
        </button>
        <div class=" w-full  gmd:block h-20 flex items-center justify-around px-6 ">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <a href="/"><img src="<?php echo $logo[0] ?>" class="h-14 rounded-full" alt=""></a>

            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'menu_class' => "flex items-center justify-between grow px-10",
                'container' => "",
                'theme_locatione' => 'primary'
            ))
            ?>

        </div>
        <div class="p-5 ">
            <?php
            get_search_form();
            ?>
        </div>

    </header>
    <main class=" bg-purple  text-hwite overflow-hidden min-h-screen ">