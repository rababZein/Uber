<?php
class Curl{
    private $ch_get;
    // constructor to initalize curl
    public function __construct(){
        $this->ch_get = curl_init();
    }
    // get access token of the loginned driver
    function getAccessToken($username,$password){
        curl_setopt($this->ch_get,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/token");
        curl_setopt($this->ch_get, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($this->ch_get, CURLOPT_POSTFIELDS,
        "username=".$username."&password=".$password."&client_id=tutorial-frontend&grant_type=password" );
        curl_setopt($this->ch_get, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($this->ch_get, CURLOPT_HTTPHEADER,array(
            "Content-Type" => "application/x-www-form-urlencoded"
        ));
        $response = curl_exec($this->ch_get);
        $response = json_decode($response, true); //because of true, it's in an array
        return $response ["access_token"] ;
    }
    // get driver reference number of the loginned driver
    function getDriverReferenceNum($access_token){
        curl_setopt($this->ch_get,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/userinfo");
        curl_setopt($this->ch_get, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($this->ch_get, CURLOPT_POSTFIELDS,
         "access_token=".$access_token );
        curl_setopt($this->ch_get, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($this->ch_get, CURLOPT_HTTPHEADER,array(
            "Content-Type" => "application/x-www-form-urlencoded"
        ));
        $response = curl_exec($this->ch_get);
        $response = json_decode($response, true);
        $driver_reference = $response["sub"];
        return $driver_reference;    
    }


}
?>