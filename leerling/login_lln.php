<?php 
session_start();
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "../database/dbmoodboard.php";
include "../stijlen/login_stijl.css";
?>

<html>
<body>
<form action="login_lln.php" method="post">
    <div class="container">
        <h1>Login</h1>
        <p>Vul alles in als je al een account hebt.</p>
        <hr>
			E-mail:<br>
			<input type="text" name="Email" value="">
			<br>
            Password:<br>
			<input type="Password" name="Password" value="">
			
			<br><br>
            <button type="submit" value="Submit" class="registerbtn">Login</button>
            <hr>
            <p>Nog niet geregistreerd? <a href="registration_lln.php">Maak hier een account</a></p>
		</form> 
<?php



if( isset($_POST['Email']) )
{
    $Email=$_POST['Email'];
    $Pass=$_POST['Password'];
    
    //Zoeken naar gebruiker in database
    $sql="SELECT * FROM `leerling` WHERE `Email`='".$Email."' and  `IsActive`=1 and `Password`='".hash("SHA512",$Pass)."'";

    $result = $conn->query($sql);
    
    if (!empty($result) && $result->num_rows > 0) {
        Header("location:registration_lln.php");

        while($selectedRow = $result->fetch_assoc()) {
            echo "<br>";
            echo "Gevonden user: ".$selectedRow["Email"];
            $_SESSION["Email"]=$selectedRow["Email"];
            $_SESSION["UserID"]=$selectedRow["ID"];
            $_SESSION["FirstName"]=$selectedRow["FirstName"];
            Header("location:home_lln.php");
        }
    }
    else
    {
        echo "User niet gevonden";
    }
}?>


</body>
</html> 