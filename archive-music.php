
<?php

  $query = new WP_Query( 
              array(
                    'post_type' => 'music',
                    'order'     => 'ASC',
                    'orderby'   => 'date',
                    'posts_per_page'  => 20
                  )
                ); 
        
 ?>

<?php get_header( ); ?>
  <div id="music_content">
    <div id="music_page_heading" class="featured_img" >
      <div id="music_container" class="container">
        <div class="row">
          <div id="music_page_title">
            <h1 id="music_title">Discography</h1>
          </div>
        </div>
      </div>
    </div>
    <div id="music_content_container" class="container">
      <div id="music_content_titles">
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
            <h2>Unfinished Business</h2>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <h2>Track List/Lyrics</h2>
          </div>   
        </div>
      </div>
      <div id="music_page_copy">
        <div id="music_page_row" class="row">
          <div class="col-md-4 col-md-offset-1">
            <div class="album_cover">
              <img src="<?php bloginfo('template_directory' ); ?>/assets/img/img_music.png" alt="">
            </div>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <ul class="track_container">
            <?php while ( $query->have_posts()) : $query->the_post(); ?>
              <li>
                <div class="track_meta">
                  <div class="track_container row">
                    <div class="col-lg-12">
                      <h2 class="track_title"><?php the_title(); ?></h2>
                      <h2 class="track_durations"><?php the_field('duration') ?></h2>
                    </div>
                  </div>
                  <a href="<?php the_field('itunes_tickets') ?>" class="itunes"><i class="fa fa-play-circle"> View in iTunes</i></a>
                </div>
              </li>
            <?php  endwhile; wp_reset_query(); ?>
            </ul>
          </div>
        </div>   <!-- / container -->
      </div>
    </div>
  </div>
<?php get_footer( ); ?>  