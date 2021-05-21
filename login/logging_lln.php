<?php
include "/moodboard/websiteheader_moodboard.php";
include "moodboard/database/dbmoodboard.php";
?>

<?php
$data = json_decode(file_get_contents('php://input'), true);
echo $data;
$ID = $data["ID"];
$emotie = $data["emotie"];
echo $emotie;
echo $ID;
?>

<?php
$sql = "INSERT INTO `value`(`ID`, `emotie`) VALUES '".$ID."','".$emotie."')";
$result = $conn->query($sql);
// $sql2 = "UPDATE `value` SET `value` = "+1" WHERE ID = '".$ID."'";
// $result = $conn->query($sql2);
?>

<?php
// if "emotie" = "blij"
    // $sql = "UPDATE `value` SET `value` = `+1` UPDATE "+1")";
    // $sql2 = "UPDATE `value` SET `value` = `+1` WHERE ID = 88f512a2-a296-11eb-89be-128f5d1833e3";
    // $result = $conn->query($sql2);
?>