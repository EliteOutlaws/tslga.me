<?php
$link = mysqli_connect("localhost","user","pass","dbname");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>