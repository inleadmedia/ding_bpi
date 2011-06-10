<?
/**
 * @file
 *
 */
?>

<div id="bpi_edit_node">
  <?=drupal_render($form['title'])?>
  <div class="l_col l_col_node_body">
    <?=drupal_render($form['body'])?>
    <div class="node_info">
      <div class="l_col">
        <?=theme('node_info', array('node_id' => $form['id']['#value']))?>
      </div>
      <div class="r_col">
        <p class="col_header">Operations</p>
        <p><?=drupal_render($form['auto_update'])?></p>
        <p><?=drupal_render($form['copy_images'])?></p>
        <p><?=drupal_render($form['local_changes'])?></p>
        <p><?=drupal_render($form['auto_publish'])?></p>
        <p><?=drupal_render($form['auto_promote'])?></p>
        <p><?=drupal_render($form['references_ting'])?></p>
        <p><?=drupal_render($form['references_links'])?></p>
        <p><?=drupal_render($form['syndication_changes'])?></p>
        <p><?=drupal_render($form['view_syndication'])?></p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="r_col r_col_node_teaser">
    <?=drupal_render($form['teaser'])?>
    <div class="node_images">
      <p><strong>Images</strong></p>
      <img src="#" alt="" />
      <img src="#" alt="" />
      <div class="clear"></div>
      <img src="#" alt="" />
      <img src="#" alt="" />
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?=drupal_render_children($form); ?>
