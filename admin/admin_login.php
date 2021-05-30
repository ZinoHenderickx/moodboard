<?php 
session_start();
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
include "../database/dbusers.php";
include "moodboard/login/login_stijl.css";
?>

<html>
<body>
<form action="admin_login.php" method="post">
    <div class="container">
        <h1>Login Admin</h1>
        <p>Vul alles in als je al een account hebt.</p>
        <hr>
			E-mail:<br>
			<input type="text" name="email" value="">
			<br>
            Password:<br>
			<input type="password" name="password" value="">
			
			<br><br>
            <button type="submit" value="Submit" class="registerbtn">Login</button>
		</form> 
<?php



if( isset($_POST['email']) )
{
    $userDBconnection = getConnectionUserDB(); //Check if password is true
    $sql = "SELECT ID, Firstname, email, `password` FROM Users WHERE '".$_POST['email']."' = email";
        $result = $userDBconnection->query($sql);
        $row = $result->fetch_assoc();
        $dbpassword = $row['password'];
        $UserID = $row['ID'];
        $name = $row['Firstname'];
        $verify = hash('sha512', $_POST['password']);
        $verify = password_verify($verify, $dbpassword); //check if user has access to project
    if($verify){
        $sql = "SELECT Moodboard, isAdmin FROM ProjectAccess WHERE '".$UserID."' = UserID";
        $result = $userDBconnection->query($sql);
        $row = $result->fetch_assoc();
        $access = $row['Moodboard'];
        $admin = $row['isAdmin'];
    //User has access to the project
    if($access){
        $_SESSION['ID'] = $UserID;
        $_SESSION['name'] = $name;
        $_SESSION['isAdmin'] = $admin;
    echo "Logged in ! ";
    Header("location: admin_home.php");
    return true; }
    }
    else{
    echo "Incorrect Password";
    return false;
    }
}
?>
</body>
</html> 