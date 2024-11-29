\\\\\\\\\\\\\\\\\\\\\\\\\<?php
$servername = "localhost";
$database = "academia";
$username = "root";
$password = "";
# Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $database);
# Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
?>