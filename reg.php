<?php 

define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'suhanasafar'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function NewUser() 
{ 
	$FirstName = $_POST['Fname']; 
	$LastName = $_POST['Lname']; 
	$MobNumber = $_POST['num'];
	$email = $_POST['email']; 
	$password = $_POST['password']; 
	$var = "SELECT *FROM reg_user where emailId = '$email'";
	$res = mysql_query($var);
	if(mysql_num_rows($res) != 0)
	{
		echo "user exists...";
		//alert("Email Id is already registered...");
		//echo '<script>window.onload = functiion{ alert("User Already Exists..");}</script>';
		
	}
	else
	{
		$query = "INSERT INTO reg_user(FirstName,LastName, MobNo, emailId, pwd)VALUES('$FirstName','$LastName','$MobNumber','$email','$password');"; 
		$data = mysql_query($query) or die(mysql_error()); 
		$msg = "Thanx for registering to SuhanaSafar. Now, you can book your flights, hotels and holiday trip at your comfort and do more with SuhanaSafar. http://localhost/suhanasafar/index.html";
		$msg = wordwrap($msg, 70);
		$subject = "Succesful Registration!";
		if($data) 
		{ 
			mail($email, $subject, $msg);
			$redirect_page = 'login.html';
			$redirect = true;
			if($redirect == true)
			{
				header('Location: '.$redirect_page);
			}
		}
	}
} 

if(isset($_POST['signup'])) 
{ 
	NewUser();
}

?>

