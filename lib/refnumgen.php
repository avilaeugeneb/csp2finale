<?php 

$random = uniqid();

$hashmd5 = md5($random);

$hashmd6 = "PURE".$hashmd5."-xyz";

$hashmd7 = str_replace("a","0",$hashmd6);

echo $hashmd7;