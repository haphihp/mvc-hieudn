<?php 
class usermodel extends model
{
	function getsignup($username,$password,$email)
	{
		$mysql = "SELECT * FROM signup WHERE username='$username' OR email='$email'  ";
		$query = mysqli_query($this->connect,$mysql);
		$data = mysqli_fetch_array($query);
		$count = count($data);
		if($count > 0)
		{
			return FALSE;

		}
		else
		{
			$mysql = "INSERT INTO signup(username,password,email) VALUES ('$username','$password','$email')";
			$query = mysqli_query($this->connect,$mysql);
			if($query)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
	function getlogin($username,$password)
	{
		$select = "SELECT * FROM signup WHERE username='$username'";
		$query = mysqli_query($this->connect,$select);
		return mysqli_fetch_assoc($query);
	}
}


 ?>