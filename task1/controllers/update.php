<?php

include_once '../config.php';
include_once '../database.php';


include_once '../views/header.php';


$database 	= new Database();
$conn 		= $database->getConnection();

$sapid 		= stripslashes(trim($_REQUEST['sapid']));

$stmt = $conn->prepare("select * from router where sapid = '".$sapid."'");
$stmt->execute();

if($stmt->rowCount()){
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if(count($_REQUEST) && $_REQUEST['sapid'] != "" && $_REQUEST['hostname'] != "" && $_REQUEST['loopback'] != "" && $_REQUEST['macaddress'] != ""){

  $insQuery = "update router set hostname=:hostname, loopback=:loopback, macaddress=:macaddress, delflag=0, modified=now() where sapid = '".$sapid."'";
  $stmt 	= $conn->prepare($insQuery);

  $stmt->bindParam(":hostname",$_REQUEST['hostname']);
  $stmt->bindParam(":loopback",$_REQUEST['loopback']);
  $stmt->bindParam(":macaddress",$_REQUEST['macaddress']);

  if($stmt->execute()){
  	echo "Record updated succesfully ...";
    include_once '../views/update.php';
  	header("Location: http://localhost/Cisco/task1/list/"); 
    exit;
  }else{
	echo "Something went wrong ...";
	include_once '../views/update.php';
  }
}else{
	include_once '../views/update.php';
}

include_once '../views/footer.php';


