<div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a> | <a href="http://validator.w3.org/check?uri=referer">valid xhtml</a> | <a href="http://jigsaw.w3.org/css-validator">valid css</a></div>
<?php 
wp_footer();

do_action('i_am_hook');

$var = ' kisu hove';
echo apply_filters('new_custom_hook', $var); 


?>

</body>
</html>