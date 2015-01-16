<?php 

/* 
  Template Name: Blog 
*/

global $post;

$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

 ?>

<?php get_header(); ?> 
<div id="content">
 <div id="page_heading" class="featured_img" style="background-image: url('<?php echo $src[0] ?>') !important; background-size: 100%; height: auto; background-repeat: no-repeat;">
            <div id="title_container" class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="title"><?php the_title( ); ?></h1>
                </div>
              </div>
            </div>
            </div>
  <div id="content_container" class="container">
    <?php

      $paged = (get_query_var('paged' )) ? get_query_var('paged' ) : 1;
        $args = array(
                     'paged' => $paged,
                     'posts_per_page' => 10,
         );
          query_posts($args); ?>

          <div id="post_row" class="row">   <!-- latest post -->
            <div id="post_column" class="col-md-8">
              <div id="post" class="row">
                <div id="post_heading">
1                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="post_thumbnail">
                  <?php the_post_thumbnail( ); ?>
                </div>
                <h3 id="post_title"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
                <div id="post_date_comment">
                  <ul>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_date( 'F j, Y' ); ?></a>
                    </li>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php comments_number( 'Be the first to comment', '1 Comment', '% Comments' ); ?></a>
                    </li>
                  </ul>
                </div>
                <div id="post_exerpt">
                  <?php the_excerpt(); ?>
                </div>
                <?php  endwhile; endif; ?>
              </div>
              <div id="pagination" class="row">
                <ul>
                  <li><?php next_posts_link( '« More Great Posts'); ?></li>
                  <li><?php previous_posts_link( 'Newer Posts »' ); ?></li>
                </ul>
                  <?php 
                  // clean up after the query and pagination
                  wp_reset_postdata(); 
                ?>
              </div>     
          </div>

    
        <div id="sidebar_column" class="col-sm-12 col-md-4">
          <div id="sidebar_row">
            <?php get_sidebar( ); ?>
          </div>
        </div>
      </div>
  </div>
</div>  
<?php get_footer(); ?>