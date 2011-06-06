<?php

$flags = array('flag_black', 'flag_green', 'flag_yellow', 'flag_red');

?>

<div class="dropdown">
  <select name="favorites">
    <?php
    foreach($flags as $k=>$v) {
      echo '<option title="/' . BPI_PATH . '/img/' . $v . '.jpg" value="' . ($k + 1) . '_'. mt_rand() .'" ' . (($k == $selected) ? 'selected="selected"' : '') .'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
    }
    ?>
  </select>
</div>
