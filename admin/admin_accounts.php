<?php
include "admin_header.php";
include '../database/dbmoodboard.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<head>
  <link rel="stylesheet" href="../stijlen/values.css">
</head>
<body>
<table style="float: left;">
<th>Leerlingen</th>
    <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Leerjaar</th>
        <th>Email</th>
        <th>Datum account</th>
    </tr>

<?php
$sql = "SELECT * FROM leerling  WHERE IsActive = 1";
$result = mysqli_query($conn,$sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["FirstName"]
            ."</td><td>" . $row["LastName"]
            ."</td><td>" . $row["Leerjaar"]
            ."</td><td>" . $row["Email"]
            ."</td><td>" . $row["CreateTime"]
            ."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
?>
</table>

<table style="float: left;">
<th>Leerkrachten</th>
    <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Leerjaar</th>
        <th>Email</th>
        <th>Datum account</th>
    </tr>

<?php
$sql2 = "SELECT * FROM `leerkracht`  WHERE IsActive = 1";
$result = mysqli_query($conn,$sql2);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["FirstName"]
            ."</td><td>" . $row["LastName"]
            ."</td><td>" . $row["Leerjaar"]
            ."</td><td>" . $row["Email"]
            ."</td><td>" . $row["CreateTime"]
            ."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
$conn-> close();
?>
</table>
</body>
</html>