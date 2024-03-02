<?php
$data=file_get_contents(“https://m.1905.com/m/cctv6/gzh/?home”);
preg_match("/video:\'(.*?)\'/",$data,$matches);
$playurl=$matches[1];
header('Location: '.$playurl);
?>
