<?php
$str = "php/127/typescript/12/jquery/120/angular/50";

$str = explode('/',$str);
$Array =[];

foreach($str as $key => $value){
    if($key % 2==0){
        $Array[$value] = $str[$key+1];
    }
       
}

echo '<pre style="color: red;">';
print_r($Array);
echo '</pre>';




    /*
     * Array
     *  (
     *      'php'           => 127
     *      'typescript'    => 12
     *      'jquery'        => 120
     *      'angular'       => 50
     *  )
     *  
     */
