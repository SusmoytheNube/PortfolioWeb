<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$db = mysqli_connect("localhost",'root',"",'project');

$insert_query = "INSERT INTO data (name,email,phone,message)
VALUES('$name','$email','$phone','$message')";

mysqli_query($db , $insert_query);
echo" Thank you."; 

?>