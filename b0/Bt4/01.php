<?php
$path =  'files/abc.txt';
$record = file($path);



$data = file_get_contents($path);
preg_match_all('#\S\s\S#ismU',$data,$matches);
$chaNoSpace = count($matches[0]);
// echo '<pre>';
// print_r($matches);
// echo '</pre>';

echo 'Tổng số dòng: '.count($record).'<br>';
echo 'Tổng số từ: '.str_word_count($data).'<br>';
echo 'Tổng số khoảng trắng: '.substr_count($data,' ').'<br>';
echo 'Tổng số ký tự: '.strlen($data).'<br>';
echo 'Tổng số ký tự ko có khoảng trắng: '.$chaNoSpace.'<br>';
