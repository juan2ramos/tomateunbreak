<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/public/images/favicon.ico" type="image/x-icon"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
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
<header class="Header">
    <div class=" row container justify-between">
        <figure class="Header-image">
            <img src="<?php bloginfo('template_url') ?>/public/images/logo-refribreak.png" alt="">
        </figure class>
        <form action="" class="Header-search">
            <input type="text" name="" placeholder="Buscar">
            <button type="submit">

                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="active-search" fill="#F78711" fill-rule="nonzero">
                            <path d="M16.7797772,2.8824466 C12.94646,-0.960699029 6.70872639,-0.960699029 2.87506053,2.8824466 C-0.958372881,6.72500971 -0.958372881,12.9778835 2.87506053,16.8204466 C6.57722034,20.5318252 12.5209685,20.6580583 16.3767748,17.2016505 L17.1562228,17.9829903 C16.9621308,18.4816311 17.0638257,19.0678252 17.4648523,19.4700583 L21.578092,23.5932816 C22.1188184,24.1356117 22.9958354,24.1353204 23.5362131,23.5932816 C24.07723,23.0515922 24.07723,22.1726796 23.5362131,21.6304078 L19.4232639,17.507767 C19.0220048,17.1058835 18.4360678,17.0038835 17.9395061,17.1983883 L17.1600581,16.416466 C20.6083874,12.5513592 20.4821114,6.59347573 16.7797772,2.8824466 Z M4.05024697,15.6430485 C0.864639225,12.4497087 0.864639225,7.25382524 4.05024697,4.06048544 C7.23585472,0.866504854 12.4192736,0.867145631 15.6048814,4.06048544 C18.7904891,7.25382524 18.7904891,12.45 15.6048814,15.6433398 C12.4192736,18.8366796 7.23585472,18.8363883 4.05024697,15.6430485 Z" id="Shape"></path>
                            <path d="M5.99128329,5.93458252 C7.38270218,4.53943689 8.99994189,3.52695146 10.7004552,2.89561165 C8.77388862,2.78574757 6.71052785,3.53720388 5.12705085,5.12394175 C3.52178208,6.7332233 2.77423729,8.83730097 2.91056659,10.7920194 C3.53555448,9.0371068 4.56238257,7.36660194 5.99128329,5.93458252 Z" id="Shape"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </form>
    </div>
</header>


