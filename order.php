<?php

 session_start();

 if (!isset($_SESSION['username'])) 
 {
    header('location:login.html');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <script src="./assets/jQuery.js"></script>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/23c0e963da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js"></script>
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
                        <a class="nav-link" aria-current="page" href="hotel.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form method="POST" class="col-lg-12">
        <div class="container cont-2">
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-md-6 prd">
                    <img src="./assets/images1/dosa.jpg" alt=""><br><br>
                    <input id="name" type="text" name="food" value="Dosa"><br>
                    <input type="number" name="qunt" id="quantity" required placeholder="quantity"
                        onblur="quantity_change()"><br>
                    <input type="text" value="300" id="price">
                </div>

                <div class="col-lg-6 col-xs-12 col-md-6">
                    <h1>Your Order Details...</h1>
                    <h2>Dish Discription</h2>
                    <p><br>Dosa :<br><br>A very delicious south indian dish for breakfast<br> Nutrients :
                        Carbohydrates,Proteins,Little fat<br> Ingredients : Rice,Potato,Cerel </p><br>
                    <span class="tot">Your Total :</span><span id="total"></span>
                </div>
            </div>
        </div>

        <!-- Order page starts here-->

        <div class="container order_cont">
            <div class="row">

                <input type="text" placeholder="Name" name="name" required><br>

                <input type="text" name="contact" placeholder="Contact Number" required><br>

                <input type="email" placeholder="Email" name="Email"><br>

                <h2 style="margin: auto;">Address for Delivery</h2><br>

                <input type="text-area" name="area" placeholder="Address" class="address" required><br>

                <input type="text" name="city" placeholder="City" required><br>

                <input type="text-area" name="lm" placeholder="Landmark(e.g. near Hanuman temple....)" required><br>

                <input type="text" placeholder="Apartment Name" name="apt_name"><br>

                <input type="text" placeholder="PinCode" name="pin" required><br>

                <select name="Select mode of Pay" id="pay" required class="sl">
                    <option value="">Select Mode of Payment</option>
                    <option value="">Cash on Delivery</option>
                    <option value="">Google Pay</option>
                    <option value="">UPI Payment</option>
                    <option value="">Credit/Debit Card</option>
                </select><br>
            </div>
            <input class="button" type="submit" name="submit" value="place order" style="background-color:cyan;">
        </div>

    </form>
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


<?php
	
	include 'connection.php';

	if(isset($_POST['submit']))
	{
        $food = $_POST['food'];
        $qunt = $_POST['qunt'];
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$Email = $_POST['Email'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$lm = $_POST['lm'];
		$apt_name = $_POST['apt_name'];
		$pin = $_POST['pin'];


	$insertquery = "INSERT INTO order_details (food, qunt, name, contact, Email, area, city, lm, apt_name, pin) VALUES('$food', '$qunt', '$name', '$contact', '$Email', '$area', '$city', '$lm', '$apt_name', '$pin')";

				$iquery = mysqli_query($con, $insertquery);

				if($iquery) 
				{
					?>
                    <script>
                        location.replace("confirmed_order.html");
                    </script>

                    <?php
				}
				else
				{
					?>
                    <script>
                        alert("error");
                    </script>
                    <?php
				}

            }
?>