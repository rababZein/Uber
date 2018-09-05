<?php
class Curl{
    private $ch_get1;
    private $ch_get2;
    // constructor to initalize curl
    // public function __construct(){
    //     $this->ch_get = curl_init();
    // }
    // get access token of the loginned driver
    function getAccessToken($username,$password){
        $this->ch_get1 = curl_init();
        curl_setopt($this->ch_get1,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/token");
        curl_setopt($this->ch_get1, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($this->ch_get1, CURLOPT_POSTFIELDS,
        "username=".$username."&password=".$password."&client_id=tutorial-frontend&grant_type=password" );
        curl_setopt($this->ch_get1, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($this->ch_get1, CURLOPT_HTTPHEADER,array(
            "Content-Type" => "application/x-www-form-urlencoded"
        ));
        $response = curl_exec($this->ch_get1);
        $response = json_decode($response, true); //because of true, it's in an array
        curl_close($this->ch_get1);
        //return $response ["access_token"] ;
        return $response ;
    }
    // get driver reference number of the loginned driver
    function getDriverReferenceNum($access_token){
        $this->ch_get2 = curl_init();
        curl_setopt($this->ch_get2,CURLOPT_URL , "localhost:8080/auth/realms/Demo-Realm/protocol/openid-connect/userinfo");
        curl_setopt($this->ch_get2, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($this->ch_get2, CURLOPT_POSTFIELDS,
         "access_token=".$access_token );
        curl_setopt($this->ch_get2, CURLOPT_RETURNTRANSFER, true);    
        curl_setopt($this->ch_get2, CURLOPT_HTTPHEADER,array(
            "Content-Type" => "application/x-www-form-urlencoded"
        ));
        $response = curl_exec($this->ch_get2);
        $response = json_decode($response, true);
        //$driver_reference = $response["sub"];
        curl_close($this->ch_get2);
        //return $driver_reference;   
        return $response; 
    }


}
?>