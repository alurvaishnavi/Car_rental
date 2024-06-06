<?php
session_start();
include('connection.php');
$sql="SELECT * FROM car_details";
$res=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Navbar */
        .navbar {
            background-color: #93bce8;
            padding: 15px;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            color: white;
        }

        .navbar-nav li {
            margin-left: 15px;
            margin-right: 25px;
            font-size: 15px;
        }

        /* Notification bar */
        .notification-bar {
            background-color: #93bce8;
            color: #93bce8;
            padding: 10px 0;
            text-align: center;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            font-size: 16px;
        }

        .notification-bar a {
            color: #fff;
            text-decoration: underline;
            margin-left: 10px;
        }

        /* Titles */
        .title-head {
            color: cornflowerblue;
            font-size: 24px;
            font-family: 'Rubik', sans-serif;
            font-weight: 700;
            padding: 10px;
            margin-right: 5px;
        }

        /* Footer */
        .footer {
            background-color: #d0d2d4;
            padding: 20px 0;
            text-align: center;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            color: #000;
        }

        .footer-content h2 {
            color: #000000;
            margin-bottom: 20px;
        }

        .footer-content h5,
        .footer-content p,
        .footer-links a {
            color: #000000;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer hr {
            background-color: #080000;
        }

        .card {
            padding: auto;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #d6d9df;
            color:black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            
        }

        .btn:hover {
            background-color: #a8a8b9;
        }

        .brand {
            margin-left: -180px;
        }

        #brandname {
            margin-left: -140px;
            margin-top: 10px;
        }

        #navbaar {
            margin-left: 300px;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .brand {
                margin-left: 0;
                text-align: center;
            }

            #brandname {
                margin-left: 0;
                text-align: center;
            }

            #navbaar {
                margin-left: 0;
            }

            .auth-buttons {
                flex-direction: column;
            }
        }

        @media (min-width: 768px) {
            .brand {
                margin-left: -180px;
            }

            #brandname {
                margin-left: -140px;
                margin-top: 10px;
            }

            #navbaar {
                margin-left: 300px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ml-6" >
            <a class="navbar-brand" href="#">
                <div class="brand">
                    <img src="assect/images/car.png" height="50px" class="d-inline-block align-text-top mb-6 ml-6" alt="Car Logo">
                </div>
            </a>
            <div id="brandname" class="d-flex flex-column p-2 pt-0 pb-2">
                <h3 class="mb-1 ml-6" style="color: #000;">Car Rental</h3>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul id="navbaar" class="navbar-nav">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Rido</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Review</a></li>
                    <?php if(isset($_SESSION['name'])){      ?>
                        <div class="auth-buttons">
                        <a class="btn btn-success signup" href="index.php"><?php  echo ucwords($_SESSION['name']); ?></a>
                        <a class="btn btn-danger login" href="logout.php">Logout</a>
                    </div> 
                    <?php } else{              ?>
                    <div class="auth-buttons">
                        <a class="btn signup" href="signup.html">Register</a>
                        <a class="btn login" href="login.html">Login</a>
                    </div> 
                    <?php   }   ?>              
                </ul>

            </div>
        </div>
    </nav>