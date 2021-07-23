<?php

 session_start();

 if (!isset($_SESSION['username'])) 
 {
    header('location:login.html');
 }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> PRW </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="hotel.php">PRW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hotel.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://source.unsplash.com/1600x600/?restaurants,food" class="img-fluid"
                    class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color:white; opacity: 0.8; font-size: 8em;"> PRW </h1>
                    <p style="color:white; opacity:0.8; font-size:2em">Order food from favourite restaurants near you.
                    </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://source.unsplash.com/1600x600/?sweet,food" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color:white; opacity: 0.8; font-size: 8em;"> PRW </h1>
                    <p style="color:white; opacity:0.8; font-size:2em">Order food from favourite restaurants near you.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x600/?food,drinks" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color:white; opacity: 0.8; font-size: 8em;"> PRW </h1>
                    <p style="color:white; opacity:0.8; font-size:2em">Order food from favourite restaurants near you.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="imgs/img3.jpg" style="border-radius: 10px;;" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Go out for a meal</h5>
                    <p class="card-text">View the city's favourite dining venues</p>
                </div>
            </div>
            <div class="mx-5"></div>
            <div class="card">
                <img src="imgs/img4.jpg" style="border-radius: 10px;" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nightlife & Clubs</h5>
                    <p class="card-text">Explore the city's top nightlife outlets</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5"></div>
    <div class="container">
        <h1>Collections</h1>
        <p>Explore curated lists of top restaurants, cafes, pubs, and bars in Research Triangle, based on trends</p>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="imgs/img5.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Trending This Week</h5>
                        <p class="card-text">19 Places</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="imgs/img6.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Super Sushi</h5>
                        <p class="card-text">10 Places</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="imgs/img7.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Pocket Friendly</h5>
                        <p class="card-text">16 Places</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="imgs/img8.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor Seating</h5>
                        <p class="card-text">17 Places</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->

        <!--Grid row-->
        </form>
        </section>
        <!-- Section: Form -->

        <div class="container-fluid">
            <!-- Section: Text -->
            <section class="mb-4">
                <h1>PRW</h1>
                <br>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                        <br>
                        <h5 class="text-uppercase">COMPANY</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Who We Are</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Blogs</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Report Fraud</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Financial Information</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                        <br>
                        <h5 class="text-uppercase">FOR FOODIES</h5>

                        <ul class="list-unstyled mb-0 ">
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Code Of Conduct</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Community</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Blogger Help</a>
                            </li>
                            <li>
                                <a href="#" class="text-white" style="text-decoration: none;">Mobile Apps</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-3 mb-md-0 ">
                        <br>
                        <h5 class="text-uppercase ">FOR RESTAURANTS</h5>

                        <ul class="list-unstyled mb-0 ">
                            <li>
                                <a href="#" class="text-white " style="text-decoration: none;">Add Restaurant</a>
                            </li>
                            <li>
                                <a href="#" class="text-white " style="text-decoration: none;">Business App</a>
                            </li>
                            <li>
                                <a href="#" class="text-white " style="text-decoration: none;">Restaurant Widgets</a>
                            </li>
                            <li>
                                <a href="#" class="text-white " style="text-decoration: none;">Products For
                                    Businesses</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-3 mb-md-0 ">
                        <!-- Section: Social media -->
                        <br>
                        <h5 class="text-uppercase ">Social Links</h5>
                        <section class="mb-4 ">
                            <!-- Facebook -->
                            <br>
                            <a class="btn btn-outline-light btn-floating m-1 "
                                href="https://www.facebook.com/pramod.wankhade.792" role="button "><i
                                    class="fa fa-facebook-f "></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1 "
                                href="https://twitter.com/PramodW81369424" role="button "><i
                                    class="fa fa-twitter "></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1 "
                                href="https://www.instagram.com/pramodwankhade16/" role="button "><i
                                    class="fa fa-instagram "></i></a>

                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div>
                <!--Grid row-->
            </section>
        </div>
        <br>
        <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
            © 2021 Copyright: Zomato
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous ">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    -->
</body>

</html>
