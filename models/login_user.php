<?php
session_start();

require 'dbconnection.php';

$un = htmlspecialchars($_POST['uname']);
$pass = htmlspecialchars($_POST['pass']);

$con=create_connection();

if($con->connect_error){
    die("Failed to connect: ".$con->connect_error);
}

//validate username
$uname_error=0;
$sql_uname="SELECT * FROM user WHERE uname='$un' AND password='$pass'";
$result_uname=$con->query($sql_uname);

if($result_uname->num_rows>0){
    $row=$result_uname->fetch_assoc();
    
    $_SESSION['uid']=$row['uid'];
    $_SESSION['uname']=$row['username'];
    $_SESSION['fname']=$row['firstname'];
    $_SESSION['lname']=$row['lastname'];

    header("location:../timeline.php");
}
else{
    header("location:../login.php?log_error=1");
}