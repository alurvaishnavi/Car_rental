<?php
session_start();

include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        $sql = "SELECT * FROM sign WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);  
        $row=mysqli_fetch_assoc($result);  
        if(mysqli_num_rows($result)===1)
        {
            $_SESSION['Id']=$row['Id'];
            $_SESSION['name']=$row['name'];
            if($email=='admin@gmail.com' && $password=='123456')
            {
                header("location:admin.php");
            }
            else{
                header("location:index.php");

            }
        }
        else{
            echo "Invalid email or password.";
        }
    }
}
?>
