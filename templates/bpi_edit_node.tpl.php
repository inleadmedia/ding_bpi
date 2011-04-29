<?php

$form = drupal_get_form('bpi_node_edit_form', $node_data);

?>

<div id="bpi_edit_node">
  <?=drupal_render($form['title'])?>
  <div class="l_col l_col_node_body">
    <?=drupal_render($form['body'])?>
    <div class="node_info">
      <div class="l_col">
        <p class="col_header">Information about this node</p>
        <ul>
          <li>
            <span>Pictures in this node <strong>ARE<?php if(isset($node_data['node_info']) && !$node_data['node_info']['pic_copy']) echo ' NOT '; ?></strong> copyrighted.</span>
          </li>
          <li>
            <span>References in node <strong>ARE<?php if(isset($node_data['node_info']) && !$node_data['node_info']['references']) echo ' NOT '; ?> AVAILABLE</strong>.</span>
          </li>
          <li>
            <span>Author: <strong><?=$node_data['node_info']['author']?></strong></span>
          </li>
          <li>
            <span>Library: <strong><?=$node_data['node_info']['library']?></strong></span>
          </li>
          <li>
            <span>Created: <strong><?=$node_data['node_info']['created']?></strong></span>
          </li>
          <li>
            <span>Category: <strong><?=$node_data['node_info']['category']?></strong></span>
          </li>
          <li>
            <span>Target: <strong><?=$node_data['node_info']['target']?></strong></span>
          </li>
          <li>
            <span>Channel(s): <strong><?=implode(', ', $node_data['node_info']['channel'])?></strong></span>
          </li>
          <li>
            <span>Lix: <strong><?=$node_data['node_info']['lix']?></strong></span>
          </li>
        </ul>
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
<?=drupal_render($form); ?>
