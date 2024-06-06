<?php
include('connection.php');

$id=$_GET['id'];
$sql="SELECT * FROM car_details WHERE id=$id";
$res=mysqli_query($con,$sql);
$car=mysqli_fetch_assoc($res);

if(isset($_POST['update'])){
    // $id = $_POST['id'];
    $car_name = $_POST['car_name'];
    $brand = $_POST['brand'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $Description = $_POST['Description'];
    $Picture = $_FILES['Picture']['name'];
    $tmp_picture=$_FILES['Picture']['tmp_name'];
    $folder = "images/".$Picture;

if(empty($Picture))
{
    echo   $query = "UPDATE car_details SET car_name='$car_name', brand='$brand', location='$location', price= $price, Description='$Description' where id=$id";
    $result=mysqli_query($con, $query);
    if($result)
    {
        header('Location: admin.php');
    }
    else{
        die("Error updating record: " . $stmt->error);
    }
}
else{
    $query = "UPDATE car_details SET car_name='$car_name', brand='$brand', location='$location', price= $price, Description='$Description', Picture='$Picture' where id=$id";
    $result=mysqli_query($con, $query);
    if( move_uploaded_file($tmp_picture,$folder))
    {
        header('Location: admin.php');
    }
    else{
        die("Error updating record: " . $stmt->error);
    }
}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Car Details</title>
</head>
<body>
<div class="container">
    <h1><center>Update Car Details</center></h1>
    <form method="POST" enctype="multipart/form-data"enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
        <div class="form-group">
            <label for="car_name">Car Name</label>
            <input type="text" class="form-control" id="car_name" name="car_name" value="<?php echo $car['car_name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $car['brand']; ?>" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo $car['location']; ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo $car['price']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="Description" required><?php echo $car['Description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Picture URL</label>
            <input type="file" class="form-control" id="picture" name="Picture">
        <img src="images/<?php echo $car['Picture']; ?>" alt="images" width="200px"  height="100px">

        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>
</body>
</html>