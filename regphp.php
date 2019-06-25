<?php
include_once 'conn.inc.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "insert into users values('$id', '$fname', '$lname', '$email', '$pwd');";
mysqli_query($conn, $sql);

header("Location: ../phplessons/index.php");