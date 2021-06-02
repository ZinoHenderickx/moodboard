<?php
include "header_log.php";
include "../database/dbmoodboard.php";
?>

<?php
$data = json_decode(file_get_contents('php://input'), true);
$emotie = $data['emotie'];

if(isset($emotie)){
    $sql = "INSERT INTO `value`(`ID`, `UserID`, `emotie`) VALUES (UUID(), 1, '".$emotie."')";
    $result = $conn->query($sql);
}
?>
