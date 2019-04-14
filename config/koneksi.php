<?php  

session_start();

// error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);


// koneksi kedatabase
$host = "localhost";
$user = "root";
$pass = "";
$db = "psb";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Sukses";

?>