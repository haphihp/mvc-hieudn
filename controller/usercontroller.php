<?php 
require_once PATH.'/model/connect.php';
class user
{
	function signup()
	{
		if(isset($_POST['dangki']))
		{

			$username = trim($_POST['username']); 
			$password = trim($_POST['password']); 
			$email = trim($_POST['email']); 

			if ($username == '') 
			{
				$error = TRUE;
				$show_error = 'Tên đăng nhập không được để trống'; 
			}
			if (strlen($username) >= 15)
			{
				$error = TRUE;
				$show_error = "Tên đăng nhập quá dài, giới hạn chỉ được 15 ký tự";
			}
			if (strlen($password) == 0)
			{
				$error = TRUE;
				$show_error = "Lỗi pass word";
			}
			if(md5(strlen($password)) <=12 )
			{
				$error = TRUE;
				$show_error="Lỗi password";
			}
			if (strlen($email) == 0)
			{
				$error = TRUE;
				$show_error = "Email ko được để trống";
			}

			if (!isset($error))
			{
				require_once PATH.'/model/usermodel.php';
				$controll = new usermodel;
				$result = $controll->getsignup($username,$password,$email);
				if($result)
				{
					echo "Đăng kí thành công<a href='index.php?login'>Đăng Nhập</a>";
				}
				else
				{
					echo "Tên đăng nhập hoặc email bị trùng ";
				}
			}
			else
			{
				print_r($show_error);
			}
		}
		
		require_once PATH.'/view/viewsignup.php';
	}
	function login()
	{
		if (!isset($_SESSION['dangnhap']))
		{
			if(isset($_POST['dangnhap']))
			{
				$username = trim($_POST['username']);
				$password = trim($_POST['password']);
				if($username == '')
				{
					$error = TRUE;
					$show_error[] = "Tên đăng nhập không được để trống";
				}
				if($password == '')
				{
					$error = TRUE;
					$show_error[] = "Password không được để trống";
				}
				if($username =='' && $password =='')
				{
					$error = TRUE;
					$show_error = "Tên đăng nhập và password không được để trống";
				}
				if(!isset($error))
				{

					require_once PATH.'/model/usermodel.php';
					$model = new usermodel;
					$result = $model->getlogin($username,$password);
					if($username ==$result['username'] && $password == $result['password'])
					{
						$_SESSION['dangnhap'] = $result['username'];
						header('location:index.php');
					}
					else
					{
						$message = "Đăng nhập thất bại";
					
					}
				}
			}
			require_once PATH.'/view/viewlogin.php';
		}
	}
	function logout()
	{
		session_destroy();
		header('location:index.php?controller=user');
	}

}


 ?>