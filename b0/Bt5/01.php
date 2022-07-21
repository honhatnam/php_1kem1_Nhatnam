
<?php
$fileName = 'files/test.txt';

if(file_exists($fileName)){
    $data = file($fileName);
    unset($data[2]);
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    file_put_contents($fileName,$data);
}else{
    echo 'Tập tin không tồn tại';
}
