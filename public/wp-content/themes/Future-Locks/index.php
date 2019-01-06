<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mystery Themes
 * @subpackage Easy Store
 * @since 1.0.0
 */

get_header(); ?>

<?php
	if( is_front_page() ) {
		$easy_store_homepage_content_status = get_theme_mod( 'easy_store_homepage_content_status', true );
?>
<!-- front page main content -->
<div>adding text feafe here</div>
<?php
	} else {
		$easy_store_homepage_content_status = apply_filters( 'easy_store_filter_index_content', true );
	}
	if ( true === $easy_store_homepage_content_status ) {
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
		/**
	     * easy_store_sidebar hook
	     *
	     * @hooked - easy_store_add_sidebar - 5
	     *
	     * @since 1.0.0
	     */
	?>

<?php } // End if show home content. ?>

<?php
get_footer();
