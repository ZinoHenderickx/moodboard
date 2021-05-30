<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "moodboard/database/dbmoodboard.php";
include "moodboard/stijlen/registratie_stijl.css";
?>
<html>
<body>
<?php

if( isset($_POST['Email']) )
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Leerjaar = $_POST['Leerjaar'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //Registreren:
    $sql="INSERT INTO leerkracht(`ID`, `FirstName`, `LastName`, `Leerjaar`, `Email`, `Password`) VALUES (UUID(),'".$FirstName."','".$LastName."','".$Leerjaar."','".$Email."','".HASH("SHA512",$Password)."')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        
        echo "OK, je bent geregistreerd."; 
        Header("location:login_llk.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Einde registreren
}
?>

<form action="registration_llk.php" method="post">
  <div class="containerreg">
    <h1>Registratie Leerkracht</h1>
    <p>Gelieve alles in te vullen om een account te creëren.</p>
    <hr>
    <p>Al een account? <a href="login_llk.php">Meld je hier aan.</a>.</p>
    <hr>
    
    <label for="first name"><b>Voornaam</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" value="">
    
    <label for="last name"><b>Achternaam</b></label>
    <input type="text" placeholder="Enter Last name" name="LastName" value="">
    <div> 

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
    <br>
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" value="">

    <label for="password"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Enter Password" name="Password" value="">

    <hr>
    <p>Door je te registreren accepteer je de privacyvoorwaarden <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" value="Submit" class="registerbtn">Register</button>
  </div>

</form>
</body>
</html> 