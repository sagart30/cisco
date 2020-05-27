<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

error_reporting(0);

if(getallheaders()['token'] == "abcdefg"){

  $hostname   = getallheaders()['hostname'];
  $loopback   = getallheaders()['loopback'];
  $macaddress = getallheaders()['macaddress'];
  $sapid      = getallheaders()['sapid'];

  $conn       = new PDO("mysql:host=localhost;dbname=test",'root', '');

  $stmt       = $conn->prepare("select * from router where sapid = '".$sapid."'");
  $stmt->execute();

  if($stmt->rowCount()){
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $insQuery = "update router set hostname=:hostname, loopback=:loopback, macaddress=:macaddress, delflag=0, modified=now() where sapid = '".$sapid."'";
  $stmt   = $conn->prepare($insQuery);

  $stmt->bindParam(":hostname",$hostname);
  $stmt->bindParam(":loopback",$loopback);
  $stmt->bindParam(":macaddress",$macaddress);

    if($stmt->execute()){
      http_response_code(201);//Created
      echo json_encode(array('message'=>'Record updated'));
    }
  }  
}else{
  http_response_code(404);
  echo json_encode(array('message'=>'No record found'));
}
