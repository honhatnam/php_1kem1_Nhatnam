<?php
$array = glob('*es');
echo '<pre style="color: red;">';
print_r($array);
echo '</pre>';
// $path = '/01.php'
// echo getcwd().'<br>';
echo realpath($path).'<br>';