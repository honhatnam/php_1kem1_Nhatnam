<?php
$fileName = 'files/abc.txt';

//hien thi ten tap tin

echo basename($fileName).'<br>';
echo basename($fileName,'.txt').'<br>';

//tra ve ten thu muc
echo dirname($fileName).'<br>';

// tra ve mang thong tin
$pathInfo = pathinfo($fileName);
echo $path = pathinfo($fileName, PATHINFO_EXTENSION).'<br>';
echo $path = pathinfo($fileName, PATHINFO_BASENAME).'<br>';
echo $path = pathinfo($fileName, PATHINFO_DIRNAME).'<br>';
echo $path = pathinfo($fileName, PATHINFO_FILENAME).'<br>';


echo file($fileName);
echo '<pre>';
print_r($fileName);
echo '</pre>';
