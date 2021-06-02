<?php
include "../database/dbmoodboard.php";
?>

<?php
$emotie = $data['emotie'];

if(isset($emotie)){
    $sql = "INSERT INTO `value`(`ID`, `UserID`, `emotie`) VALUES (UUID(), 1, $emotie)";
    $result = $conn->query($sql);
}
?>
