<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "dbmoodboard.php";
include "registratie_stijl.css";
?>
<html>
<body>
<?php

if( isset($_POST['Leerjaar']) )
{
    $Leerjaar = $_POST['Leerjaar'];


    //Registreren:
    $sql="INSERT INTO leerling(`Leerjaar` VALUES '".$Leerjaar."')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        
        echo "OK, je bent geregistreerd."; 
        Header("location:login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Einde registreren
}
?>

<form action="registration.php" method="post">
  <div class="containerreg">
    <h1>Registratie</h1>
    <p>Gelieve alles in te vullen om een account te creëren.</p>


    <label for="Leerjaar"><b> Leerjaar</b></label>
    <select name="Leerjaar">
    <optgroup label="Eerste leerjaar">
    <option value="1A">1A</option>
    <option value="1B">1B</option>
  </optgroup>
  <optgroup label="Tweede leerjaar">
    <option value="2A">2A</option>
    <option value="2B">2B</option>
  </optgroup>
  <optgroup label="Derde leerjaar">
    <option value="3A">3A</option>
    <option value="3B">3B</option>
  </optgroup>
  <optgroup label="Vierde leerjaar">
    <option value="4A">4A</option>
    <option value="4B">4B</option>
  </optgroup>
  <optgroup label="Vijfde leerjaar">
    <option value="5A">5A</option>
    <option value="5B">5B</option>
  </optgroup>
  <optgroup label="Zesde leerjaar">
    <option value="6A">6A</option>
    <option value="6B">6B</option>
  </optgroup>
    </select>

    <hr>
    <p>Door je te registreren accepteer je de privacyvoorwaarden <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" value="Submit" class="registerbtn">Register</button>
  </div>

</form>
</body>
</html> 