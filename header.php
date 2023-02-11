<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    if (function_exists('the_custom_logo')) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
    ?>
</head>

<body class="min-w-[260]">
    <header class="min-h-20  bg-purple text-hwite flex flex-col md:flex-row items-center justify-between px-3 border-b">
        <a href="/"><img src="<?php echo $logo[0] ?>" class="max-h-[120] rounded-full" alt=""></a>

        <div id="menu-links" class="hidden  grid-cols-1 grid-rows-[auto,1fr]  px-6 text-center md:flex md:justify-between md:w-full ">

            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'menu_class' => "flex items-center justify-between",
                'theme_locatione' => 'primary'
            ))
            ?>

            <div class="rows-start-2 py-3">
                <?php
                get_search_form();
                ?>
            </div>
        </div>
        <i class="fa-solid fa-bars fa-2xl flex items-center h-12 mt-3 md:hidden" onclick="showmenu()">
        </i>



    </header>
    <main class=" bg-purple  text-hwite overflow-hidden min-h-screen ">