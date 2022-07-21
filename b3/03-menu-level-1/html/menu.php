<?php
  require_once 'data.php';
  $xhtml = '';
  foreach($arrMenu as $keyLeverOne => $valueLeverOne){
    $xhtml .= '<li><a href="'.$valueLeverOne['link'].'">'.$valueLeverOne['name'].'</a></li>';
  }
       
?>
<div class="menuBackground">
<div class="center">
    <ul class="dropDownMenu">
        <?=$xhtml?>
    </ul>
</div>
</div>
