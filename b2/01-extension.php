<?php
$input  = "D:/GoogleDrive/Doing/__psd/luutruonghailan/youtube-luutruonghadddilan-tamsu.html";

// Phần xử lý của học viên


$name = basename($input);
$name = basename($input, ".psd"); // $file is set to "index"

$ext = pathinfo($input, PATHINFO_EXTENSION);

echo $ext ;
$output = [
    'name'=>$name, 'extension' =>$ext
];






echo $name;
echo '<pre>';
print_r($output);
echo'</pre>';
