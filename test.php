<?php
$id = isset($_GET['id'])?$_GET['id']:'11342412';
$url = "https://www.huya.com/".$id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
preg_match('/"sStreamName":"(.*?)"/i',$data,$qian);
$hou="https://hw.hls.huya.com/src/".$qian[1].".m3u8";
header('Location:'.$hou);
?>
