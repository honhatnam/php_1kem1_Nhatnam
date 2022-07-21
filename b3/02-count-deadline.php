<?php
$input = '69';
$strID = "78, 60,62,68,69,68,73,85,66 ,69,65,74,63,67 ,65,64,68,73,75,69,73,169";

// Input: Chuỗi lưu trữ ID của các Developer bị trễ task
// Requirement: Tìm xem Developer có ID 69 bị trễ task bao nhiêu lần
// Output: 3
//chuyen chuoi sang mang, dem so lan value

$strID = explode(',',$strID);
$strID = array_count_values($strID);
echo $strID[$input];


echo '<pre style="color: red;">';
print_r($strID);
echo '</pre>';
