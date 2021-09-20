<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'doctor_db';

$conn = mysqli_connect($serverName, $username, $password , $dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}