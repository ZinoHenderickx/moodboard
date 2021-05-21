<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();

date_default_timezone_set("Europe/Brussels");
include './cs/cheapscraperapi.php';
include './pp/functions.php';
include './api/mb/moodboardapi.php';

$url = $_REQUEST['request'];
$method = $_SERVER['REQUEST_METHOD'];

$url_list = explode("/",$url);
$project = $url_list[0];


if ($method == "POST") {
    $json = json_decode(file_get_contents('php://input'), true);
}
 

switch($project){
    case "requestToken":
      header('register.php');
    case "pp":
       
	switch($url_list[1]){
	  case "ferry":
        get_next_ferry($_POST['lat'],$_POST['long'],$_POST['time']);
        break;
        }
        //echo "pp";
        break;

    case "moodboard":
        switch ($url_list[1]){
            case "user":
              AllInfo();
              break;
            
              case "values"
                Allvalues();
                break;

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
