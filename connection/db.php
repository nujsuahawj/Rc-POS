<?php
    $servername = 'localhost';
    $username = 'u783615662_nujsua';
    $password = '3mkaK6J$7j';
    $dbname = 'u783615662_pos';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }