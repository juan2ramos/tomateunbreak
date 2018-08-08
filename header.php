<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-16x16.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto:300,400,500,700,900" rel="stylesheet">
    <meta name="description" content="<?php if (is_single()) {
        single_post_title('', true);
    } else {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    }
    ?>"/>
    <?php wp_head() ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_red.css"
</head>
<body <?php body_class(); ?> data-url="<?php echo site_url(); ?>" id="body">
<header>
    <div class="Header-container row ">
        <div class="Header-left row justify-end">
            <figure class="Logo row align-center">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>/public/images/logo.png" alt=""></a>
            </figure>
        </div>
        <div class="Header-right">
            <div>
                <div>
                    <div class="row justify-end">
                        <ul class="Nav-Lang is-list-less row align-center">
                            <li><a href="" >
                                    <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="iconfrance" fill-rule="nonzero">
                                                <circle id="Oval" fill="#EFEFEF" cx="15" cy="15" r="15"></circle>
                                                <path d="M30,15 C30,8.6 25.9,3.1 20.2,0.9 L20.2,29 C25.9,26.9 30,21.4 30,15 Z" id="Shape" fill="#FB0023"></path>
                                                <path d="M0,15 C0,21.4 4.1,26.9 9.8,29.1 L9.8,0.9 C4.1,3.1 0,8.6 0,15 Z" id="Shape" fill="#0051B7"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>FRANÇAIS</span>
                                </a></li>
                            <li><a href="">
                                    <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="iconengland" fill-rule="nonzero">
                                                <circle id="Oval" fill="#EFEFEF" cx="15" cy="15" r="15"></circle>
                                                <g id="Group" fill="#0051B7">
                                                    <path d="M3.1,5.9 C1.9,7.4 1,9.2 0.5,11.1 L8.3,11.1 L3.1,5.9 Z" id="Shape"></path>
                                                    <path d="M29.5,11.1 C29,9.2 28.1,7.4 26.9,5.9 L21.7,11.1 L29.5,11.1 Z" id="Shape"></path>
                                                    <path d="M0.5,18.9 C1,20.8 1.9,22.6 3.1,24.1 L8.3,18.9 L0.5,18.9 Z" id="Shape"></path>
                                                    <path d="M24.1,3.1 C22.6,1.9 20.8,1 18.9,0.5 L18.9,8.3 L24.1,3.1 Z" id="Shape"></path>
                                                    <path d="M5.9,26.9 C7.4,28.1 9.2,29 11.1,29.5 L11.1,21.7 L5.9,26.9 Z" id="Shape"></path>
                                                    <path d="M11.1,0.5 C9.2,1 7.4,1.9 5.9,3.1 L11.1,8.3 L11.1,0.5 Z" id="Shape"></path>
                                                    <path d="M18.9,29.5 C20.8,29 22.6,28.1 24.1,26.9 L18.9,21.7 L18.9,29.5 Z" id="Shape"></path>
                                                    <path d="M21.7,18.9 L26.9,24.1 C28.1,22.6 29,20.8 29.5,18.9 L21.7,18.9 Z" id="Shape"></path>
                                                </g>
                                                <g id="Group" fill="#FB0023">
                                                    <path d="M29.9,13 L17,13 L17,0.1 C16.3,0 15.7,0 15,0 C14.3,0 13.7,0 13,0.1 L13,13 L0.1,13 C0,13.7 0,14.3 0,15 C0,15.7 0,16.3 0.1,17 L13,17 L13,29.9 C13.6,30 14.3,30 15,30 C15.7,30 16.3,30 17,29.9 L17,17 L29.9,17 C30,16.4 30,15.7 30,15 C30,14.3 30,13.7 29.9,13 Z" id="Shape"></path>
                                                    <path d="M18.9,18.9 L25.6,25.6 C25.9,25.3 26.2,25 26.5,24.6 L20.8,18.9 L18.9,18.9 Z" id="Shape"></path>
                                                    <path d="M11.1,18.9 L4.4,25.6 C4.7,25.9 5,26.2 5.4,26.5 L11.1,20.8 L11.1,18.9 Z" id="Shape"></path>
                                                    <path d="M11.1,11.1 L4.4,4.4 C4.1,4.7 3.8,5 3.5,5.4 L9.2,11.1 L11.1,11.1 Z" id="Shape"></path>
                                                    <path d="M18.9,11.1 L25.6,4.4 C25.3,4.1 25,3.8 24.6,3.5 L18.9,9.2 L18.9,11.1 Z" id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>ENGLISH</span>
                                </a></li>
                            <li><a href="">
                                    <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="iconcolombia" fill-rule="nonzero">
                                                <path d="M0,15 C0,6.7 6.7,0 15,0 C23.3,0 30,6.7 30,15 L15,16.3 L0,15 Z" id="Shape" fill="#FFDA2D"></path>
                                                <path d="M2,22.5 C4.6,27 9.4,30 15,30 C20.6,30 25.4,27 28,22.5 L15,21.5 L2,22.5 Z" id="Shape" fill="#FB0023"></path>
                                                <path d="M28,22.5 C29.3,20.3 30,17.7 30,15 L0,15 C0,17.7 0.7,20.3 2,22.5 L28,22.5 Z" id="Shape" fill="#0051B7"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>ESPAÑOL</span>
                                </a></li>
                        </ul>
                    </div>
                    <nav class="row justify-end Nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' )  ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


