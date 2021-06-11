<?php
include "header.php";
include '../database/dbmoodboard.php';
?>
<head>
    <link rel="stylesheet" href="../styles/classinfo.css">
</head>
<table>
<th>Persoonlijke informatie</th>
    <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Leerjaar</th>
        <th>Email</th>
        <th>Datum account</th>
    </tr>

<?php
$sql = "SELECT DISTINCT * FROM leerling  WHERE IsActive = 1 AND Leerjaar = '1A' ";
$result = mysqli_query($conn,$sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["FirstName"]
            ."</td><td>" . $row["LastName"]
            ."</td><td>" . $row["Leerjaar"]
            ."</td><td>" . $row["Email"]
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

</html>