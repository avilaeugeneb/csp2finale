<?php 

$random = uniqid();

$hashmd5 = md5($random);

$hashmd6 = "PURE".$hashmd5."-xyz";

$refnumber = str_replace("a","0",$hashmd6);
