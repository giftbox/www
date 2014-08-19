<?php
header('content-type:text/html; charset=UTF-8');

$fileName = 'data/album.json';
$jsonContentUtf8 = file_get_contents($fileName); //may use iconv()
$dataFromJson = json_decode($jsonContentUtf8, true); // decode as array
echo $dataFromJson[0]['name'];
?>