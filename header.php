<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-between align-items-center position-relative">
                    <div class="col-auto py-3">
                        <?php echo get_custom_logo();?>
                    </div>
                    <div class="col-auto">
                        <a><img src="<?php echo get_template_directory_uri();?>/assets/icons/menu.svg" class="d-inline-block d-lg-none" id="main-menu-btn"></a>
                    </div>
                    <div class="col-12 col-md-auto d-flex justify-content-center">
                        <?php wp_nav_menu(['theme_location'=>'primary', 'menu_class'=>'d-none flex-column flex-md-row d-lg-inline-flex align-items-center justify-content-end list-style-type-none text-decoration-none font-bold m-0 p-0', 'menu_id'=>'main-menu']);?>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
    </header>