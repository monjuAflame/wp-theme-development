<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
<meta charset="utf-8" />

<?php wp_head() ?>
</head>
<body <?php body_class()?>>
<div id="page">
  <div class="topNaviagationLink"><a href="#">Home</a></div>
  <div class="topNaviagationLink"><a href="#">About</a></div>
  <div class="topNaviagationLink"><a href="#">Portfolio</a></div>
  <div class="topNaviagationLink"><a href="#">Services</a></div>
  <div class="topNaviagationLink"><a href="#">Contact</a></div>
</div>
<div id="mainPicture">
  <div class="picture" style="background-image: url('<?php header_image() ?>')">
    <div id="headerTitle"><?php bloginfo('name') ?></div>
    <div id="headerSubtext"><?php bloginfo('description') ?></div>
  </div>
</div>
<div class="contentBox">
  <div class="innerBox">

    <?php while (have_posts()) : the_post(); ?>

      <div class="contentTitle">
        <?php the_title()?>
      </div>
      <div class="contentText">
        <?php the_content() ?>
      </div>   

    <?php endwhile; ?>

  </div>
</div>
<div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a> | <a href="http://validator.w3.org/check?uri=referer">valid xhtml</a> | <a href="http://jigsaw.w3.org/css-validator">valid css</a></div>
<?php wp_footer() ?>

</body>
</html>
