<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header class="header" id="header" role="banner">
<!--<div id="branding">-->
<!--<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">-->
    <?php get_template_part('template-parts/header/header', 'menu'); ?>
</header>
<div id="container">
<main id="content" role="main">