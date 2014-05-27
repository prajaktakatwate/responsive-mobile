<?php
/**
 * Template Name: Content/Sidebar Half Page
 *
 * Template for pages
 *
 * @package            ${PACKAGE}
 * @license            license.txt
 * @copyright          ${YEAR} ${COMPANY}
 * @since              ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

get_header(); ?>

	<div id="content" class="content-area">
			<main id="main" class="site-main content-sidebar-half" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main>
			<!-- #main -->

			<?php get_sidebar( 'right-half' ); ?>
	</div>
	<!-- #content -->
<?php get_footer(); ?>