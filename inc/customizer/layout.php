<?php
/**
 * Options de mise en page.
 *
 * @package The_BLIP
 */

$wp_customize->add_section( 'layout_section',
    array(
    'title'      => esc_html__( 'Layout Setting', 'the-blip' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('global_post_sidebar_layout',
    array(
        'default' => 'right-sidebar',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_sidebar',
    )
);
$wp_customize->add_control('global_post_sidebar_layout',
    array(
        'label' => esc_html__('Global Posts Sidebar Layout', 'the-blip'),
        'section' => 'layout_section',
        'type' => 'select',
        'choices' => array(
            'right-sidebar' => esc_html__('Right Sidebar', 'the-blip'),
            'left-sidebar' => esc_html__('Left Sidebar', 'the-blip'),
            'no-sidebar' => esc_html__('No Sidebar', 'the-blip'),
        )
    )
);

$wp_customize->add_setting('global_page_sidebar_layout',
    array(
        'default' => 'right-sidebar',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_sidebar',
    )
);
$wp_customize->add_control('global_page_sidebar_layout',
    array(
        'label' => esc_html__('Global Pages Sidebar Layout', 'the-blip'),
        'section' => 'layout_section',
        'type' => 'select',
        'choices' => array(
            'right-sidebar' => esc_html__('Right Sidebar', 'the-blip'),
            'left-sidebar' => esc_html__('Left Sidebar', 'the-blip'),
            'no-sidebar' => esc_html__('No Sidebar', 'the-blip'),
        )
    )
);

$wp_customize->add_setting('global_sidebar_layout',
    array(
        'default' => 'right-sidebar',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_sidebar',
    )
);
$wp_customize->add_control('global_sidebar_layout',
    array(
        'label' => esc_html__('Global Sidebar Layout', 'the-blip'),
        'section' => 'layout_section',
        'type' => 'select',
        'choices' => array(
            'right-sidebar' => esc_html__('Right Sidebar', 'the-blip'),
            'left-sidebar' => esc_html__('Left Sidebar', 'the-blip'),
            'no-sidebar' => esc_html__('No Sidebar', 'the-blip'),
        )
    )
);

$wp_customize->add_setting('ta_archive_layout',
    array(
        'default' => 'simple',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_archive_layout',
    )
);
$wp_customize->add_control('ta_archive_layout',
    array(
        'label' => esc_html__('Archive Page Layout', 'the-blip'),
        'section' => 'layout_section',
        'type' => 'select',
        'choices' => array(
            'grid' => esc_html__('Simple Grid Layout', 'the-blip'),
            'simple' => esc_html__('Full Width Layout', 'the-blip'),
            'masonry' => esc_html__('Masonry Layout', 'the-blip'),
        )
    )
);