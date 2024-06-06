<?php
include ("connection.php");
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $car_name = $_POST['car_name'];
    $brand = $_POST['brand'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $Description = $_POST['Description'];
    $Picture= $_FILES['Picture']["name"];
    $temp_name = $_FILES['Picture']["tmp_name"];
    $folder = "images/".$Picture;


        $sql ="INSERT INTO car_details(car_name, brand, location, price, Description, Picture) VALUES ('$car_name', '$brand', '$location', '$price', '$Description', '$Picture')";
        $result = mysqli_query($con, $sql);
    if(move_uploaded_file($temp_name, $folder))
    {
        // echo "File Uploaded Successfully";
        header('location:admin.php');
    }
    else{
        echo "File failed to upload";
    }
}

?>