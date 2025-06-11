<?php
/**
 * Options d'en-tête.
 *
 * @package The_BLIP
 */

$wp_customize->add_section( 'header_section',
    array(
    'title'      => esc_html__( 'Header Setting', 'the-blip' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('ed_header_search',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_header_search',
    array(
        'label' => esc_html__('Enable Search', 'the-blip'),
        'section' => 'header_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ta_header_layout',
    array(
        'default' => '1',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control('ta_header_layout',
    array(
        'label' => esc_html__('Header Layout', 'the-blip'),
        'section' => 'header_section',
        'type' => 'select',
        'choices' => array(
            '1' => esc_html__('Layout One', 'the-blip'),
            '2' => esc_html__('Layout Two', 'the-blip'),
            '3' => esc_html__('Layout Three', 'the-blip'),
        )
    )
);
