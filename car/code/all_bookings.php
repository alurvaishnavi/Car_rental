<?php

include('connection.php');
$sql="SELECT * from sign s, bookings b, car_details c WHERE s.Id=b.user_id AND c.id=b.car_id";

$result=mysqli_query($con,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="all_bookings.php">Booking Details <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<h2 style="margin:20px;text-align:center;">All Car Booking Details</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Car Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Location</th>
      <th scope="col">Start Date</th>
      <th scope="col">End date</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  <tbody>

    <?php

while($row = mysqli_fetch_assoc($result))
{
?>
    <tr>
      <th scope="row"><?php echo ucwords($row['name']);?></th>
      <th scope="row"><?php echo ucwords($row['car_name']);?></th>
      <td><?php echo ucwords( $row['brand']);?></td>
      <td><?php echo ucwords ($row['location']);?></td>
      <td><?php echo $row['start_date'];?></td>
      <td><?php echo ucwords ($row['end_date']);?></td>
      <td><img src="images/<?php echo $row['Picture'];?>" width=200px height=100px></td>

    </tr>
    <?php
}
?>
  </tbody>
</table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>