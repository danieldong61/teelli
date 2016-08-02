<?php
/**
 Template Name: Tags
 */

get_header(); ?>
  <?php //show sidebar on the left
    if( $zAlive_options['primary_sidebar_layout'] == 2 ) { get_sidebar(); } 
  ?>
    <div id="main">
      <?php if( $zAlive_options['breadcrumb_enabled'] == true ) {zAlive_breadcrumb();} ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class( array('article','clearfix') ); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part( 'template/entry-meta-primary','page' ); ?>
        <div class="entry-content clearfix">
          <?php the_content(); ?>
          <div class="zAlive_page_tags clearfix"><?php wp_tag_cloud('smallest=14&largest=30&unit=px&number=500'); ?></div>
        </div>
      </div>
        <?php wp_reset_postdata();
        endwhile; ?>
      <?php else : ?>
        <?php get_template_part( 'template/content', 'none' ); ?>
      <?php endif; ?>
      <?php if(comments_open()) {comments_template( '', true );}  ?>
    </div>
  <?php //show sidebar on the right
    if( $zAlive_options['primary_sidebar_layout'] == 1 ) { get_sidebar(); } 
  ?> 
  <?php get_footer(); ?>