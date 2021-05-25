<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();

date_default_timezone_set("Europe/Brussels");
include './cs/cheapscraperapi.php';
include './pp/functions.php'; //Include je api dat je eerder hebt gemaakt.
include './mb/moodboardapi.php';

$url = $_REQUEST['request']; //Vraagt een request van de gevraagde url.
$method = $_SERVER['REQUEST_METHOD']; //Vraagt een request methode aan.

$url_list = explode("/",$url); //Splitst de url op in delen.
$project = $url_list[0]; //Begin op positie 0 van de url.


if ($method == "POST") { //Maakt een post van de onderstaande lijn.
    $json = json_decode(file_get_contents('php://input'), true); //Decodeer de JSON en krijg de gevraagde content te zien.
}
 

switch($project){ //Switch functie, vervangt de if functies. 
    case "requestToken": //Request een token op de volgende php.
      header('register.php'); //Request de token.
    case "pp": //Project van persoon 1
       
	switch($url_list[1]){ //Begint op de 2de lijn van de url. 0= lijn 1 en 1 is = lijn 2
	  case "ferry": //benaming van de url om op de gevraagde pagina te komen.
        get_next_ferry($_POST['lat'],$_POST['long'],$_POST['time']); //Krijg de gevraagde waarde te zien.
        break;
        }
        //echo "pp";
        break;

    case "moodboard":
        switch ($url_list[1]){
            case "user":
              AllStudents();
              break;
            
            case "values":
              AllValues();
              break;
            }

    case "cheapscraper":
      switch ($url_list[1]){
        case "info":
          AllInfo();
          break;
        
        case "users":
          users();
          break;
        }
        //echo "CheapScraper";
        break;

    default:
	echo "non supported API call";
	return;
}
?>
