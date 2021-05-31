<?php
    function getConnectionUserDB(){

        $servername = "localhost";
        $username = "frederick";
        $password = "PPPPPP";
        $dbname = "registratie";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        } 

        return $conn;



}
?>