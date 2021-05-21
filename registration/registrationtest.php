<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "dbmoodboard.php";
include "header_moodboard.php";

?>
<html>
<head>
<body>
  <title>Registration system PHP and MySQL</title>
 <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
}

.active {
  background-color: black;
}
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}


form, .content {
  width: 30%;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}


</style>
</head>
  

<form action="registrationtest.php" method="post">
      <br>
            First Name:<br>
      <input type="text" name="FirstName" value="">
			<br>
            E-mail:<br>
			<input type="text" name="Email" value="">
			<br>
            Password:<br>
			<input type="password" name="Password" value="">
			
			<br><br>
			<input type="submit" value="Submit">
		</form> 
<?php 

if( isset($_POST['Email']) )
{
    $FirstName=$_POST['FirstName'];
    $Email=$_POST['Email'];
    $Pass=$_POST['Password'];
    //REgistreren:
    $sql="INSERT INTO moodboard(`ID`, `FirstName`, `Email`, `Password`) VALUES (UUID(),'".$FirstName."','".$Email."','".HASH("SHA512",$Password)."')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        
        echo "OK, je bent geregistreerd."; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Einde registreren
    
}

?>

</body>
</html>