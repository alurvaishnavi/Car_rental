<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($phone) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO sign(name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location: login.html");
            exit();
        } else {
            echo "Error: " . $sql;
        }
    }
}
?>
