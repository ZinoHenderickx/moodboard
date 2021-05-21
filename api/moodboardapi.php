<?php
include 'dbmoodboard.php';
 
function AllInfo(){
  $conn = createDbConnection();
  if($conn){
    $sql = "SELECT * FROM `products` WHERE 1";
    $result = mysqli_query($conn,$sql);
    if ($result){
      header("Content-Type: JSON");
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)){
        $response[$i]['ID'] = $row ['ID'];
        $response[$i]['ProductName'] = $row ['ProductName'];
        $response[$i]['Price'] = $row ['Price'];
        $response[$i]['ProductLink'] = $row ['ProductLink'];
        $response[$i]['StoreName'] = $row ['StoreName'];
        $i++;
      }
      echo json_encode($response,JSON_PRETTY_PRINT);
    }
  }
}