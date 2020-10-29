<?php
    /*
        Title: Database connection using MYSQLI method
        Username: veecthorpaul
    */

    // Declaring variables
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_name = "sidehustle";

    // connecting to the database
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    // Checking for successful connection
    if (!$conn){
        echo "Database connection failed because <strong>" . mysqli_connect_error() . "</strong>";
    } else{
        echo "Database connected successfully";
    }

?>
