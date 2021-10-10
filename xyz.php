<?php
ob_start();
header("Content-type: application/json");
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);
$email2 = "shubhamsinghlmp578@gmail.com";

$db = mysqli_connect('localhost' , 'root' , '1237@#$%Shubham' , 'portfolio');

$query = "INSERT INTO user_login VALUES(? , ? , ? , ?)";
$a = $db->prepare($query);
$a->bind_param('ssss' , $name , $subject , $email , $message);
$a->execute();
print json_encode(['success'=>true]);
?>