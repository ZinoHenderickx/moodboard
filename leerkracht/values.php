<?php
include "header.php";
include "../database/dbmoodboard.php";
?>
<?php
$sql = "SELECT DISTINCT FirstName FROM `leerling` WHERE Leerjaar = '1A' ";
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

Selecteer leerling:
<select name="FirstName">
    <option>Selecteer leerling</option>
    <?php
                    foreach ($FirstName as $class) {
                        echo "<option value='$class'>" . $class . " </option>";
                    }
                ?>
</select>




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
  if(isset($_GET["FirstName"], $_GET["date"])) {
    $SelectedFirstName = $_GET["FirstName"];
    $SelectedDate = $_GET["date"];
}
?>

<table>
    <tr>
        <th>Emotie</th>
        <th>Tijd</th>
    </tr>
    <?php
    // $connection = $conn->query($sql);
    $sql = "SELECT `emotie`, `CreateTime`, DATE(`CreateTime`)  FROM `value` WHERE `UserID` = 1 AND DATE_FORMAT(DATE(`CreateTime`),'%m/%d/%Y')  = '".$SelectedDate."'" ; 
    $result = $conn-> query($sql);


    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>".$row["emotie"]
              ."</td><td>" . $row["CreateTime"]
              ."</td></tr>";
      }
      echo "</table>";
  }
  else {
      echo "Geen resultaten";
  }
  $conn-> close();
  ?>
</table>


</body>
</html>