
<?php

  $query = new WP_Query( 
              array(
                    'post_type' => 'tour',
                    'order'     => 'ASC',
                    'orderby'   => 'meta_value_num',
                    'meta_key'  => 'date',
                    'posts_per_page'  => 48
                  )
                );              
 ?>

<?php get_header( ); ?>
  <?php get_header( ); ?>
  <div id="tour_content">
    <div id="tour_page_heading" class="featured_img" >
      <div id="tour_container" class="container">
        <div class="row">
          <div id="tour_page_title">
            <h1 id="tour_title">Tour Dates</h1>
          </div>
        </div>
      </div>
    </div>
    <div id="tour_content_container" class="container">
      <div id="tour_page_copy">
        <div id="tour_page_row" class="row">
        <?php while ( $query->have_posts()) : $query->the_post(); ?>
          <div class="col-md-3">
            <ul class="venue_container">
              
                <li>
                    <div class="row venue_img">
                      <div class="col-md-12">
                        <h3><?php the_title( ); ?></h3>
                        <img src="<?php the_field('venue_image') ?>" alt="">
                      </div>
                    </div>
                    <div class="row venue_name">
                      <div class="col-md-12">
                        <?php the_field('venue_name') ?>
                      </div>
                    </div>
                    <div class="row venue_date_time">
                      <div class="col-md-12">
                        <?php the_field('date') ?> /  <?php the_field('time') ?>
                      </div>
                    </div>
                    <div class="row venue_descrp">
                      <div class="col-md-12">
                        <p><?php the_field('brief_description') ?></p>
                      </div>
                    </div>
                  
                </li>
              
            </ul>
          </div>
          <?php  endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer( ); ?>  