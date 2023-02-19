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
    <!-- The Modal -->
    <div id="myModal" class="hidden fixed z-10 w-full h-full overflow-auto bg-bblack bg-opacity-95">
        <!-- Modal content -->
        <div class="my-3 mx-auto px-5 flex flex-row  items-center">
            <i onclick="(function closeModal(){document.getElementById('myModal').style.display = 'none'})()" class="fa-solid fa-arrow-left text-2xl pr-4 text-secondary close"></i>
            <i class="fa-solid fa-magnifying-glass absolute left-16 top-5"></i>

            <div class="grow">
                <!-- add dynamic searching w/ js prolly use get_search_query   or fetch-->
                <?php
                get_search_form();
                ?>
            </div>

        </div>

    </div>
    <header class="min-h-20  bg-bblack text-hwite border-b">
        <div class="flex  md:flex-row items-center justify-between px-3 ">
            <!-- Menu Trigger -->

            <i id="openbtn" class="fa-solid fa-bars fa-2xl flex items-center h-12 md:hidden" onclick="(function openNav(){document.getElementById('mySidebar').style.width='250px' ;})()">
            </i>

            <!-- logo -->
            <a href="/"><img width="60px" class="rounded-full" src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" /></a>

            <!-- Modal Trigger-->
            <i id="myBtn" onclick="(function openModal()
            {document.getElementById('myModal').style.display='block'})()" class="fa-solid fa-magnifying-glass md:hidden"></i>

            <!-- Menu content -->
            <div id="mySidebar" class="sidebar">
                <p>Popular tags</p>

                <?php
                wp_tag_cloud(array("number" => "10", "orderby" => 'count', "order" => "DESC"));        ?>


            </div>
        </div>
        <ul class="flex flex-row justify-between">
            <?php
            wp_nav_menu(array(
                'menu' => 'primary',
                'menu_class' => "",
                "container" => false,
                'items_wrap' => '%3$s',
                'theme_location' => 'primary'
            ))
            ?>
        </ul>

    </header>
    <main class=" bg-bblack text-hwite overflow-hidden min-h-screen ">