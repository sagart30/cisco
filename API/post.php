<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

error_reporting(0);

if(getallheaders()['token'] == "abcdefg"){

  $hostname   = getallheaders()['hostname'];
  $loopback   = getallheaders()['loopback'];
  $macaddress = getallheaders()['macaddress'];

  $conn = new PDO("mysql:host=localhost;dbname=test",'root', '');

  $insQuery = "insert into router set hostname=:hostname, loopback=:loopback, macaddress=:macaddress, created=now(), modified=now()";
  $stmt   = $conn->prepare($insQuery);

  $stmt->bindParam(":hostname",$hostname);
  $stmt->bindParam(":loopback",$loopback);
  $stmt->bindParam(":macaddress",$macaddress);


  if($stmt->execute()){
      http_response_code(201);//Created
      echo json_encode(array('message'=>'Record Created'));
  }
}else{
  http_response_code(404);
  echo json_encode(array('message'=>'No record found'));
}
