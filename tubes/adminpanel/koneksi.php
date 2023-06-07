<?php
$conn = mysqli_connect("localhost", "root", "", "eysblog");
mysqli_select_db($conn, 'eysblog');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}