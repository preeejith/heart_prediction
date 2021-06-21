<?php
	$connect=mysqli_connect("localhost","root","","heart")or die("Connection Failed");
	if (isset($_POST['Submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$query="select * from register1 where Username='$username' and Password='$password'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
				header("Location: userpage.html"); 
		}
		else
		{
			header("Location: userloginerror.html"); 
		}
	}
?>


