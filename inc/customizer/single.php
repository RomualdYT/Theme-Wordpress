 * The BLIP! Footer Optionl
 * @package The_BLIP
    'title'      => esc_html__( "Paramètres de l'article", 'the-blip' ),
        'label' => esc_html__('Activer la boîte auteur', 'the-blip'),
        'description' => esc_html__('Option pour afficher la boîte auteur sur les articles.', 'the-blip'),
        'label' => esc_html__('Activer les articles similaires', 'the-blip'),
        'description' => esc_html__('Option pour afficher des articles similaires.', 'the-blip'),
        'default' => esc_html__('Articles similaires', 'the-blip'),
        'label' => esc_html__('Titre de la section des articles similaires', 'the-blip'),
        'label' => esc_html__('Activer la catégorie', 'the-blip'),
        'description' => esc_html__('Option valable pour tous les articles.', 'the-blip'),
        'label' => esc_html__('Afficher l\'auteur', 'the-blip'),
        'description' => esc_html__('Option valable pour tous les articles.', 'the-blip'),
        'label' => esc_html__('Afficher la date de publication', 'the-blip'),
        'description' => esc_html__('Option valable pour tous les articles.', 'the-blip'),
        'label' => esc_html__('Afficher l\'extrait', 'the-blip'),
        'description' => esc_html__('Option valable pour tous les articles.', 'the-blip'),

    'title'      => esc_html__( 'Post Setting', 'the-words' ),
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('ed_author_box',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_author_box',
    array(
        'label' => esc_html__('Enable Author Box', 'the-words'),
        'description' => esc_html__('This option will work for single posts author box.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ed_related_posts',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_related_posts',
    array(
        'label' => esc_html__('Enable Related Posts', 'the-words'),
        'description' => esc_html__('This option will work for single post related post.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ed_related_post_title',
    array(
        'default' => esc_html__('Related Posts', 'the-words'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('ed_related_post_title',
    array(
        'label' => esc_html__('Related Posts Section Title', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'text',
    )
);

$wp_customize->add_setting('ed_post_category',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_post_category',
    array(
        'label' => esc_html__('Enable Category', 'the-words'),
        'description' => esc_html__('This option will work for all posts.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ed_post_author',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_post_author',
    array(
        'label' => esc_html__('Enable Author', 'the-words'),
        'description' => esc_html__('This option will work for all posts.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ed_post_date',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_post_date',
    array(
        'label' => esc_html__('Enable Posted Date', 'the-words'),
        'description' => esc_html__('This option will work for all posts.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('ed_post_excerpt',
    array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'the_words_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_post_excerpt',
    array(
        'label' => esc_html__('Enable Post Excerpt', 'the-words'),
        'description' => esc_html__('This option will work for all posts.', 'the-words'),
        'section' => 'single_post_section',
        'type' => 'checkbox',
    )
);