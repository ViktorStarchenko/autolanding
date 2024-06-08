<?php
if (function_exists('acf_register_block_type_banner')) {
    add_action('acf/init', 'acf_register_block_type_banner');
}

function acf_register_block_type_banner() {
    acf_register_block_type(
        array(
            'name' => 'banner',
            'title' => __('Custom Banner'),
            'description' => __('Custom Banner'),
            'render_template' => 'template-parts/gutenberg-blocks/gutenberg-banner.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('banner', 'product', 'post', 'page'),
        )
    );
}

if (function_exists('acf_register_block_type_about')) {
    add_action('acf/init', 'acf_register_block_type_about');
}

function acf_register_block_type_about() {
    acf_register_block_type(
        array(
            'name' => 'about',
            'title' => __('Custom About'),
            'description' => __('Custom About'),
            'render_template' => 'template-parts/gutenberg-blocks/gutenberg-about.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('about', 'product', 'post', 'page'),
        )
    );
}

if (function_exists('acf_register_block_type_why_we')) {
    add_action('acf/init', 'acf_register_block_type_why_we');
}

function acf_register_block_type_why_we() {
    acf_register_block_type(
        array(
            'name' => 'why_we',
            'title' => __('Custom Why We'),
            'description' => __('Custom Why We'),
            'render_template' => 'template-parts/gutenberg-blocks/gutenberg-why-we.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('why_we', 'product', 'post', 'page'),
        )
    );
}

if (function_exists('acf_register_block_type_faq')) {
    add_action('acf/init', 'acf_register_block_type_faq');
}

function acf_register_block_type_faq() {
    acf_register_block_type(
        array(
            'name' => 'faq',
            'title' => __('Custom FAQ'),
            'description' => __('Custom FAQ'),
            'render_template' => 'template-parts/gutenberg-blocks/gutenberg-faq.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('faq', 'product', 'post', 'page'),
        )
    );
}

if (function_exists('acf_register_block_type_simple_content')) {
    add_action('acf/init', 'acf_register_block_type_simple_content');
}

function acf_register_block_type_simple_content() {
    acf_register_block_type(
        array(
            'name' => 'simple_content',
            'title' => __('Custom Simple Content'),
            'description' => __('Custom Simple Content'),
            'render_template' => 'template-parts/gutenberg-blocks/gutenberg-simple-content.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('simple_content', 'product', 'post', 'page'),
        )
    );
}