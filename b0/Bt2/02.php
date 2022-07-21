<?php
$fileName = 'files/video.mp4';

$size = filesize($fileName);


// 1kb = 1024b
// 1mb = 1024kn
// 1gb = 1024mb
// 1tb = 1024gb

function convertSize($size, $totalDigit = 2, $ditance=' '){
    $units = array('B','KB','MB','GB','G');

    $length = count($units);
 for($i = 0;$i < $length;$i++){
    if($size > 1024){
        $size = $size / 1024;
    }else{
        $unit = $units[$i];
        break;
    }}
    $resul = round($size,$totalDigit). $ditance.$unit;
return  $resul;
 }

 echo convertSize($size);
