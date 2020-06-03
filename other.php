<?php  
    $servername = "localhost";
    $username = "root";
    $password = "trusis";
    $dbname = "kursadarbs";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error)
    {
        die("Pieslēgums DB neizdevās!: " . $conn->connect_error);
    } 
?>