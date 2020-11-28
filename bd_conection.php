<?php
$servername = "localhost";
$username = "username";
$password = "";
$conn = new mysqli('localhost', 'root', '', 'evento');
if($conn->connect_error){
    echo $error -> $conn->connect_error;
}
?>