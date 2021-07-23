<?php

 session_start();

 if (!isset($_SESSION['username'])) 
 {
    header('location:login.html');
 }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <style>
    #profile {
        width: 350px;
        margin: 20px auto 5px;
        background-color: aquamarine;
        font-weight: bold;
        border: 1px solid black;
        padding: 20px;
    }

    #profile h3 {
        text-align: center;
    }

    /***Extra small devices***/
    @media(max-width: 766px) {}

    /***Small devices***/
    @media(min-width: 767px) and (max-width: 991px) {}
    </style>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                        <a class="nav-link" aria-current="page" href="hotel.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="profile">
        <h3>Your Profile</h3>
        <p>Your account details are below:</p>
        <table>
            <tr>
                <td>Name:</td>
                <td><?= $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td><?= $_SESSION['mobile'] ?></td>
            </tr>
        </table>
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
                                <a href="# " class="text-white" style="text-decoration: none;">Code Of Conduct</a>
                            </li>
                            <li>
                                <a href="# " class="text-white" style="text-decoration: none;">Community</a>
                            </li>
                            <li>
                                <a href="# " class="text-white" style="text-decoration: none;">Blogger Help</a>
                            </li>
                            <li>
                                <a href="# " class="text-white" style="text-decoration: none;">Mobile Apps</a>
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
                                <a href="# " class="text-white " style="text-decoration: none;">Add Restaurant</a>
                            </li>
                            <li>
                                <a href="# " class="text-white " style="text-decoration: none;">Business App</a>
                            </li>
                            <li>
                                <a href="# " class="text-white " style="text-decoration: none;">Restaurant Widgets</a>
                            </li>
                            <li>
                                <a href="# " class="text-white " style="text-decoration: none;">Products For
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