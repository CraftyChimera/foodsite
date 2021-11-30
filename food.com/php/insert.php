<?php
ob_start();
$name = $_GET['name'];
$number = $_GET['number'];
$foodorder = $_GET['order'];
$extrafood = $_GET['extra'];
$count = $_GET['count'];
$address = $_GET['address'];
$message = $_GET['message'];
$conn = mysqli_connect("localhost", "drake","", "food");
$query = "INSERT INTO foodlist(name,number,foodorder,extrafood,count,time,address,message) VALUES ('$name','$number','$foodorder','$extrafood','$count',now(),'$address','$message')";
mysqli_query($conn,$query);
header("Location:../index.html");
ob_end_flush();
?>