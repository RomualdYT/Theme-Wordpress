<?php
/**
 * Section d'inscription.
 *
 * @package The_BLIP
 */

$wp_customize->add_section( 'subscribe_section',
    array(
    'title'      => esc_html__( 'Subscribe Section', 'the-blip' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'the_words_home_panel',
    )
);

$wp_customize->add_setting('ed_subscribe_section',
    array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_subscribe_section',
    array(
        'label' => esc_html__('Enable Subscribe Section', 'the-blip'),
        'section' => 'subscribe_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('subscribe_form_title',
    array(
        'default' => esc_html__('Subscribe Us For Latest News', 'the-blip'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('subscribe_form_title',
    array(
        'label' => esc_html__('Subscribe Section Title', 'the-blip'),
        'section' => 'subscribe_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting('subscribe_form_description',
    array(
        'default' => esc_html__('It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'the-blip'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('subscribe_form_description',
    array(
        'label' => esc_html__('Subscribe Section Description', 'the-blip'),
        'section' => 'subscribe_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting('subscribe_form_shortcode',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('subscribe_form_shortcode',
    array(
        'label' => esc_html__('Subscribe Form Shortcode', 'the-blip'),
        'description' => esc_html__('Please install "MC4WP: Mailchimp for WordPress" plugin for mailchimp form.', 'the-blip'),
        'section' => 'subscribe_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting('ed_subscribe_section_at_top',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_subscribe_section_at_top',
    array(
        'label' => esc_html__('Show at Top', 'the-blip'),
        'description' => esc_html__('This section will be display on the footer on default setting.', 'the-blip'),
        'section' => 'subscribe_section',
        'type' => 'checkbox',
    )
);