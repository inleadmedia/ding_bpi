<div class="well_node">
  <div class="node_col">
    <p class="node_title"><?=$title?><input type="checkbox" <?php if($read) : ?>checked="checked"<?php ;endif?> /></p>
    <p class="node_description"><?=$description?></p>
    <div class="node_controls">
      <div class="syndicate">Syndiker</div>
      <div>Preview</div>
      <div>Kommentar</div>
      <!-- @todo : add rating stars -->
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
    <p class="details"><?=/*l('Vis alle detaljer >>', '#')*/'Vis alle detaljer >>'?></p>
  </div>
  <div class="clear"></div>
  <hr />
</div>
