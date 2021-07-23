<?php
	
	include 'connection.php';

	if(!isset($_SESSION['username']))
	{
		header('login.php');
	}

	if(isset($_POST['submit']))
	{
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

		//$pass = password_hash($password, PASSWORD_BCRYPT);
		//$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

		function validate_mobile_email($copy_mobile, $copy_email)
		{
  			   $res1 = preg_match('/^[7-9][0-9]{9}$/', $copy_mobile);
  			   $res2 = preg_match('/^[a-zA-Z0-9.!#$%&*+/=?^_{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/', $copy_email);

  			  if($res1 OR $res2)
  			  {
  			       return false;
  			  }
  			  else
  			  {
  			  	return true;
  			  }
		}

		if(validate_mobile_email($mobile, $email))
		{
  	        ?>
  	        <script>
  	        alert("Invalid email or mobile number");	
  	        // redirect to login page 
			location.replace("signup.html");
  	        </script>
  	        <?php
		}
		else
		{

		$emailquery = "SELECT * FROM account WHERE email = '$email'";
		$query = mysqli_query($con, $emailquery);

		$emailcount = mysqli_num_rows($query);

		if($emailcount > 0)
		{
			?>
				<script>
					// redirect to login page 
						alert("Email Already exit");
						location.replace("login.html");
				</script>
			<?php
		}
		else
		{
			$len = strlen($password);

			if($len<8)
			{
				?>
				<script>
					// redirect to login page 
						alert("Password must be 8 or more characters in length");
						location.replace("signup.html");
				</script>
			<?php
			}
			elseif($password == $cpassword)
			{
				$insertquery = "INSERT INTO account (username, email, mobile, password, cpassword) VALUES('$username', '$email','$mobile', '$password', '$cpassword')";

				$iquery = mysqli_query($con, $insertquery);

				if($iquery) 
				{
					?>
						<script>
							// redirect to login page 
								alert("Account created successfully");
								location.replace("login.html");
						</script>

					<?php
				}
				else
				{
						?>
							<script>
									alert("Please check your connection");
								</script>
						<?php
				}
			}
			else
			{
						?>
							<script>
								// redirect to signup page 
									alert("Passwords are not matching");
									location.replace("signup.html");
								</script>
						<?php
			}
		}
	  }
	}
	
?>