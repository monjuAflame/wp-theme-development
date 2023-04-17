<!-- 
    Template Name: Right Sidebar

-->
<?php

get_header();

?>
<style >
    .content{
        width: 70%;
        border-right: 1px solid #ccc;
    }
    .rightside{
        width: 30%;
        padding: 10px 5px;
    }
</style>
<div class="contentBox">
  <div class="innerBox">

    <div style="width: 100%; display: flex;">
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

        <!-- right side -->
        <div class="rightside">
            right sidebar
        </div>
        <!-- right side end -->
    </div>


  </div>
</div>


<?php

get_footer();