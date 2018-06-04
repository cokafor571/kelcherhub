<?php
/**
 * The template for displaying contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starterpack
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="contact-page"> <!-- contact container -->

                <section class="contact-header"> <!-- contact header -->

                    <?php $image = get_field('contact_header_picture'); ?> <!-- desktop contact header picture -->

                    <div class="picture-header" style="background: url(<?php echo $image['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('contact_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('contact_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('contact_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('contact_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end desktop contact header picture -->

                    <?php $imagem = get_field('contact_header_picture_mobile'); ?> <!-- mobile contact header picture -->

                    <div class="picture-header-mobile" style="background: url(<?php echo $imagem['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('contact_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('contact_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('contact_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('contact_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end mobile contact header picture-->

                </section> <!-- end contact header -->

                <section class="contact-content-container"> <!-- contact content container -->

                    <section class="contact-form-container"> <!-- contact form container -->

                        <?php if( get_field('contact_form_title') ): ?>
                            <h2 class="title"><?php the_field('contact_form_title'); ?></h2>
                        <?php endif;

                        if( get_field('contact_form_description') ): ?>
                            <p class="contact-form-description"><?php the_field('contact_form_description'); ?></p>
                        <?php endif;

                        if( get_field('contact_form_wysiwyg') ):
                            the_field('contact_form_wysiwyg');
                        endif; ?> 

                    </section> <!-- end contact form container -->

                    <section class="contact-info-container"> <!-- contact info container -->

                        <?php if( get_field('contact_info_wysiwyg') ):
                            the_field('contact_info_wysiwyg');
                        endif;

                        if( get_field('contact_map_wysiwyg') ):
                            the_field('contact_map_wysiwyg');
                        endif; ?> 

                    </section> <!-- end contact info container -->

                </section> <!--end contact content container -->

            </div> <!--end contact page -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();