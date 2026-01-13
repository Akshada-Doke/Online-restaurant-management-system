<?php
session_start();
include 'db.php';

$u=$_POST['username'];
$p=$_POST['password'];

$q=$conn->query("SELECT * FROM admin WHERE username='$u' AND password='$p'");
if($q->num_rows){
$_SESSION['admin']=$u;
header("location:view.php");
}
else echo "Login Failed";
?>

