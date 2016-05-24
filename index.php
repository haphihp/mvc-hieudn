<?php 
session_start();
define('PATH', dirname(__FILE__));
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