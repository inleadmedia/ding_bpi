<?php
/**
 * @file
 *
 */

$node_data = bpi_node_info($variables['node_id']);

?>
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
