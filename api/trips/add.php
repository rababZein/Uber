<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// instantiate curl object
include_once '../objects/curl.php';


// get database connection
include_once '../config/database.php';
 
// instantiate trips object
include_once '../objects/trips.php';




 
$database = new Database();
$db = $database->getConnection();
 
$trip = new Trips($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));

$curl = new Curl();
$access_token= $curl->getAccessToken($data->username,$data->password);
if(isset($access_token["access_token"])){
    $driver_reference=$curl->getDriverReferenceNum($access_token["access_token"]);
}else{
    echo '{';
        echo '"message": "Unable to add trip. the username or password is incorrect"';
    echo '}';
    exit;
}
if(isset($driver_reference["sub"])){
    $trip->driver_reference =$driver_reference["sub"];
}else{
    echo '{';
        echo '"message": "Unable to add trip. this user may has a problm.  please try with another user"';
    echo '}';
    exit;
}
$trip->trip_date = date('Y-m-d H:i:s');

 
// create the trip for the specific driver
if($trip->create()){
    echo '{';
        echo '"message": "Trip was added."';
        // echo '"driver_reference": "'.$driver_reference.'",';
        // echo '"password": '.$data->password;
    echo '}';
}
 
// if unable to create the trip, tell the user
else{
    echo '{';
        echo '"message": "Unable to add trip."';
    echo '}';
}
?>