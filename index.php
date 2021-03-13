<?php 
$ip = file_get_contents("http://ipecho.net/plain");
 $ip;
 
$ipdat = @json_decode(file_get_contents(  
    "http://www.geoplugin.net/json.gp?ip=" . "127.0.0.1")); 
   
echo  $ipdat->geoplugin_countryName;   
?>