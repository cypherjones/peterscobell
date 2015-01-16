<?php 

  global $post;
  $page_slug=$post->post_name;

 ?>

<?php get_header(); ?>

  <div id="page">
    
    <?php if (is_page('bio')) { 

      get_template_part('page','bio'); 

        } else if (is_page('tour' )) {

      get_template_part('archive', 'tour' );

        } else if (is_page('merch' )) {

      get_template_part('page', 'merch' );

        } else if (is_page('video' )) {

      get_template_part('page', 'videos' );

        } else if (is_page('music' )) {

      get_template_part('archive', 'music' );;    

        } else { ?>

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
                <?php the_content( ); ?>
              </div>
            <?php  endwhile; endif; ?>
          </div>
        </div>

    <?php } ?>

    </div>
  
  <?php wp_reset_query(); rewind_posts(); ?>
			
<?php get_footer(); ?>