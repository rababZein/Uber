<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$ch_get = curl_init();
curl_setopt($ch_get,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/token");
curl_setopt($ch_get, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch_get, CURLOPT_POSTFIELDS,
 "username=xx&password=123&client_id=tutorial-frontend&grant_type=password" );
curl_setopt($ch_get, CURLOPT_RETURNTRANSFER, true);    
curl_setopt($ch_get, CURLOPT_HTTPHEADER,array(
    "Content-Type" => "application/x-www-form-urlencoded"
));


$response = curl_exec($ch_get);
//var_dump($response) ;
//$err = curl_error($ch_get);

//curl_close($ch_get);


$response = json_decode($response, true); //because of true, it's in an array
$access_token= $response ["access_token"] ;
//echo $access_token;

curl_setopt($ch_get,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/userinfo");
curl_setopt($ch_get, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch_get, CURLOPT_POSTFIELDS,
 "access_token=".$access_token );
curl_setopt($ch_get, CURLOPT_RETURNTRANSFER, true);    
curl_setopt($ch_get, CURLOPT_HTTPHEADER,array(
    "Content-Type" => "application/x-www-form-urlencoded"
));


$response = curl_exec($ch_get);
$response = json_decode($response, true);
//var_dump($response);
$driver_reference = $response["sub"];
echo $driver_reference;

// $httpcode = curl_getinfo($ch_get, CURLINFO_HTTP_CODE);
// $http_status = curl_getinfo($ch_get, CURLINFO_HTTP_CODE);
$info = curl_getinfo($ch_get);
echo $info["http_code"];
//var_dump($httpcode);

?>