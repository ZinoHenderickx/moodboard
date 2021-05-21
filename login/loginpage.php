<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "dbmoodboard.php";
include "header_moodboard.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: grey;
}

* {
  box-sizing: border-box;
}

.container {
    border-radius: 15px;
    float: left;
    margin-left: 50px;
    margin-top: 15px;
    width: 25%;
  padding: 16px;
  background-color: white;
}

/* Add padding to containers */
.containerreg {
    border-radius: 15px;
    float: right;
    margin-right: 50px;
    margin-top: 15px;
    width: 50%;
  padding: 16px;
  background-color: white;
}

.gender {
  width: 50%;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}



</style>
</head>
<body>


<form action="loginpage.php" method="post">
  <div class="containerreg">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="first name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" value="">
    
    <label for="last name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="LastName" value="">
    <div> 

    <label for="birth date"><b>Birth Date</b></label>
    <br><br>
    <select name="year">
    <option value="1">Year</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    </select>
    <select name="month">
    <option value="13">Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">Juli</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
    <select name="day">
    <option value="32">Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select>
 

    <br><br>
    <label class="gender" for="gender"><b>Gender</b></label>
    </label>
    <br><br>
    <label class="gender">Men
      <input type="checkbox" checked="checked" name=Gender value="Men">
      <span class="checkmark"></span>
    </label>
    <label class="gender">Women
      <input type="checkbox" name=Gender value="Women">
      <span class="checkmark"></span>
    </label>
    </div>
    <br>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" value="">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" value="">

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" value="Submit" class="registerbtn">Register</button>
  </div>

</form>

<?php 

if( isset($_POST['Email']) )
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Month = $_POST['month'];
    $Day = $_POST['day'];
    $Year = $_POST['year'];
    $Date = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
    $Gender=$_POST['Gender'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    //REgistreren:
    $sql="INSERT INTO moodboard(`ID`, `FirstName`, `LastName`, `Date`, `Gender`, `Email`, `Password`) VALUES (UUID(),'".$FirstName."','".$LastName."','".$Date."','".$Gender."','".$Email."','".HASH("SHA512",$Password)."')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        
        echo "OK, je bent geregistreerd."; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Einde registreren
}
?>
<?php
  if (isset($_POST["FirstName"]))
   {
      // do whatever
   }
  if (isset($_POST["password"]))
   {
      // do whatever
   }
  if (isset($_POST["firstname"]))
   {
      // do whatever
   }
  if (isset($_POST["surname"]))
   {
      // do whatever
   }
?>
<form action="loginpage.php" method="post">
    <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form if you already have an account.</p>
        <hr>
			E-mail:<br>
			<input type="text" name="Email" value="">
			<br>
            Password:<br>
			<input type="Password" name="Password" value="">
			
			<br><br>
            <button type="submit" value="Submit" class="loginbtn">Login</button>
		</form> 
<?php

if( isset($_POST['Email']) )
{
    $Email=$_POST['Email'];
    $Pass=$_POST['Password'];
    
    //Zoeken naar gebruiker in database
    $sql="SELECT `ID`, `Email` FROM `moodboard` WHERE `Email`='".$Email."' and `IsActive`=1 and `Password`='".hash("SHA512",$Pass)."'";

    $result = $conn->query($sql);
    
    if (!empty($result) && $result->num_rows > 0) {

        while($selectedRow = $result->fetch_assoc()) {
            echo "<br>";
            echo "Gevonden user: ".$selectedRow["Email"];
            $_SESSION["Email"]=$selectedRow["Email"];
            $_SESSION["UserID"]=$selectedRow["ID"];
            Header("location:moodboard_home.php");
        }
    }
    else
    {
        echo "User niet gevonden";
    }
}?>


</body>
</html> 