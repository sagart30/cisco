<?php

include_once '../config.php';
include_once '../database.php';



$database = new Database();
$conn = $database->getConnection();

$stmt = $conn->prepare("select * from router where delflag = 0");
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

  if($_REQUEST['getlist']){
    $ajaxData = "";
    foreach($arr['record'] as $key => $val){
      $ajaxData .= '<tr>
          <th>'.$val["sapid"].'</th>
          <th>'.$val["hostname"].'</th>
          <th>'.$val["loopback"].'</th>
          <th>'.$val["macaddress"].'</th>
          <th>'.$val["created"].'</th>
          <th>'.$val["modified"].'</th>
          <th><a href="../update/'.$val['sapid'].'/" >Edit</a></th>
          <th><a href="../delete/'.$val['sapid'].'/" >Delete</a></th>
        </tr>';
    }
    echo $ajaxData;
    exit;
  }
  include_once '../views/header.php';
  include_once '../views/list.php';
}else{
  echo "No record found";
}



include_once '../views/footer.php';
