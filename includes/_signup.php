<?php
if(isset($_POST['signup']))
		{
			$fullname= $_POST['fullname'];
			$username= $_POST['username'];
			$email= $_POST['email'];
			$password= md5($_POST['password']);
			$c_password = md5($_POST['c_password']);
			
			if(!(empty($fullname)) && !(empty($username)) && !(empty($email)) && !(empty($password)) && !(empty($c_password)) )
			{
				
				$check_email = mysqli_query($connect, "SELECT * FROM sign_up WHERE email = '$email'");
					if(mysqli_num_rows($check_email)==1)
					{//start of checking if email exist
						echo '<span class="label label-danger">Sorry Email used by another user</span>';
					}//end of checking if email exist
					
					else{//strat of else if email exist
						if($password != $c_password)
						{
							echo '<span class="label label-danger">Password not match</span>';
						}
						else{
						
				$user_reg = mysqli_query($connect, "INSERT INTO sign_up
											(
											fullname,
											username,
											email,
											password,
											date_signup
											)
											VALUES(
											'$fullname',
											'$username',
											'$email',
											'$password',
											Now()
											)") or die (mysqli_error());// user info
											if($user_reg)
											{
												echo '<span class="label label-success">Registeration Successfull</span>';
											}
											else
											{
												echo '<span class="label label-danger">Registeration not Successfull</span>';
											}
							
							}//end of else if email exist
											
					}//end of password marching
				}//end of if input fields not empty
				else
				{
					echo 'Fill in all the asteric sign*';
					}
		}
  ?>