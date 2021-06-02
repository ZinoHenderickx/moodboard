<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "header.php";
include "../database/dbmoodboard.php";
?>
<?php
$sql = "SELECT DISTINCT FirstName FROM leerling WHERE UserID = 1 ";
$result = $conn-> query($sql);

$FirstName = array();

while($row = $result-> fetch_assoc()){
    $FirstName[] = $row['FirstName'];
}
?>
<html>
<head>
  <link rel="stylesheet" href="../styles/values.css">
</head>
<body>
<form action="values.php" method="get">




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

 
<p>Date: <input type="text" id="datepicker" name="date"></p>
<td><input type="submit" name="Submit" value="Show" tabindex="10" /></td>
</form>


<?php
  if(isset($_GET["date"])) {
    $SelectedDate = $_GET["date"];
}
?>

<table>
    <tr>
        <th>Emotie</th>
        <th>Waarde</th>
    </tr>
    <?php
    // $connection = $conn->query($sql);
    
    $sql = "SELECT `emotie`, `CreateTime`, DATE(`CreateTime`)  FROM `value` WHERE `UserID` = 1 AND DATE_FORMAT(DATE(`CreateTime`),'%m/%d/%Y')  = '".$SelectedDate."'" ; 
    $result = $conn-> query($sql);


    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["emotie"]
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