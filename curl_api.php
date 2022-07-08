<?php 
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL,"http://localhost/create_partner/insert_api.php");
 curl_exec($curl);
 curl_close($curl);

?>