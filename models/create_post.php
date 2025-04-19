<?php
session_start();

require 'dbconnection.php';

$post_content = htmlspecialchars ($_POST['create_post_content']);
$con=create_connection(); 

if($con->connect_error){
    die("Failed to connect:".$con->connect_error);
}


$sql_post="INSERT INTO post VALUES(0,'$post_content',NOW(),NOW(),".$_SESSION['uid'].")";

$con->query($sql_post);

    header("location:../profile.php?postsuccess=1");
   