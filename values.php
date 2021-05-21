<?php
include "header_moodboard.php";
include "dbmoodboard.php";
?>
<html>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 25%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<head>
    <title>Data moodboard</title>
</head>
<body>
<table>
    <tr>
        <th>Date</th>
        <th>Emotie</th>
    </tr>
    <?php
    $connection = $conn->query($sql);

    // $sql = "SELECT `CreateTime`, `value`, `emotie` FROM `value` WHERE IsActive = 1 AND CreateTime  > DATE_SUB(NOW(),INTERVAL  5 DAY)";
    $sql = "SELECT `emotie`, `CreateTime` FROM `value` WHERE IsActive = 1 AND CreateTime  > DATE_SUB(NOW(),INTERVAL  5 DAY)";  
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["CreateTime"] . "</td><td>" . $row["emotie"] ."</td></tr>";
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