<?php

$flags = array('flag_black', 'flag_green', 'flag_yellow', 'flag_red');

?>

<div class="dropdown">
  <select name="favorites">
    <?php
    foreach($flags as $k=>$v) {
      echo '<option value="' . ($k + 1) . '_'. mt_rand() .'" ' . ((($k + 1) == $selected) ? 'selected="selected"' : '') .'>' . $k . '</option>';
    }
    ?>
  </select>
</div>
