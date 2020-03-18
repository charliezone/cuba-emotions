<?php
/*
Plugin Name: Cuba Emotions
Description: Plugin del sitio 
Version: 1.0
Author: Carlos Rafael
License: GPLv2 or later
*/

if ( !defined( 'ABSPATH' ) ) {
  exit;
}

function ce_carousel_register_front(){
  wp_register_style( 'ce-slick-style',  plugin_dir_url( __FILE__ ) . 'vendors/slick/slick/slick.css' );
  wp_register_style( 'ce-slick-theme-style',  plugin_dir_url( __FILE__ ) . 'vendors/slick/slick/slick.css', array('ce-slick-style') );
  wp_register_style( 'ce-app-style',  plugin_dir_url( __FILE__ ) . 'css/app.css', array('ce-slick-theme-style') );

  wp_register_script( 'ce-slick-script',  plugin_dir_url( __FILE__ ) . 'vendors/slick/slick/slick.min.js', array('jquery') );
  wp_register_script( 'ce-app-js',  plugin_dir_url( __FILE__ ) . 'js/app.js', array('ce-slick-script') );
}

function ce_carousel_enqueue_front(){
  wp_enqueue_style( 'ce-app-style' );
  
  wp_enqueue_script( 'ce-app-js' );
}

add_action( 'wp_enqueue_scripts', 'ce_carousel_register_front' );

function ce_latest_event( $atts, $content = null ) {
  ce_carousel_enqueue_front();

  $a = shortcode_atts( array(
     'post_type' => 'event',
     'posts_per_page' => '5'
  ), $atts );
  
  ob_start();
  
  $args = array( 
     'post_type' => $a['post_type'],
     'posts_per_page' => $a['posts_per_page']
  );
     
  $posts_query = new WP_Query;
  $posts_query->query( $args );
  if ($posts_query->have_posts()) {
     ?>
      <div class="ce-carousel latest-events">
        <?php
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <article class="ce-slide">

                <h1 class="title"><?php the_title();?></h1>

                <?php if (has_post_thumbnail()): ?>
                  <div class="ce-slide-img" style="background: center / cover no-repeat url(<?php the_post_thumbnail_url('large');?>)">
                  </div>
                <?php endif ?>
                <time datetime="<?php the_field('date') ?>"><?php the_field('date') ?></time>
                <a href="<?php the_permalink();?>" class="ce-read-more">Read more</a>

            </article>

        <?php }
          wp_reset_postdata();
        ?>
          </div>
        <?php
     /* Get the buffered content into a var */
     $news = ob_get_contents();

     /* Clean buffer */
     ob_end_clean();
     return $news;
  }else{
     return 'No posts found';
  }
}

add_shortcode( 'ce_latest_event', 'ce_latest_event' );

function ce_carousel( $atts, $content = null ) {
  ce_carousel_enqueue_front();

  $a = shortcode_atts( array(
     'post_type' => 'profile',
     'posts_per_page' => '5',
     'category_name' => 'women'
  ), $atts );
  
  ob_start();
  
  $args = array( 
     'post_type' => $a['post_type'],
     'posts_per_page' => $a['posts_per_page'],
     'tax_query' => array(
        array(
            'taxonomy' => 'pl-categs',
            'field'    => 'slug',
            'terms'    => 'women',
        ),
    )
  );
     
  $posts_query = new WP_Query;
  $posts_query->query( $args );
  if ($posts_query->have_posts()) {
     ?>
      <div class="ce-carousel">
        <?php
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <article class="ce-slide">

                <h1 class="title"><?php the_title();?></h1>

                <?php if (has_post_thumbnail()): ?>
                  <div class="ce-slide-img" style="background: center / cover no-repeat url(<?php the_post_thumbnail_url('large');?>)">
                  </div>
                <?php endif ?>
                <p class="excerpt"><?php  the_excerpt() ?></p>
                <a href="<?php the_permalink();?>" class="ce-read-more">View more</a>

            </article>

        <?php }
          wp_reset_postdata();
        ?>
          </div>
        <?php
     /* Get the buffered content into a var */
     $news = ob_get_contents();

     /* Clean buffer */
     ob_end_clean();
     return $news;
  }else{
     return 'No posts found';
  }
}

add_shortcode( 'ce_carousel', 'ce_carousel' );