<?php
$conn = mysqli_connect("localhost", "root", "", "try_next");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
