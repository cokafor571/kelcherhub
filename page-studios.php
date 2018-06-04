<?php
/**
 * The template for displaying studios page
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

            <div class="studios-page"> <!-- studios container -->

                <section class="studios-header"> <!-- studios header -->

                    <?php $image = get_field('studios_header_picture'); ?> <!-- desktop studios header picture -->

                    <div class="picture-header" style="background: url(<?php echo $image['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('studios_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('studios_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('studios_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('studios_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end desktop studios header picture -->

                    <?php $imagem = get_field('studios_header_picture_mobile'); ?> <!-- mobile studios header picture -->

                    <div class="picture-header-mobile" style="background: url(<?php echo $imagem['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('studios_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('studios_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('studios_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('studios_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end mobile studios header picture-->

                </section> <!-- end studios header -->

                <section class="our-studios"> <!-- studio list -->

                    <?php if( get_field('our_studios_title') ): ?>
                        <h2 class="title"><?php the_field('our_studios_title'); ?></h2>
                    <?php endif; ?>

                    <div class="studios-block">

                        <?php if( have_rows('studios') ): ?>

                            <?php while ( have_rows('studios') ) : the_row(); ?>

                                <div class="individual-studios"> 

                                    <?php $image = get_sub_field('studio_image'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                    <div class="studio-content-container">

                                        <?php if( get_sub_field('studio_title') ): ?>
                                            <h3 class="studio-title"><?php the_sub_field('studio_title'); ?></h3>
                                        <?php endif;

                                        if( get_sub_field('studio_content') ): ?>
                                            <p class="studio-content"><?php the_sub_field('studio_content'); ?></p>
                                        <?php endif;
                                        
                                        $link = get_sub_field('studio_link');

                                        if( $link ): ?>
                                            
                                            <a href="<?php echo $link['url']; ?>">
                                                <?php echo $link['title']; ?>
                                            </a>
                                        
                                        <?php endif; ?>
                                        
                                    </div>

                                </div> 

                            <?php endwhile;  ?>

                        <?php else : ?>

                            <p>Our approach is tried and tested</p>

                        <?php endif; ?>

                    </div> <!-- end studios block -->

                </section> <!-- end studio section -->

                <section class="our-spaces"> <!-- space list -->

                    <?php if( get_field('our_spaces_title') ): ?>
                        <h2 class="title"><?php the_field('our_spaces_title'); ?></h2>
                    <?php endif; ?>

                    <div class="spaces-block">

                        <?php if( have_rows('spaces') ): ?>

                            <?php while ( have_rows('spaces') ) : the_row(); ?>

                                <div class="individual-spaces"> 

                                    <?php $image = get_sub_field('space_image'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                                    <div class="space-content-container">

                                        <?php if( get_sub_field('space_title') ): ?>
                                            <h3 class="space-title"><?php the_sub_field('space_title'); ?></h3>
                                        <?php endif;

                                        if( get_sub_field('space_content') ): ?>
                                            <p class="space-content"><?php the_sub_field('space_content'); ?></p>
                                        <?php endif;
                                        
                                        $link = get_sub_field('space_link');

                                        if( $link ): ?>
                                            
                                            <a href="<?php echo $link['url']; ?>">
                                                <?php echo $link['title']; ?>
                                            </a>
                                        
                                        <?php endif; ?>

                                    </div>

                                </div> 

                            <?php endwhile;  ?>

                        <?php else : ?>

                            <p>Our approach is tried and tested</p>

                        <?php endif; ?>

                    </div> <!-- end spaces block -->

                </section> <!-- end space list -->

                <section class="amenities"> <!-- amenities -->

                    <?php if( get_field('amenities_title') ): ?>
                        <h2 class="title"><?php the_field('amenities_title'); ?></h2>
                    <?php endif;

                    if( get_field('amenities_content') ): ?>
                        <p class="content"><?php the_field('amenities_content'); ?></p>
                    <?php endif;

                    $link = get_field('amenities_link');

                    if( $link ): ?>
					
                        <a class="link" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    
                    <?php endif; ?>

                </section> <!-- end amenities -->

            </div> <!--end studios page -->

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