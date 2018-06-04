<?php
/**
 * The template for displaying front page
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

            <div class="home-page"> <!-- home container -->

                <section class="video-intro"> <!-- video intro -->

                    <div id="player"></div>

                    <div class="player-overlay">
                        <?php if( get_field('icon') ): ?>
                            <i id ="play-button" class="<?php the_field('icon'); ?>"></i>
                        <?php endif; ?>
                    </div>

                </section> <!-- end video intro -->

                <div class="about-link-container">

                    <?php $link = get_field('about_link');

                    if( $link ): ?>
                        
                        <a class="link" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    
                    <?php endif; ?>

                </div>

                <section class="our-mission"> <!-- home mission -->

                    <div class="mission-content">

                        <?php if( get_field('mission_title') ): ?>
                            <h1 class="title"><?php the_field('mission_title'); ?></h1>
                        <?php endif;

                        if( get_field('mission_description') ): ?>
                            <p class="description"><?php the_field('mission_description'); ?></p>
                        <?php endif; ?>

                    </div>

                    <div class="mission-link">

                        <?php $link = get_field('funding_link');

                        if( $link ): ?>
                            
                            <a class="link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
                        
                        <?php endif; ?>

                    </div>

                </section> <!-- end home mission -->

                <?php $image = get_field('home_studios_background'); ?>

                <section class="home-studios" style="background: url(<?php echo $image['url']; ?>) no-repeat center center; background-size:cover"> <!-- home studios -->

                    <div class="home-studios-container">

                        <?php if( get_field('home_studios_title') ): ?>
                            <h2 class="title"><?php the_field('home_studios_title'); ?></h2>
                        <?php endif;

                        if( get_field('home_header_description') ): ?>
                            <p class="home-studios-description"><?php the_field('home_header_description'); ?></p>
                        <?php endif;

                        $link = get_field('home_studios_link');

                        if( $link ): ?>
                            
                            <a class="link" href="<?php echo $link['url']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
                        
                        <?php endif; ?>

                    </div>

                </section> <!-- end home studios -->

                <section class="home-contact"> <!-- home contact -->

                    <div class="home-contact-img">

                        <?php $image = get_field('home_contact_image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                    </div>

                    <div class="home-contact-container">

                        <?php if( get_field('contact_title') ): ?>
                            <h3 class="title"><?php the_field('contact_title'); ?></h3>
                        <?php endif;

                        if( get_field('contact_description') ): ?>
                            <p class="contact-description"><?php the_field('contact_description'); ?></p>
                        <?php endif; ?>

                        <div class="home-contact-info">

                            <div class="home-contact-info-text">

                                <?php if( get_field('contact_info_title') ): ?>
                                    <h5><?php the_field('contact_info_title'); ?></h5>
                                <?php endif;

                                if( get_field('contact_info_wysiwyg') ):
                                    the_field('contact_info_wysiwyg');
                                endif; ?>

                            </div>

                            <p class="or">OR</p>

                            <div class="home-contact-info-link">

                                <?php $link = get_field('contact_link');

                                if( $link ): ?>
                                    
                                    <a class="link" href="<?php echo $link['url']; ?>">
                                        <?php echo $link['title']; ?>
                                    </a>
                                
                                <?php endif; ?>

                            </div>

                        </div> <!-- end home contact info -->

                    </div> <!-- end home contact container -->

                </section> <!-- end home contact -->
            
            </div> <!--end home page -->

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