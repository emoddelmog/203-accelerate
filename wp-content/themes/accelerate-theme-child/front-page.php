<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
	  <div class="main-content" role="main">
	  	<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
		<?php endwhile; // end of the loop. ?>
	  </div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content clearfix">
			<h4>Featured Work</h4>

			<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
    			<?php while ( have_posts() ) : the_post();
    				$image_1 = get_field("image_1");
    				$size = "medium";
    			?>
    			<li class="individual-featured-work">
    				<a href="<?php the_permalink(); ?>">
    					<figure>
    						<?php echo wp_get_attachment_image($image_1, $size); ?>
    					</figure>

    					<h3><?php the_title(); ?></h3>
    				</a>
    			</li>
    			<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
    		</ul>

		</div>

	</section>
    <section class="service-icons">
        <div class="images">
            <h4>Our Services</h4>
            <ul class="homepage-services">
              <figure class="bullseye">
                <img src="http://www.emilymoddelmog.com/wp-content/uploads/2020/06/bullseye.png">
                <figcaption>Content Strategy</figcaption>
              </figure>
              <figure class="atom">
                <img src="http://www.emilymoddelmog.com/wp-content/uploads/2020/06/atom.png">
                <figcaption>Influencer Mapping</figcaption>
              </figure>
              <figure class="like">
                <img src="http://www.emilymoddelmog.com/wp-content/uploads/2020/06/like.png">
                <figcaption>Social Media Strategy</figcaption>
              </figure>
              <figure class="design">
                <img src="http://www.emilymoddelmog.com/wp-content/uploads/2020/06/design.png">
                <figcaption>Design and Development</figcaption>
              </figure>                
            </ul> 
        </div>
    </section>

	<!-- RECENT BLOG POST -->
	<section class="recent-posts">
 		 <div class="site-content">
    		<div class="blog-post">
    			<h4>From the Blog</h4>
    			<?php query_posts('posts_per_page=1'); ?>
    				  	<?php while ( have_posts() ) : the_post(); ?>
    						<h3><?php the_title(); ?></h3>
       						<?php the_excerpt(); ?>
                         
    					<?php endwhile; ?>
                <?php wp_reset_query(); ?>                          			    		
    		</div>
 		 </div>
	</section>

	<?php get_footer(); ?>
