<?php 
/*
        Title: Database connection using PDO 
        Username : veecthorpaul 
    */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sidehustle";

	//creating connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database Connected successfully"; 
} 

//check connection
catch(PDOException $e) {
  echo "Connection Error: " . $e->getMessage();
}

?>
