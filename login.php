<?php

	session_start();

	include 'connection.php';

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email_present = "SELECT * FROM account WHERE email='$email' ";
		$query = mysqli_query($con, $email_present);

		$email_count = mysqli_num_rows($query);

		if($email_count)
		{
			   $email_pass = mysqli_fetch_assoc($query);

			   $db_pass = $email_pass['password'];

			   $_SESSION['username'] = $email_pass['username'];
			   $_SESSION['email'] = $email_pass['email'];
			   $_SESSION['mobile'] = $email_pass['mobile'];

			//$pass_decode = password_verify($password,$db_pass);

			if($db_pass === $password)
			{
				//echo "login successful";
				?>
				<script>
					location.replace("hotel.php");
				</script>
		
				<?php
			}
			else
			{
				?>
				<script>
					// redirect to login page 
					alert("Password incorrect");
					location.replace("login.html");
				</script>
				
				<?php
			}
		}
		else
		{
			?>	
				<script>
					// redirect to login page 
					alert("Invalid email");
					location.replace("login.html");
				</script>
			<?php
		}
	}

?>