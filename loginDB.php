<?php

include 'databaseConfig.php';

$db = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM UserDetails WHERE email ='$email' AND password = '$password'";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode("Success");
} else {
    echo json_encode("Invalid");
}