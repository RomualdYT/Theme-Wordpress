<?php
/**
 * Modèle pour afficher le pied de page.
 *
 * Contient la fermeture de #content et tout ce qui suit.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_BLIP
 */

    /**
     * the_words_single_related_post - 10
     * the_words_subscribe - 20
     * the_words_instagram - 30
    **/
    do_action('the_words_footer_content','the_words_subscribe');
    ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-gray-100 text-gray-800" itemscope itemtype="http://schema.org/WPFooter">

        <?php
        $ed_footer_social_icon = get_theme_mod('ed_footer_social_icon',1);
        $footer_background_image = get_theme_mod('footer_background_image');
        if( 
            is_active_sidebar('the-blip-footer-1') ||
            is_active_sidebar('the-blip-footer-2') ||
            is_active_sidebar('the-blip-footer-3') ||
        	$ed_footer_social_icon){
            echo '<div class="top-footer" style="background-image:url('.esc_url( $footer_background_image ).')">';
            echo '<div class="ta-container glass-container clearfix container mx-auto px-4">';

            if( has_nav_menu('the-blip-footer-menu') ):

            	echo '<div class="ta-footer-menu">';
	            wp_nav_menu( array(
					'theme_location' => 'the-blip-footer-menu',
					'menu_id'        => 'footer-menu',
					'depth'			 => 1,
				) );
				echo '</div>';

	        endif;

			if( $ed_footer_social_icon ){
				echo '<div class="ta-footer-social-icon">';
				do_action('the_words_social_icon_action');
				echo '</div>';
			}

            if( is_active_sidebar('the-blip-footer-1') || is_active_sidebar('the-blip-footer-2') || is_active_sidebar('the-blip-footer-3') ){

    			echo '<div class="footer-widget-area">';
                for ($x = 0; $x <= 3; $x++) {
                    if( is_active_sidebar('the-blip-footer-'.$x) ){

                        echo '<div id="ta-footer-widget-' . esc_attr( $x ) . '" class="ta-footer-widget glass-card p-4 bg-white/70 backdrop-blur border border-white/30 shadow">';
                            dynamic_sidebar('the-blip-footer-'.$x);
                        echo '</div>';

                    }
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

        } ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php $ed_footer_go_top_button = get_theme_mod('ed_footer_go_top_button',1);
    if( $ed_footer_go_top_button ){ ?>

    <span id="ta-go-top" class="ta-off"><i class="fa fa-angle-up" aria-hidden="true"></i></span>

<?php } ?>

<div id="dynamic-css"></div>

<?php wp_footer(); ?>

</body>
</html>
