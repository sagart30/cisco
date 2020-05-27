<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

error_reporting(0);

if(getallheaders()['token'] == "abcdefg"){

  $conn = new PDO("mysql:host=localhost;dbname=test",'root', '');

  $stmt = $conn->prepare("select * from router");
  $stmt->execute();

  if($stmt->rowCount()){
    $arr['record'] = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $item = array('sapid'=>$row['sapid'],
                  'hostname'=>$row['hostname'],
                  'loopback'=>$row['loopback'],
                  'macaddress'=>$row['macaddress'],
                  'created'=>$row['created'],
                  'modified'=>$row['modified']);

    array_push($arr['record'], $item);
  }
    http_response_code(200);
    echo json_encode($arr['record']);
  }else{
    http_response_code(404);
    echo json_encode(array('message'=>'No record found'));
  }

}else{
  http_response_code(404);
  echo json_encode(array('message'=>'No record found'));
}


