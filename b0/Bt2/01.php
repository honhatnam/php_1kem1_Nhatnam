<?php
$fileName = 'files/video.mp4';

$size = filesize($fileName);
echo $size;

// if(file_exists($fileName)){
//     echo 'ton tai';
// }else{echo 'khong ton tai';}