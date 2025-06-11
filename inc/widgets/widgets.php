<?php
/**
 * Widgets pour The BLIP.
 *
 * @package The_BLIP
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_words_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-blip' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-blip' ),
               'before_widget' => '<section id="%1$s" class="widget glass-card p-4 bg-white/70 backdrop-blur border border-white/30 shadow %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
                'name'          => esc_html__( 'Footer One', 'the-blip' ),
                'id'            => 'the-blip-footer-1',
                'description'   => esc_html__( 'Add widgets here.', 'the-blip' ),
               'before_widget' => '<section id="%1$s" class="widget glass-card p-4 bg-white/70 backdrop-blur border border-white/30 shadow %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
                'name'          => esc_html__( 'Footer Two', 'the-blip' ),
                'id'            => 'the-blip-footer-2',
                'description'   => esc_html__( 'Add widgets here.', 'the-blip' ),
               'before_widget' => '<section id="%1$s" class="widget glass-card p-4 bg-white/70 backdrop-blur border border-white/30 shadow %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
                'name'          => esc_html__( 'Footer Three', 'the-blip' ),
                'id'            => 'the-blip-footer-3',
                'description'   => esc_html__( 'Add widgets here.', 'the-blip' ),
               'before_widget' => '<section id="%1$s" class="widget glass-card p-4 bg-white/70 backdrop-blur border border-white/30 shadow %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'the_words_widgets_init' );


/**
 * Widget Fields.
 */
require get_template_directory() . '/inc/widgets/widget-fields.php';
require get_template_directory() . '/inc/widgets/author.php';
require get_template_directory() . '/inc/widgets/recent-news.php';
require get_template_directory() . '/inc/widgets/category.php';