<?php

$conn = mysqli_connect("localhost","root","","login data gsm");

if(!$conn)
{
    die("Connection Failed");
}

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO `regestration.php`
(email, Password, `Confirm password`, `Mobile number`)
VALUES('$email','$password','$cpassword','$mobile')";

if(mysqli_query($conn,$sql))
{
    echo "Data Saved Successfully";
}
else
{
    echo mysqli_error($conn);
}

?>