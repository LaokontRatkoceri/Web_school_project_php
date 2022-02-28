<?php
// $server="localhost";
// $username="root";
// $password="";
// $database = "g3b";


// $conn = mysqli_connect($server, $username, $password, $database);

// if(!$conn){
//     die("Connection failed: ".mysqli_connect_error());
// }



/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'g3b');
 
// /* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'g3b');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USERNAME, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>