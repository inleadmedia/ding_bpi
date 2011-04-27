<div class="page_form">
  <?php
  
  echo drupal_render(drupal_get_form('bpi_search_form'));
  
  ?>
</div>
<div class="page_result">
  <?php

  echo drupal_render(drupal_get_form('bpi_search_filters'));

  ?>

  <div id="bpi_nodes">
  <?php

  echo bpi_well_nodes();

  ?>
  </div>
  <div class="clear"></div>
</div>