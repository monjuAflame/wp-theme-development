<!-- 
    Template Name: Left Sidebar
 -->
 <?php

get_header();

?>
<style >
    .content{
        width: 70%;
        border-left: 1px solid #ccc;
    }
    .rightside{
        width: 30%;
        padding: 10px 5px;
    }
</style>
<div class="contentBox">
  <div class="innerBox">

    <div style="width: 100%; display: flex;">
        <!-- right side -->
        <div class="left-sidebar">
             <?php 
                dynamic_sidebar('left-sidebar');
            ?>
        </div>
        <!-- right side end -->
        <!-- content -->
        <div class="content">
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
        </div>
        <!-- content -->

        
    </div>


  </div>
</div>


<?php

get_footer();