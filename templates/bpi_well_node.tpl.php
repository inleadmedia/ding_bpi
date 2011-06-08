<div class="well_node">
  <div class="node_col">
    <h1 class="node_title" style="float: left"><?=$title?></h1>
    <p style="float: right;"><input type="checkbox" <?php if($read) : ?>checked="checked"<?php ;endif?> /></p>
    <div class="clear"></div>
    <?=theme('bpi_flag_dropdown')?>
    <div class="clear"></div>
    <p class="node_description"><?=$description?></p>
    <div class="node_controls">
      <div class="syndicate"><?=l('Syndicate', 'admin/content/ajax/node/1/syndicate', array('attributes' => array('class' => array('use-ajax'))))?></div>
      <div><?=l('Preview', 'node/1')?></div>
      <div>Kommentar</div>
    </div>
    <div class="clear"></div>
    <div class="rating">
      <img src="<?=BPI_PATH . '/img/star-off.png'?>" width="12" height="12" alt="" />
      <img src="<?=BPI_PATH . '/img/star-off.png'?>" width="12" height="12" alt="" />
      <img src="<?=BPI_PATH . '/img/star-off.png'?>" width="12" height="12" alt="" />
      <img src="<?=BPI_PATH . '/img/star-off.png'?>" width="12" height="12" alt="" />
      <img src="<?=BPI_PATH . '/img/star-off.png'?>" width="12" height="12" alt="" />
      <span>(<?=$rated?>)</span>
    </div>
  </div>
  <div class="node_col">
    <p>Dato: <?=$date?></p>
    <p>Forfatter: <?=$author?></p>
    <p>Kategori: <?=$category?></p>
    <p>Ibrug: <?=$syndicated?></p>
  </div>
  <div class="node_col">
    <p>Lix: <?=$lix?></p>
    <p>Bibliotek: <?=$library?></p>
    <p>Kanal: <?=$channel?></p>
    <p class="details"><?=l('Vis alle detaljer >>', 'node/1')?></p>
  </div>
  <div class="clear"></div>
  <hr />
</div>
