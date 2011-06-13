<?php
/**
 * @file
 *
 */

$favorites = unserialize($selected);

?>

<div class="dropdown">
  <div class="flags_container">
    <div class="flags">
      <br />
      <div class="flag">
        <label for="black"><img src="/<?php echo BPI_PATH;?>/img/flag_black.jpg" width="16" height="16" alt="" /></label>
        <input id="black" name="flagged[]" type="checkbox" value="0" <?php echo (($favorites[0]) ? 'checked="checked"' : ''); ?> />
        <div class="clear"></div>
      </div>
      <div class="flag">
        <label for="red"><img src="/<?php echo BPI_PATH;?>/img/flag_red.jpg" width="16" height="16" alt="" /></label>
        <input id="red" name="flagged[]" type="checkbox" value="1" <?php echo (($favorites[1]) ? 'checked="checked"' : ''); ?> />
        <div class="clear"></div>
      </div>
      <div class="flag">
        <label for="yellow"><img src="/<?php echo BPI_PATH;?>/img/flag_yellow.jpg" width="16" height="16" alt="" /></label>
        <input id="yellow" name="flagged[]" type="checkbox" value="2" <?php echo (($favorites[2]) ? 'checked="checked"' : ''); ?> />
        <div class="clear"></div>
      </div>
      <div class="flag">
        <label for="green"><img src="/<?php echo BPI_PATH;?>/img/flag_green.jpg" width="16" height="16" alt="" /></label>
        <input id="green" name="flagged[]" type="checkbox" value="3" <?php echo (($favorites[3]) ? 'checked="checked"' : ''); ?> />
        <div class="clear"></div>
      </div>
    </div>
    <div class="indicator">&nbsp;</div>
    <div class="clear"></div>
  </div>
</div>
