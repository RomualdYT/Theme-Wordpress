<?php
/**
 * Modèle pour l'affichage des pages.
 *
 * Utilisé pour toutes les pages par défaut.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_BLIP
 */

get_header();

global $post;
$global_sidebar_layout = get_theme_mod('global_page_sidebar_layout','right-sidebar');
$the_words_post_sidebar = get_post_meta( $post->ID, 'the_words_post_sidebar_layout', true );

if( $the_words_post_sidebar == 'global' || $the_words_post_sidebar == '' ){

	$sidebar = $global_sidebar_layout;

}else{
	$sidebar = $the_words_post_sidebar;
}

?>
<div class="ta-container glass-container clearfix container mx-auto px-4">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if( $sidebar != 'no-sidebar' ){ get_sidebar(); } ?>

</div>
<?php
get_footer();