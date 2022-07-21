
<?php
$source = 'files/abc.txt';
$dest = 'files/result.txt';

if(copy($source,$dest)==true){
    echo 'sucess';
}