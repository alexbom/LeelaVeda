<?php
header("Access-Control-Allow-Origin: *");

$name = md5($_SERVER['REMOTE_ADDR'].time());
$file = '../game/'.$name.'.json';
var_dump($_POST);
if (file_put_contents($file, $_POST['game'], FILE_APPEND)) echo $name;