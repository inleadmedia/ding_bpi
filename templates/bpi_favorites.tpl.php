<h3>Show only</h3>
<?php

echo theme('bpi_flag_dropdown', array('selected' => 0));

?>

<br /><br />

<?

echo drupal_render_children($form);

?>