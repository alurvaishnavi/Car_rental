<?php
include('header.php');

// session_start();
// include('connection.php');
$c_id=$_GET['car_id'];

if (!isset($_SESSION['name']))
 {     
   echo "<script>window.location.href = 'login.html';</script>";
 }
if($_SERVER['REQUEST_METHOD']=='POST')
 {
    // $car_id=$_POST['car_id'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $user_id=$_SESSION['Id'];
    $query="INSERT INTO bookings (car_id, start_date, end_date, user_id) VALUES ('$c_id', '$start_date', '$end_date', '$user_id')";
    $result=mysqli_query($con,$query);

    if($result)
    {
      echo "<script>alert('You car booked !');window.location.href = 'booking_history.php';</script>";
    }
    else
    {
      echo "Error";
    }
    

 }
 $cars="SELECT * FROM car_details where id=$c_id";
 $result=mysqli_query($con,$cars);
 $car=mysqli_fetch_assoc($result);
?>


<div class="container mt-5">    
     <h1>Book a Car</h1>    
      <form method="POST">        
     <div class="form-group">        
    <label for="car">Car:</label>  
    <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo ucwords($car['car_name']).'-'.ucwords($car['brand']); ?>" readonly>       
  </div>       
    <div class="form-group">             
        <label for="start_date">Start Date:</label>             
    <input type="date" class="form-control" id="start_date" name="start_date" required>       
  </div>       
    <div class="form-group">           
      <label for="end_date">End Date:</label>           
  <input type="date" class="form-control" id="end_date" name="end_date" required>     
    </div>        
     <button type="submit" class="btn btn-primary">Book</button>  
   </form>   
     <a href="booking_history.php" class="btn btn-info mt-3">View Booking History</a> 
<a href="logout.php" class="btn btn-danger mt-3">Logout</a> 
</div>
<?php
include('footer.php');
?>