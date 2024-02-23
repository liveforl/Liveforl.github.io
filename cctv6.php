<?php
$data=file_get_contents(“https://www.1905.com”);
preg_match("/video:\'(.*?)\'/",$data,$matches);
$playurl=$matches[1];
header('Location: '.$playurl);
?>
