<?
/**
 * @file
 *
 */
?>

<span><?php

if($in_well) {
  echo 'published';
  
  if ($syndicated > 0) {
    echo ' (' . $syndicated . ')';
  }

} ?></span>
