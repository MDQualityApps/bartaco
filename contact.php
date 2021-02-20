<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'root','hotel');


// get the post records
$txtName = $_POST['name'];
// $txtEmail = $_POST['email'];
//$txtPhone = $_POST['txtPhone'];
//$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `bartaco` (`ID`, `name`) VALUES ('0', '$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Query Has been sent!";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>