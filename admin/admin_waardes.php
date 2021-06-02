<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "admin_header.php";
include "../database/dbmoodboard.php";
?>
<html>
<head>
  <link rel="stylesheet" href="../styles/values.css">
</head>
<body>



<?php
  if(isset($_GET["ID"])) {
    $SelectedFirstName = $_GET["ID"];
}
?>

<table>
    <tr>
        <th>ID</th>
        <th>Emotie</th>
        <th>Waarde</th>
    </tr>
    <?php
    // $connection = $conn->query($sql);
    $sql = "SELECT `ID`,`emotie`, `value`, DATE(`CreateTime`)  FROM `value`" ; 
    $result = $conn-> query($sql);


    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["ID"]
              ."</td><td>" . $row["emotie"]
              ."</td><td>" . $row["value"]
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