<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "dbregistratie.php";
include "registratie_stijl.css";
?>
<html>
<body>
<?php

if( isset($_POST['Email']) )
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //Registreren:
    $sql="INSERT INTO registratie(`ID`, `FirstName`, `LastName`, `Email`, `Password`) VALUES (UUID(),'".$FirstName."','".$LastName."','".$Email."','".HASH("SHA512",$Password)."')";

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
    <hr>
    <p>Al een account? <a href="login.php">Meld je hier aan</a>.</p>
    <hr>
    
    <label for="first name"><b>Voornaam</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" value="">
    
    <label for="last name"><b>Achternaam</b></label>
    <input type="text" placeholder="Enter Last name" name="LastName" value="">
    <div> 
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