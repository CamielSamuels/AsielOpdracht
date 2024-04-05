<?php
   $firstName = $_POST['fistName'];
   $lastName = $_POST['lastName'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $password = $_POST['password'];

require_once

ini_set('display_errors', 1); 
error_reporting(E_ALL);

// database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = 'dierenasieldb';
$db_password = '@$017AsO17072006';
$db_database = 'database_Dierenasiel';
// maak de database-verbinding
$mysqli = mysqli_connect ($db_hostname, $db_username, $db_password, $db_database);
//Als de verbinding niet gemaakt kan worden: geef een melding
if (!$mysqli) {
echo "FOUT: geen connectie naar database. <br>"; echo "Error: " . mysqli_connect_error() . "<br/>";
exit;
}

$conn = new mysqli ('')