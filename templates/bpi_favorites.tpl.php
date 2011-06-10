<?
/**
 * @file
 *
 */
?>

<div class="filters">
  <h3>Show only</h3>
  <div class="flag_filter">
    <?php echo drupal_render($form['show_red']); ?>
  </div>
  <div class="flag_filter">
    <?php echo drupal_render($form['show_yellow']); ?>
  </div>
  <div class="flag_filter">
    <?php echo drupal_render($form['show_green']); ?>
  </div>
  <div class="clear"></div>
</div>
<?php

echo drupal_render_children($form);

?>
