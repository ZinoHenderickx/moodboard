<?php
include 'database/dbmoodboard.php';
 
function AllInfo(){
  $conn = createDbConnection();
  if($conn){
    $sql = "SELECT * FROM `leerling` WHERE 1";
    $result = mysqli_query($conn,$sql);
    if ($result){
      header("Content-Type: JSON");
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)){
        $response[$i]['Firstname'] = $row ['FirstName'];
        $response[$i]['Lastname'] = $row ['LastName'];
        $response[$i]['Leerjaar'] = $row ['Leerjaar'];
        $response[$i]['Email'] = $row ['Email'];
        $i++;
      }
      echo json_encode($response,JSON_PRETTY_PRINT);
    }
  }
}