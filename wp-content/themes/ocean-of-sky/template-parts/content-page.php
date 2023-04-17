<div class="contentBox">
  <div class="innerBox">

    <?php while (have_posts()) : the_post(); ?>

      <div class="contentTitle">
        
      <a href="<?php the_permalink() ?>"><?php the_title()?></a>
        

      </div>
      <div class="contentText">
        <?php 
            the_content(); 
        ?>
      </div>   

    <?php endwhile; ?>

    <?php 

    // $testimonial = new WP_Query(array(
    //     'post_type' => 'basic-testimonials'
    // ));
    
    // while ($testimonial->have_posts()) : $testimonial->the_post();

    //    the_title();
    //   the_post_thumbnail();
    //   echo get_post_meta(get_the_ID(),'designation', true); 
    //   echo get_post_meta(get_the_ID(),'desc', true); 

    // endwhile; 
    // wp_reset_postdata();
    ?>

  </div>
</div>