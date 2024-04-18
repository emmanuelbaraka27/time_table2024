<?php
$conn = mysqli_connect('localhost', 'root', '', 'time_management1');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
