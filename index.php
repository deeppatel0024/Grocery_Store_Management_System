<!-- Login -->
<?php
if(isset($_POST['login']))
	{
		$username_email=$_POST['username'];
		$password=$_POST['password'];
		$cn=mysqli_connect("localhost","root","","grocery_management");
		if($cn)
		{
			$check=mysqli_query($cn,"select * from sign where email='$username_email'");
			$row=mysqli_num_rows($check);
			if($row==0)
			{
				echo "<script>alert('Username Does Not Exist');</script>";
				include 'index.html';
			}
			else
			{
				$match=mysqli_fetch_assoc($check);
				if($password!=$match['password'])
				{
					echo "<script>alert('Password is Incorrect');</script>";
					include 'index.html';
				}
				else
				{
					header('location:logfrontpg.html');
				}
			}
		}
	
		
		else{
			echo "Error in Connection!!";
		}
	}

	
?>
