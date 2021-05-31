<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "header_moodboard.php";
include "dbmoodboard.php";
?>
<?php
$sql = "SELECT DISTINCT FirstName FROM `leerling` WHERE FirstName = "Zino" ";
$result = $conn-> query($sql);

$FirstName = array();

while($row = $result-> fetch_assoc()){
    $FirstName[] = $row['FirstName'];
}
?>
<html>
<head>
  <link rel="stylesheet" href="values.css">
</head>
<body>
<form action="values_lln.php" method="get">

Select Gateway:
<select name="FirstName">
    <option>Select Gateway</option>
    <?php
                    foreach ($FirstName as $class) {
                        echo "<option value='$class'>" . $class . " </option>";
                    }
                ?>
</select>
<td><input type="submit" name="Submit" value="Show" tabindex="10" /></td>



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
</form>


<?php
  if(isset($_GET["FirstName"], $_GET["date"])) {
    $SelectedFirstName = $_GET["Firstname"];
    $SelectedDate = $_GET["date"];
}
?>

<table>
    <tr>
        <th>ID</th>
        <th>Emotie</th>
        <th>Value</th>
    </tr>
    <?php
    // $connection = $conn->query($sql);
    $sql = "SELECT `FirstName` FROM `leerling` WHERE FirstName = "Zino"" ; 
    $sql2 = "SELECT `emotie`, `value`, DATE(`CreateTime`)  FROM `value` WHERE `ID` = '".$SelectedGateway."' AND DATE_FORMAT(DATE(`CreateTime`),'%m/%d/%Y')  = '".$SelectedDate."'" ; 
    $result = $conn-> query($sql);
    $result = $conn-> query($sql2);


    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["FirstName"]
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