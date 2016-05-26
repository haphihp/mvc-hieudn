<?php 
session_start();
define('PATH', dirname(__FILE__));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
</head>
<body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/npm.js"></script>
</body>
</html>

<?php
if(!isset($_SESSION['dangnhap']))
{
	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		if($controller == 'user')
		{
			$filename = $controller.'controller.php';
			require_once PATH.'/controller/'.$filename;
			if(isset($_GET['function']))
			{
				$function = $_GET['function'];

			}
			else
			{
				$function = 'login';
			}
			$a = new $controller;
			$a->$function();

		}

	}
	else
		{
			header('location:index.php?controller=user');
		}
		
}
else
{
	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
	}
	else
	{
		$controller = 'tintuc';
	}
	$filename = $controller.'controller.php';
	require_once PATH.'/controller/'.$filename;
	if(isset($_GET['function']))
	{
		$function = $_GET['function'];
	}
	else
	{
		$function = 'allnews';
	}
	$a = new $controller;
	$a->$function();
}

?>

