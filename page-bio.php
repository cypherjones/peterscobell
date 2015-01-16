<?php 

  global $post;
  $page_slug=$post->post_name;
 ?>

<?php get_header(); ?>
        <div id="content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="page_heading" class="featured_img" style="background-image: url('<?php the_field('image_url') ?>'); background-size: 100%; height: auto; background-repeat: no-repeat;">
            <div id="title_container" class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="title"><?php the_title( ); ?></h1>
                </div>
              </div>
            </div>
            </div>
            <div id="content_container" class="container">
              <div id="page_copy">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="subtitle">
                      <h2><?php the_field('subtitle') ?></h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="image">
                      <img src="<?php the_field('image') ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="the_content">
                      <?php the_content( ); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php  endwhile; endif; ?>
          </div>
        </div>

    </div>
  
  <?php wp_reset_query(); rewind_posts(); ?>
      
<?php get_footer(); ?>