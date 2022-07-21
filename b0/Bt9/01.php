<?php
$path = 'abc/gh';
if(file_exists($path)==false){
    mkdir($path,0666);
}
chmod($path,0555);
echo substr(sprintf('%o',fileperms($path)),-4);

