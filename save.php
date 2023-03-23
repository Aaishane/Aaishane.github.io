<?php


$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$messages = $_POST["messages"];
$conn = mysqli_connect("localhost", "root","", "shoewear") or die("connection failes");
$sql= "INSERT INTO contact_table(First_name, Last_name, email, messages) VALUES('{$firstname}', '{$lastname}', '{$email}', '{$messages}')";
$result = mysqli_query($conn, $sql) or die("Query Failed");
header("location:http://localhost/shoewear/contact-sent.php");
mysqli_close($conn);



?>











