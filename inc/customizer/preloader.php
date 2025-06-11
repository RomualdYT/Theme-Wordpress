<?php
/**
 * @package The_BLIP
 */

$wp_customize->add_section( 'ta_preloader_section',
    array(
    'title'      => esc_html__( 'Preloader Setting', 'the-blip' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('ed_preloader',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_preloader',
    array(
        'label' => esc_html__('Enable Preloader', 'the-blip'),
        'section' => 'ta_preloader_section',
        'type' => 'checkbox',
    )
);