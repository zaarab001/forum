<?php
		 if(isset($_POST['login']))
		 {
		
//input validation
	function sanitize($connect, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($connect,$str);
	}

			$email = sanitize($connect,$_POST['email']);
			$password = md5($_POST['password']);
			
			if(!(empty($email)) && !(empty($password)))
			{			 
			$Log_in = mysqli_query($connect, "SELECT * FROM sign_up WHERE email = '$email' AND password = '$password'");
						
			if (mysqli_num_rows($Log_in) == 1)
			
			{
				$row = mysqli_fetch_assoc($Log_in);
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['signup_id'] = $row['signup_id'];
				
				//ob_flush();
				
				header('location:index.php');
								
				//echo '<span class="label label-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="label label-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>