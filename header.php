<?php
/**
 * En-tête du thème.
 *
 * Affiche la balise <head> et tout jusqu'à <div id="content">.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_BLIP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gradient-to-br from-blue-200 via-purple-200 to-pink-200 text-gray-900'); ?>>

	<?php
	if( function_exists('wp_body_open') ){
		wp_body_open();
	}else{

		do_action( 'wp_body_open' );

	}
	
	$ed_preloader = get_theme_mod('ed_preloader',1);
	if( $ed_preloader ){ ?>

		<div class="ta-preloader">
			<div class="ta-ripple">
				<div></div><div></div>
			</div>
		</div>
		
	<?php } ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-blip' ); ?></a>

		<?php 
		$ta_header_layout = get_theme_mod('ta_header_layout',1);
		get_template_part( 'template-parts/header/header', $ta_header_layout );
		
		if( !is_home() && !is_front_page() ){ ?> 

                        <div class="ta-breadcrumb-container">
                                <div class="ta-container glass-container clearfix container mx-auto px-4">

					<?php breadcrumb_trail(); ?>

					<header class="page-header">
						<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
					</header><!-- .page-header -->

				</div>
			</div>

		<?php }

		if( is_front_page() ){
			
			$ta_header_banner_layout = get_theme_mod('ta_header_banner_layout',1);
			get_template_part( 'template-parts/banner/banner', $ta_header_banner_layout );

			the_words_featured_category();

			/**
		     * the_words_subscribe - 10
		    **/
		    do_action('the_words_header_content','the_words_subscribe');
		}

		?>

		<div id="content" class="site-content">