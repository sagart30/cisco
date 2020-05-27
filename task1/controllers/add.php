<?php

include_once '../config.php';
include_once '../database.php';


include_once '../views/header.php';


$database 	= new Database();
$conn 		= $database->getConnection();

if(count($_REQUEST) && $_REQUEST['hostname'] != "" && $_REQUEST['loopback'] != "" && $_REQUEST['macaddress'] != ""){

  $insQuery = "insert into router set hostname=:hostname, loopback=:loopback, macaddress=:macaddress, created=now(), modified=now()";
  $stmt 	= $conn->prepare($insQuery);

  $stmt->bindParam(":hostname",$_REQUEST['hostname']);
  $stmt->bindParam(":loopback",$_REQUEST['loopback']);
  $stmt->bindParam(":macaddress",$_REQUEST['macaddress']);

  if($stmt->execute()){
	echo "Record added succesfully ...";
	header("Location: http://localhost/Cisco/task1/list/"); 
    exit;
  }else{
	echo "Something went wrong ...";
	include_once '../views/addnew.php';
  }
}else{
	include_once '../views/addnew.php';
}

include_once 'footer.php';


