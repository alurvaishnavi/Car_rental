<?php
include('header.php');
$user_id=$_SESSION['Id'];

if (!isset($_SESSION['name']))
 {     header("Location:login.html");  
    // exit();
 }

    $sql1 = "SELECT * FROM car_details c, bookings b WHERE b.user_id=$user_id AND b.car_id=c.id;";
    $result1 = mysqli_query($con,$sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <div class="jumbotron">
        <h1 class="text-center">Your Bookings</h1>
        <p class="text-center"> Hope you enjoyed our service </p>
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="15%">Car Picture</th>
<th width="15%">Car Name</th>
<th width="15%">Start Date</th>
<th width="15%">End Date</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td> <img src="images/<?php echo $row['Picture']; ?>" height=150px width=200px> </td>
<td><?php echo ucwords($row['car_name'])."-".ucwords($row['brand']) ?></td>
<td><?php echo $row["start_date"] ?></td>
<td><?php echo $row["end_date"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
        <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">You have not rented any cars till now!</h1>
        <p class="text-center"> Please rent cars in order to view your data here. </p>
      </div>
    </div>

            <?php
        } 
        include('footer.php');?>   
