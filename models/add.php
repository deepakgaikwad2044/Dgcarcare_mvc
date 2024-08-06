<?php

 require_once("../config/db.php");
 

 try {
   
  $query = $_POST['query'];
  $email = $_POST['email'];
 
  $sel = "select * from users where email = '$email' ";
  
  $query_fire = $conn->prepare($sel);
  $query_fire->execute();
  $row = $query_fire->fetchAll(PDO::FETCH_ASSOC);
 
$row_count = $query_fire->rowCount(); 
 
if($row_count > 0 ){

  $response = [
    "success" => false,
"message" => "Your request has already been submitted. We will contact you shortly."

];
header('Content-Type: application/json');
echo json_encode($response);
}else{
 $sql = "insert into users (query, email)  values ( :query , :email) ";
 
$smt = $conn->prepare($sql);
 $smt->bindParam(":query", $query );
 $smt->bindParam(":email", $email );
$smt->execute();

  $response = [
    "success" => true,
"message" => "Your request has been successfully submitted. We will contact you shortly."

];
header('Content-Type: application/json');
echo json_encode($response);
}
}catch(PDO_Exception $e){
  echo "error:" . $e->getMessage();
}
// if(count($row) > 0){
//  echo $row;
// }else{
//   echo "no record found";
// }
?>