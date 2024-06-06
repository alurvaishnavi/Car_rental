<?php

include('header.php');

?>


    <!-- Carousel content -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" class="img-fluid" src="assect/images/Bayerischemw.jpg" height="500px" width="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" class="img-fluid" src="assect/images/renault.jpg" height="500px" width="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" class="img-fluid" src="assect/images/brezza.jpg" height="500px" width="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" class="img-fluid" src="assect/images/innova.jpg" height="500px" width="600px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" class="img-fluid" src="assect/images/kia.jpg" height="500px" width="600px">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid" style="background-color:lavender;">
    <div class="row">
    <?php
        while($car=mysqli_fetch_assoc($res))
        {
                    ?>
    <div class="col-sm-3 mb-2" >
    
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/<?php echo $car['Picture'];?>"  alt="Card image cap" height=200px width=100px>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords( $car['brand']);?></h5>
                            <p class="card-text"><?php echo ucwords ($car['Description']);?></p>
                            <a href="product.php?pid=<?php echo $car['id'];?>" class="btn btn-primary">More Details</a>
                        </div>
                    </div>
        
    </div>
    <?php

        }
        ?>  
    
  </div>
  </div>
    
    <?php
        include('footer.php');
    ?>
