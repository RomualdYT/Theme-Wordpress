<?php
/**
 * Modèle pour la page 404.
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The_BLIP
 */

get_header();
?>
<div class="ta-container container mx-auto px-4">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<header class="page-header">
                                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'the-blip' ); ?></h1>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
