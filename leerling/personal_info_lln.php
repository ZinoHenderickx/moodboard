<?php
include "header_lln.php";
include '../database/dbmoodboard.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
$sql = "SELECT * FROM leerling  WHERE  ID = '".$_SESSION["UserID"]."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result))
{
        echo "<br><b>Persoonlijke Informatie</b>:<br>";
        echo "<b>First name:</b> ". $row['FirstName'];
        echo "<br><b>Last name:</b> ".$row['LastName'];
        echo "<br><b>Email:</b> ".$row['Email'];
        echo "<br><b>Date created :</b> ".$row['CreateTime'];
}
mysqli_close($conn);
?>

</html>