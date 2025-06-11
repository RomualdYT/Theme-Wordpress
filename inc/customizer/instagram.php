 * The BLIP! Subescribe
 * @package The_BLIP
    'title'      => esc_html__( 'Section Instagram', 'the-blip' ),
        'label' => esc_html__('Activer la section Instagram', 'the-blip'),
        'label' => esc_html__('Shortcode Instagram', 'the-blip'),
        'description' => esc_html__('Installez le plugin "Social Feed Gallery" pour le flux Instagram.', 'the-blip'),
        'label' => esc_html__('Afficher uniquement sur la page d\'accueil', 'the-blip'),
        'description' => esc_html__('En activant cette option, le flux Instagram ne s\'affichera que sur la page d\'accueil.', 'the-blip'),
 * @package The_Words
 */

$wp_customize->add_section( 'instagram_section',
    array(
    'title'      => esc_html__( 'Instagram Section', 'the-words' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'the_words_home_panel',
    )
);

$wp_customize->add_setting('ed_instagram_section',
    array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_instagram_section',
    array(
        'label' => esc_html__('Enable Instagram Section', 'the-words'),
        'section' => 'instagram_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('instagram_shortcode',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('instagram_shortcode',
    array(
        'label' => esc_html__('Instagram Shortcode', 'the-words'),
        'description' => esc_html__('Please install "Social Feed Gallery" plugin for Instagram Feed.', 'the-words'),
        'section' => 'instagram_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting('ed_show_on_home_only',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_show_on_home_only',
    array(
        'label' => esc_html__('Show on Hompage Only', 'the-words'),
        'description' => esc_html__('By enabling option you can show instagram feed only on home page.', 'the-words'),
        'section' => 'instagram_section',
        'type' => 'checkbox',
    )
);