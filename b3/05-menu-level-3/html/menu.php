<?php
  require_once 'data.php';
  $xhtml = '';

//   $url= $_SERVER['REQUEST_URI'];
//   $url = basename( $url);
//   $url = basename( $url, ".php"); 

  foreach($arrMenu as $keyLeverOne => $valueLeverOne){
           $xhtml .= '<li class=""><a href="'.$valueLeverOne['link'].'">'.$valueLeverOne['name'].'</a>';
        if(isset($valueLeverOne['child'])){
            $xhtml .= '<ul class="dropDownMenu">';
                foreach($valueLeverOne['child'] as $keyLeverTwo => $valueLeverTwo){         
                    $xhtml .= '<li class=""><a href="'.$valueLeverTwo['link'].'">'.$valueLeverTwo['name'].'</a>';  
                    if(isset($valueLeverTwo['child']))   {
                        $xhtml .= '<ul class="dropDownMenu">';
                            foreach($valueLeverTwo['child'] as $keyLeverThree => $valueLeverThree ){
                                $xhtml .= '<li class=""><a href="'.$valueLeverThree['link'].'">'.$valueLeverThree['name'].'</a></li>';  
                            }
                        $xhtml .= '</li></ul>';
                    }      
             
                }
            $xhtml .= '</li></ul>';
        }
  }


 
?>
<div class="menuBackground">
    <div class="center">
        <ul class="dropDownMenu">
            <?=$xhtml?>
        </ul>
    </div>
</div>



<!-- <div class="menuBackground">
        <div class="center">
            <ul class="dropDownMenu">
                <li><a href="index.php">Home </a></li>
                <li class="active">
                    <a href="data/about.php">About</a>
                    <ul>
                        <li>
                            <a href="data/service.php">Service</a>
                            <ul>
                                <li><a href="data/sale.php">Sale</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="data/company.php">Company</a>
                            <ul>
                                <li><a href="data/toyota.php">Toyota</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="data/contact.php">Contact </a></li>
            </ul>
        </div>
    </div> -->