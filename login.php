<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $Username = $_POST['Username'];
    $password = $_POST['password'];

    $sql = "select * from user where 
    Username = '$Username' AND
    password = '$password'";

    $result = mysqli_query($mysqli, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["email"]=$row["email_address"];

      

        header("Location: login-success.php");

    } else {
        echo "Invalid login";
    }
}

?>