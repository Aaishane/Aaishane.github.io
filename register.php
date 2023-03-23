<?php

$Username = $_POST['Username'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];

$mysqli = require __DIR__ . "/database.php";

$sql = "insert into user(Username, email_address, password)
        values(?, ?, ?)";

$stmt = $mysqli->stmt_init();


if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$query = "select Username from user where Username='$Username'";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) != 0) {
    echo "Username already exists";
} else {
    $stmt->bind_param(
        "sss",
        $_POST['Username'],
        $_POST['email_address'],
        $_POST['password']
    );
    $stmt->execute();
    $query = "INSERT INTO cart(email_address,total_price) VALUES ('$email_address',0)";
    $result = mysqli_query($mysqli,$query);
    header("Location: registration-success.php");
    $stmt->close();
}

?>