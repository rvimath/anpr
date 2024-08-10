<h1>Vehicle Details</h1> 
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<button onclick='api_fun();'>Fetch Details</button>
<br>
<form>

<?php

$id2 = "<input type='text' name='vehicle' id='vehicle'>";
echo $id2;
?>

<input type="submit" name="submit">	
</form>

<?php

// $myfile = fopen("extraction.txt", "r") or die("Unable to open file!");
// $id2 = fread($myfile,filesize("	.txt"));
// fclose($myfile);



$ch = require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"registrationNumber": "'.$id2.'"}',);
$response = curl_exec($ch); 

print_r($response); //json


?>