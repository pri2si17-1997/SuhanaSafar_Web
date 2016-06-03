<?php
	session_start();
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'suhanasafar'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	function update_htl()
	{
		$value = $_SESSION['rom'];
		$id = $_SESSION['hotel_id'];
		$query = "update hotels set rooms_avl = rooms_avl-$value where h_id = '$id'";
		$data = mysql_query($query);
		if($data)
		{
			$redirect_page = 'index.html';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
		else
		{
			echo "Server Error!";
		}
	}
	
	if(isset($_POST['signup'])) 
	{ 
		update_htl();
	}
	
?>