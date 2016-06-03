<?php
if(isset($_POST['login'])) 
{
	session_start();
 
	define('DB_HOST', 'localhost:3306'); 
	define('DB_NAME', 'suhanasafar'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
	function clean($str) 
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['userID']);
	$password = clean($_POST['pwd']);
 
	$qry="SELECT * FROM reg_user WHERE emailId ='$username' AND pwd='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) 
	{
		if(mysql_num_rows($result) > 0) 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $reg_user['userID'];
			$_SESSION['SESS_FIRST_NAME'] = $reg_user['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $reg_user['LastName'];
			session_write_close();
			$redirect_page = 'index.html';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
			//header("location: home.php");
			exit();
		}
		else 
		{
			//Login failed
			echo "user name and password not found";
			/*$errflag = true;
			if($errflag) 
			{
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}*/
		}
	}
	else 
	{
		die("Query failed");
	}
}
?>