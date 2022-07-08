<?php


$dsn = "mysql:host=localhost;dbname=orninadb"; // Data Source Name
$dbuser = "root"; // Database User to connect
$dbpass = "root"; // Database Password to This user


try {
    $db = new PDO($dsn, $dbuser, $dbpass); // Start Connecting the database By PDO Class
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set the error mode to PDO::ERRMODE_EXCEPTION

} 

catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



