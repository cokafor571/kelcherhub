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

            <div class="business-plan-page"> <!-- business plan container -->

                <section class="business-plan-content"> <!-- business plan content -->

                    <?php if( get_field('business_resources_title') ): ?>
                        <h2><?php the_field('business_resources_title'); ?></h2>
                    <?php endif; ?> 

                    <div class="business-resource-cards">

                        <?php if( have_rows('business_resources') ): ?>

                            <?php while ( have_rows('business_resources') ) : the_row(); ?>

                                <div class="business-resource-card"> 

                                    <?php $image = get_sub_field('business_resource_picture'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                    <div class="business-resource-title-container">

                                        <?php $link = get_sub_field('business_resource_link');

                                        if( $link ): ?>
                                            
                                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                                <?php echo $link['title']; ?>
                                            </a>
                                        
                                        <?php endif; ?>
                                        
                                    </div> <!-- end business resource title container -->

                                </div>  <!-- end business resource card -->

                            <?php endwhile;  ?>

                        <?php else : ?>

                            <p>Our approach is tried and tested</p>

                        <?php endif; ?>

                    </div> <!-- end business resource cards -->

                </section> <!--end business plan content container -->

            </div> <!--end business plan page -->

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