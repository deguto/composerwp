<?php
/**
 * Template part for displaying single posts.
 *
 * @package ultrabootstrap
 */

?>

<div class="page-title">
  <h1><?php the_title(); ?></h1>
</div>

<div class="single-post">
  <div class="info">
    <ul class="list-inline">
      <li><i class="fa fa-user"></i> <?php echo get_the_author_meta( 'display_name'); ?></li>
      <li><i class="fa fa-calendar"></i> <?php echo get_the_date('d M Y');?></li>
      <li><i class="fa fa-comments-o"></i> &nbsp; <?php comments_popup_link('zero comment','one comment', '% comments');?></li>
    </ul>
  </div>

  <div class="post-content">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full'); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-blog-thumbnail.jpg" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
      <?php endif; ?> 
    
    <article class="spacer">
      <?php the_content();?>

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ultrabootstrap' ),
          'after'  => '</div>',
        ) );
      ?>     
    </article>

    <div class="post-info"><?php the_category();?><?php the_tags();?></div>

    </div>
  </div>