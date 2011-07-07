<?php
/**
 * @file
 *
 */

$favorites = unserialize($selected);

echo (($favorites[0]) ? '<img src="/' . BPI_PATH . '/img/flag_black.jpg" width="16" height="16" alt="" />' : '');
echo (($favorites[1]) ? '<img src="/' . BPI_PATH . '/img/flag_red.jpg" width="16" height="16" alt="" />' : ''); 
echo (($favorites[2]) ? '<img src="/' . BPI_PATH . '/img/flag_yellow.jpg" width="16" height="16" alt="" />' : '');
echo (($favorites[3]) ? '<img src="/' . BPI_PATH . '/img/flag_green.jpg" width="16" height="16" alt="" />' : '');
