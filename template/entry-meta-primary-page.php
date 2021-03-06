<?php
/**
 primary entry meta template with ads option and is for page (display before the_content)
 */
 global $zAlive_options;
?>        
        <div class="entry-meta entry-meta-primary entry-meta-primary-page clearfix">
          <span class="info-date info-icon entry-date date updated"><?php the_time( get_option( 'date_format' ) ); ?></span>
          <span class="info-author info-icon visible-desktop vcard author"><cite class="fn"><?php _e('Author: ','zAlive');?><?php the_author_link(); ?></cite></span>
          <div class="pull-right">
            <?php if(function_exists('the_views')) {  echo '<span class="info-view info-icon">'; the_views(); echo '</span>'; } ?>
            <?php  if(comments_open()) { ?>
            <span class="info-comment info-icon visible-desktop">
              <?php comments_popup_link( __('No comment yet','zAlive'), __('1 Comment','zAlive'), __('% Comments','zAlive'), 'comments-link', __('Comments Off','zAlive')); ?>
            </span>
            <?php } ?>
          </div>
        </div>
        <?php if($zAlive_options['ads_content'] !='') : ?>
        <div class="clearfix ads-code visible-desktop">
        <?php echo $zAlive_options['ads_content']; ?>
        </div>
        <?php endif;?>