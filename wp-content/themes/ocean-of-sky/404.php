<?php

get_header();
?>
<div class="contentBox">
  <div class="innerBox">
    <h2>404 - page not found</h2>
    <p>
      <form action="<?php echo home_url() ?>" method="GET">
        <input type="text" name="s" placeholder="s">
    </form>
    </p>
</div>
</div>
<?php get_footer() ?>