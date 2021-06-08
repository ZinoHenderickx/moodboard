<?php
include "header.php";
include '../database/dbmoodboard.php';
?>


<?php
$sql = "SELECT DISTINCT * FROM leerling  WHERE  ID = '".$_SESSION["UserID"]."'";
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