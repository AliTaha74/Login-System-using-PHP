<?php
include_once "conn.inc.php";

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];

$sql = "insert into users values('$id', '$fname', '$lname', '$mail', '$uid', '$pass');";
mysqli_query($conn, $sql);



header("Location: ../phplessons/index.php?signup=success");