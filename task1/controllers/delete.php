<?php

include_once '../config.php';
include_once '../database.php';

error_reporting(0);



$database 	= new Database();
$conn 		= $database->getConnection();

$sapid 		= stripslashes(trim($_REQUEST['sapid']));

$stmt = $conn->prepare("select * from router where sapid = '".$sapid."'");
$stmt->execute();

if($stmt->rowCount()){
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  $insQuery = "update router set delflag=1, modified=now() where sapid = '".$sapid."'";
  $stmt 	= $conn->prepare($insQuery);


  if($stmt->execute()){
	echo "Record deleted succesfully ...";
	header("Location: http://localhost/Cisco/task1/list/"); 
    exit;
  }else{
	echo "Something went wrong ...";
	header("Location: http://localhost/Cisco/task1/list/"); 
  }
}else{
	header("Location: http://localhost/Cisco/task1/list/"); 
}

include_once '../views/footer.php';


