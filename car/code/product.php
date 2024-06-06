<?php
include('header.php');
$id=$_GET['pid'];
$sql="SELECT * FROM car_details where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

?>
<h3 style="text-align:center;margin:20px;">Car details</h3>
<table width="100%">
    <tr>
        <td colspan="2"><img src="images\<?php echo $row['Picture']?>" style="height:500px; width:1430px"></td>
    </tr>

    <tr>
        <th>Brand</th>
        <td><?php echo ucwords($row['brand']); ?></td>
    </tr>
    <tr>
        <th>Location</th>
        <td><?php echo ucwords($row['location']); ?></td>
    </tr>
    <tr>
        <th>Price</th>
        <td><?php echo $row['price'] ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?php echo ucwords($row['Description']); ?></td>
    </tr>
    <tr>
        <td>
        <a href="index.php" class="btn">Go Back</a>
        <?php
            if (isset($_SESSION['name']))
            {     
                echo "<a href='booking_history.php' class='btn'>View History</a>";
            }
        ?>
        <a href="booking.php?car_id=<?php echo $id?>" class="btn">Book Car</a>
        </td>
    </tr>
</table>
<?php
        include('footer.php');
    ?>

