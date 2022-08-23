<?php
    $servername = "localhost";
    $username = "u783615662_nujsua";
    $password = "mysql";
    $dbname = "3mkaK6J$7j";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }