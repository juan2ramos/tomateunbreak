<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/public/images/favicon.ico" type="image/x-icon"/>
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
</header>


