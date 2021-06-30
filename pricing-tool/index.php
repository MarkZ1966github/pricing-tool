<?php
//REMOVED the session_destroy() as it's really not needed 2/24/2021 mzschiegner
unset($_SESSION);
//session_destroy();
session_start();

$newpage = session_id();

$filename =  "content.php";
$newfilename = "/var/www/tmp/$newpage.php";
$finalloc = "/var/www/pricing.auvis.com/oth/$newpage.php";

copy($filename,$newfilename);
copy($newfilename,$finalloc);

header("Location: ".$_SERVER['REQUEST_SCHEME'].$_SERVER['HTTP_HOST']."/oth/".$newpage.".php");