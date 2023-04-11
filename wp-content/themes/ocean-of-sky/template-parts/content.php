<div class="contentBox">
  <div class="innerBox">

    <?php while (have_posts()) : the_post(); ?>

      <div class="contentTitle">
        <a href="<?php the_permalink() ?>"><?php the_title()?></a>
        <br>
        SubTitle: <?php echo get_post_meta(get_the_ID(), 'custome-one', true) ?>
        <br>
        SubTitle Two: <?php echo get_post_meta($post->ID, 'cus-two', true) ?>
      </div>
      <div class="contentText">
        <?php 
        if(is_single()) :
            the_content();
        else :
            $read_more =  '<p><a href="'.get_permalink().'">...Read more</a></p>';
            echo wp_trim_words(get_the_content(), '3', $read_more); 
        endif
        ?>
      </div>   

    <?php endwhile; ?>

  </div>
</div>