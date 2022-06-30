<?php
require "curlApi.php";

$filePath = $_FILES['file']['tmp_name'];
$type=$_FILES['file']['type'];
$fileName = $_FILES['file']['name'];
    
$data = array('file' => curl_file_create($filePath, $type, $fileName));

$ch = curl_init();     
curl_setopt($ch, CURLOPT_URL, $url.$ADDheystack);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);

// $url = $_SERVER['DOCUMENT_ROOT'];
// header("Location: $url");
?>