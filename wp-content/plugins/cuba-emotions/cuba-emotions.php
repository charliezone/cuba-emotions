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
            'terms'    => $a['category_name'],
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

function ce_cpt_list( $atts, $content = null ) {
  wp_enqueue_style( 'ce-app-style' );

  $a = shortcode_atts( array(
     'post_type' => 'profile',
     'posts_per_page' => '6',
     'category_name' => 'women'
  ), $atts );
  
  ob_start();
  
  $args = array( 
     'post_type' => $a['post_type'],
     'posts_per_page' => $a['posts_per_page'],
     'paged' => $paged
  );

  if($a['category_name']){
    $args['tax_query'] = array(
      array(
          'taxonomy' => 'pl-categs',
          'field'    => 'slug',
          'terms'    => $a['category_name'],
      ),
    );
  }

  if (get_query_var('paged')) { 
		$paged = get_query_var('paged'); 
	} elseif (get_query_var('page')) { 
		$paged = get_query_var('page'); 
	} else { 
		$paged = 1; 
	}
	
	
	$args['paged'] = $paged;
     
  $posts_query = new WP_Query;
  $posts_query->query( $args );
  if ($posts_query->have_posts()) {
     ?>
      <div class="ce-cpt-profile-container cmsmasters_profile horizontal">
        <?php
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <article class="ce-cpt-profile cmsmasters_profile_horizontal one_third profile type-profile <?php if (has_post_thumbnail()): ?>has-post-thumbnail <?php endif ?> hentry">
              <?php if (has_post_thumbnail()): ?>
                <div class="profile_outer">
                  <div class="cmsmasters_profile_img_wrap">
                    <figure class="cmsmasters_img_rollover_wrap preloader">
                      <img width="300" height="300" src="<?php the_post_thumbnail_url('medium') ?>" class="full-width wp-post-image" alt="<?php the_title() ?>" title="<?php the_title() ?>" srcset="<?php the_post_thumbnail_url('medium') ?> 300w, <?php the_post_thumbnail_url('thumbnail') ?> 150w, <?php the_post_thumbnail_url('thumbnail') ?> 70w" sizes="(max-width: 300px) 100vw, 300px">
                        <div class="cmsmasters_img_rollover">
                          <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="cmsmasters_open_post_link">
                            <span>
                              <span>View</span><span>profile</span>
                            </span>
                          </a>
                        </div>
                      </figure>
                  </div>
                <?php endif ?>  
                  <div class="profile_inner">
                    <header class="cmsmasters_profile_header entry-header">
                      <h3 class="cmsmasters_profile_title entry-title">
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                      </h3>
                    </header>
                  </div>
            </article>

        <?php } ?>
        <div class="ce-pagination">

          <?php
            echo cmsmasters_pagination($posts_query->max_num_pages)
          ?>

        </div>

        <?php
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

add_shortcode( 'ce_cpt_list', 'ce_cpt_list' );

function ce_fashion_shop_list( $atts, $content = null ) {
  wp_enqueue_style( 'ce-app-style' );

  $a = shortcode_atts( array(
     'post_type' => 'fashion_tour',
     'posts_per_page' => '6',
  ), $atts );
  
  ob_start();
  
  $args = array( 
     'post_type' => $a['post_type'],
     'posts_per_page' => $a['posts_per_page'],
     'paged' => $paged
  );

  if (get_query_var('paged')) { 
		$paged = get_query_var('paged'); 
	} elseif (get_query_var('page')) { 
		$paged = get_query_var('page'); 
	} else { 
		$paged = 1; 
	}
	
	
	$args['paged'] = $paged;
     
  $posts_query = new WP_Query;
  $posts_query->query( $args );
  if ($posts_query->have_posts()) {
     ?>
      <div class="ce-cpt-profile-container cmsmasters_profile horizontal">
        <?php
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <article class="sell-item ce-cpt-profile cmsmasters_profile_horizontal one_third profile type-profile <?php if (has_post_thumbnail()): ?>has-post-thumbnail <?php endif ?> hentry">
              <?php if (has_post_thumbnail()): ?>
                <div class="img-wraper">
                  <img src="<?php the_post_thumbnail_url('medium') ?>" class="full-width wp-post-image" alt="<?php the_title() ?>" title="<?php the_title() ?>" srcset="<?php the_post_thumbnail_url('medium') ?> 300w, <?php the_post_thumbnail_url('thumbnail') ?> 150w, <?php the_post_thumbnail_url('thumbnail') ?> 70w" sizes="(max-width: 300px) 100vw, 300px">
                </div>
              <?php endif ?>  
                <div class="content_inner">
                  <div class="header">
                    <h1 class="cmsmasters_heading"><?php the_title() ?></h1>
                    <span>from <strong><?php the_field('price') ?></strong> $</span>
                  </div>
                  <a href="<?php the_permalink() ?>" class="register-cta-btn">Got it</a>
                </div>
            </article>

        <?php } ?>
        <div class="ce-pagination">

          <?php
            echo cmsmasters_pagination($posts_query->max_num_pages)
          ?>

        </div>

        <?php
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

add_shortcode( 'ce_fashion_shop_list', 'ce_fashion_shop_list' );