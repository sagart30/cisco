<?php

include_once '../config.php';
include_once '../database.php';


$database 	= new Database();
$conn 		= $database->getConnection();

function random_strings($length_of_string) {   
    $str_result = 'abcdefghijklmnopqrstuvwxyz';   
    return substr(str_shuffle($str_result), 0, $length_of_string); 
} 

function random_mac($length_of_string) {   
    $str_result = '0123456789abcdefghijklmnopqrstuvwxyz';   
    return substr(str_shuffle($str_result), 0, $length_of_string); 
} 


if(is_numeric($argv[1])){

	$insQuery 	= "insert into router set hostname=:hostname, loopback=:loopback, macaddress=:macaddress, created=now(), modified=now()";
	$stmt 		= $conn->prepare($insQuery);

	for($i=0;$i<$argv[1];$i++){

		$random_hostname 	= "www.".random_strings(rand(3,10)).".com";
		$random_ipv4 		= rand(100,255).".".rand(100,255).".".rand(100,255).".".rand(100,254);//255.255.255.254
		$random_mac 		= random_mac(2)."-".random_mac(2)."-".random_mac(2)."-".random_mac(2)."-".random_mac(2)."-".random_mac(2);

		$stmt->bindParam(":hostname", $random_hostname);
		$stmt->bindParam(":loopback",$random_ipv4);
		$stmt->bindParam(":macaddress",$random_mac);

		if($stmt->execute()){
			echo "Data Created\n";
		}

	}

}



