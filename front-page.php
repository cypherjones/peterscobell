<?php 

$options = get_option('ten_theme_options');

global $post;

$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

 ?>

<?php get_header(); ?> 
<div id="front_page">
  <div id="page_heading" class="featured_img" style="background-image: url('<?php echo $src[0] ?>') !important; background-size: cover; height: auto; background-repeat: no-repeat; min-height: 740;">
    <div id="title_container" class="container">
      <div class="logo">    
        <div class="row">
          <div class="col-lg-12">
            <img src="<?php the_field('logo') ?>" alt="">
          </div>
        </div>
      </div>       <!-- music and tickets -->
      <div class="music_tix">  
        <div class="row">
          <div class="col-lg-12">
            <div class="btn .itunes">
              <button class="btn">itunes</button>
            </div>
            <div class="btn tickets">
              <button class="btn">tickets</button>
            </div>
          </div>
        </div>
      </div>    <!-- social links -->
      <div class="social_links">
        <div class="row">
          <div class="col-lg-12">
            <div class="s_links">
              <ul>
                <li><a href="<?php echo $options['facebook_url'] ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo $options['twitter_url'] ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $options['youtube_url'] ?>"><i class="fa fa-youtube"></i></a></li>
                <li><a href="<?php echo $options['vimeo_url'] ?>"><i class="fa fa-vimeo-square"></a></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div> <!--  gravity form -->
  <div class="gravity_frm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><span>Join Team RPGeezus</span>      Get all the Latest Pete Scobell Band new First</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php echo do_shortcode('[gravityform id=1 title=false description=false]' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="front_page_copy">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="upcoming_shows">
            <h2>Upcoming Shows</h2>
            <img src="<?php bloginfo('template_directory' ); ?>/assets/img/fp_placeholder_1.png" alt="">
            <img src="<?php bloginfo('template_directory' ); ?>/assets/img/fp_placeholder_2.png" alt="">
          </div>
        </div>
        <div class="col-lg-offset-1 col-lg-5">
          <div class="biography">
            <h2>Biography</h2>
            <p><?php the_field('biography') ?></p>
            <button class="btn .bio">Full Bio</button>
          </div>
        </div>
      </div>
    </div>
  </div>    <!-- / gravity form -->
<?php get_footer(); ?>