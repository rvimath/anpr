<?php

$myfile = fopen("extraction.txt", "r") or die("Unable to open file!");
$id2 = fread($myfile,filesize("extraction.txt"));
fclose($myfile);

$ch = require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"registrationNumber": "'.$id2.'"}',);
$response = curl_exec($ch); 

print_r($response); //json


?>