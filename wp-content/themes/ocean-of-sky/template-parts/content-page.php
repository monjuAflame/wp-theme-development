<div class="contentBox">
  <div class="innerBox">

    <?php while (have_posts()) : the_post(); ?>

      <div class="contentTitle">
        
      <a href="<?php the_permalink() ?>"><?php the_title()?></a>
        <br>

        SubTitle: 
        <?php echo get_post_meta(get_the_ID(), 'title', true) ?>

        <br>

        SubTitle Two: 
        <?php echo get_post_meta($post->ID, 'desc', true) ?>

      </div>
      <div class="contentText">
        <?php 
            the_content(); 
        ?>
      </div>   

    <?php endwhile; ?>

    <?php 

    $testimonial = new WP_Query(array(
        'post_type' => 'basic-testimonials'
    ));
    
    while ($testimonial->have_posts()) : $testimonial->the_post(); ?>

    <?php the_title() ?>
    <?php the_post_thumbnail() ?>
    <?php echo get_post_meta(get_the_ID(),'designation', true) ?>
    <?php echo get_post_meta(get_the_ID(),'desc', true) ?>

    <?php endwhile; wp_reset_postdata();?>

  </div>
</div>