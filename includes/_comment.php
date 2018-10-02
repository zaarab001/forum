<?php
if(isset($_POST['add']))
		{
			$comment= $_POST['comment'];
			echo $wid;
			$wid = $wid;
			
			if(!(empty($comment)) )
			{
						
				$comt = mysqli_query($connect, "INSERT INTO comment
											(
											comment,
											post_id,
											time_commented
											)
											VALUES(
											'$comment',
											'$wid',
											Now()
											)") or die (mysqli_error());// comment info
											if($comt)
											{
												echo '<span class="label label-success">Comment Successfull</span>';
												//header("location:womenintech.php");
											}
											else
											{
												echo '<span class="label label-danger">Comment not Successfull</span>';
											}
							
							}//end of else if Comment
						
		}
	
  ?>