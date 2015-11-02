<?php
/**
 * The template for displaying the archive of case studies
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */


get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
    <?php 
      $services = get_field('services');
      $image_1 = get_field('image_1');
      $size = "full";    
    ?>     

    <?php while ( have_posts() ) : the_post(); ?>

      <aside class="case-study">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <h5><?php echo $services; ?></h5>

        <?php the_excerpt(); ?>
        <p class="link"><a href="<?php the_permalink();?>">View Project ></a></p>
      </aside>

      <article class="case-study">
        <div class="case-study-images">
          <?php if($image_1) { ?>
            <a href="<?php the_permalink();?>">
            <?php echo wp_get_attachment_image( $image_1, $size ); ?>
          </a>
          <?php } ?>

        </div>
      </article>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>