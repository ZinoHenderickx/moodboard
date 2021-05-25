<?php
include 'dbmoodboard.php'; //Include van je database.


 
function AllStudents(){ //Maakt een functie aan.
  global $conn; //Globale connectie, want de database moeten worden opgeroepen.
  if($conn){ //Als je connectie hebt doe het volgende.
    $sql = "SELECT * FROM `leerling` WHERE 1"; //Selecteer alles van het tabel 'Leerling' waar het account actief van is.
    $result = mysqli_query($conn,$sql); //Krijg de resultaten mee van de select.
    if ($result){ //Als er resultaten zijn doe het volgende.
      header("Content-Type: JSON"); //Content type van wat er wordt weergegeven.
      $i = 0; //Zet op de eerste plaats de response van je opgevraagde data.
      while ($row = mysqli_fetch_assoc($result)){ //Terwijl informatie wordt opgevraagd geef het volgende weer.
        $response[$i]['Firstname'] = $row ['FirstName']; //Geeft een response met de gekozen benaming, en haalt dit uit de rij van de database.
        $response[$i]['Lastname'] = $row ['LastName']; //Bijvoorbeeld: Ik wil dat LastName uit mijn database word weergegeven als Lastname.
        $response[$i]['Leerjaar'] = $row ['Leerjaar'];
        $response[$i]['Email'] = $row ['Email'];
        $i++;
      }
      echo json_encode($response,JSON_PRETTY_PRINT); //Echo van opgevraagde data in een JSON formaat.
    }
  }
}

function AllValues(){
  global $conn;
  if($conn){
    $sql = "SELECT * FROM `value` WHERE 1";
    $result = mysqli_query($conn,$sql);
    if ($result){
      header("Content-Type: JSON");
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)){
        $response[$i]['Emotie'] = $row ['emotie'];
        $response[$i]['Value'] = $row ['value'];
        $i++;
      }
      echo json_encode($response,JSON_PRETTY_PRINT);
    }
  }
}
?>