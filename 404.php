<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Silfurgen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found error-background">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'silfurgen' ); ?></h1>
		                </div>
		                
		            </div>
		        </div>
		    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
