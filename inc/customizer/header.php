 * The BLIP! Header Optionl
 * @package The_BLIP
    'title'      => esc_html__( "Paramètres d'en-tête", 'the-blip' ),
        'label' => esc_html__('Activer la recherche', 'the-blip'),
        'label' => esc_html__("Mise en page de l'en-tête", 'the-blip'),
            '1' => esc_html__('Mise en page 1', 'the-blip'),
            '2' => esc_html__('Mise en page 2', 'the-blip'),
            '3' => esc_html__('Mise en page 3', 'the-blip'),
 * @package The_Words
 */

$wp_customize->add_section( 'header_section',
    array(
    'title'      => esc_html__( 'Header Setting', 'the-words' ),
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
        'label' => esc_html__('Enable Search', 'the-words'),
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
        'label' => esc_html__('Header Layout', 'the-words'),
        'section' => 'header_section',
        'type' => 'select',
        'choices' => array(
            '1' => esc_html__('Layout One', 'the-words'),
            '2' => esc_html__('Layout Two', 'the-words'),
            '3' => esc_html__('Layout Three', 'the-words'),
        )
    )
);
