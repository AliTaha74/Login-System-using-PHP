<?php
include_once 'conn.inc.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "select * from users where email= '$email' and pwd='$pwd';";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck==false)
{
    header("Location: ../phplessons/index.php?login=failed");
}
else
{
    echo "Welcome ,sir ^_^";
}