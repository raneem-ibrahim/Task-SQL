<?php
$host = 'localhost'; 
$dbname = 'project'; 
$username = 'root';
$password = ''; 


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("conction not sucssfuly " . $conn->connect_error);
}
?> 