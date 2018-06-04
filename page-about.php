<?php
/**
 * The template for displaying about page
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

            <div class="about-page"> <!-- about container -->

                <section class="about-header"> <!-- about header -->

                    <?php $image = get_field('about_header_picture'); ?> <!-- desktop about header picture -->

                    <div class="picture-header" style="background: url(<?php echo $image['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('about_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('about_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('about_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('about_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end desktop about header picture -->

                    <?php $imagem = get_field('about_header_picture_mobile'); ?> <!-- mobile about header picture -->

                    <div class="picture-header-mobile" style="background: url(<?php echo $imagem['url']; ?>) no-repeat center center; background-size:cover">

                        <?php if( get_field('about_header_title') ): ?>
                            <h1 class="header-title"><?php the_field('about_header_title'); ?></h1>
                        <?php endif;

                        if( get_field('about_header_tagline') ): ?>
                            <p class="header-tagline"><?php the_field('about_header_tagline'); ?></p>
                        <?php endif; ?>

                    </div> <!-- end mobile about header picture-->

                </section> <!-- end about header -->

                <section class="about-intro"> <!-- about intro -->

                    <?php if( get_field('about_intro_title') ): ?>
                        <h2 class="title"><?php the_field('about_intro_title'); ?></h2>
                    <?php endif;

                    if( get_field('about_intro_tagline') ): ?>
                        <p><?php the_field('about_intro_tagline'); ?></p>
                    <?php endif;

                    $link = get_field('about_gofundme_link');

                    if( $link ): ?>
                        
                        <a class="link" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    
                    <?php endif; ?>

                </section> <!-- end about intro -->

                <section class="about-problem"> <!-- about problem -->

                    <div class="about-problem-container">

                        <div class="about-problem-img">

                            <?php $image = get_field('about_problem_image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                        </div>

                        <div class="about-problem-content">

                            <?php if( get_field('about_problem_title') ): ?>
                                <h5><?php the_field('about_problem_title'); ?></h5>
                            <?php endif;

                            if( get_field('about_problem_description') ): ?>
                                <p><?php the_field('about_problem_description'); ?></p>
                            <?php endif; ?> 

                        </div>

                    </div>
                    
                </section> <!-- end about problem -->

                <section class="about-solution"> <!-- about solution -->

                    <div class="about-solution-content">

                        <?php if( get_field('about_solution_title') ): ?>
                            <h5><?php the_field('about_solution_title'); ?></h5>
                        <?php endif;

                        if( get_field('about_solution_description') ): ?>
                            <p><?php the_field('about_solution_description'); ?></p>
                        <?php endif; ?> 

                    </div>

                    <div class="about-solution-img">

                        <?php $image = get_field('about_solution_image'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                    </div>

                </section> <!-- end about solution -->

                <section class="about-before-gallery"><!-- about before imgs -->

                    <?php if( get_field('before_gallery') ):
                        the_field('before_gallery');
                    endif; ?>

                </section> <!-- end about before imgs -->

                <section class="about-after-gallery"><!-- about after imgs -->

                    <?php if( get_field('after_gallery') ):
                        the_field('after_gallery');
                    endif; ?>

                </section> <!-- end about after imgs -->

                <section class="about-current-status"> <!-- current status -->
                
                    <?php if( get_field('about_status_title') ): ?>
                        <h3 class="title"><?php the_field('about_status_title'); ?></h3>
                    <?php endif;

                    if( get_field('about_status_content') ): ?>
                        <p><?php the_field('about_status_content'); ?></p>
                    <?php endif;

                    $link = get_field('about_gofundme_link2');

                    if( $link ): ?>
                        
                        <a class="link" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    
                    <?php endif; ?>

                </section> <!-- end about current status -->

                <section class="about-3d-gif"> <!-- 3d gif -->

                    <?php $image = get_field('about_3d_gif'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                
                </section> <!-- end 3d gif -->

            </div> <!--end about page -->

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