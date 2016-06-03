<?php 

define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'suhanasafar'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function NewUser() 
{ 
	$pkg_name = $_POST['Package']; 
	$month = $_POST['Journey_Month']; 
	$year = $_POST['Journey_Year'];
	$pasengers = $_POST['Passengers']; 
	/*$var = "select pkg_id from package where pkg_name = '$pkg_name'";
	$result = mysql_query($var) or die(mysql_error());
	$pkg_id = mysqli_fetch_field($result);*/
	$query = "INSERT INTO book_pkg(package_name,jor_month, jor_year, passengers, pkg_id)VALUES('$pkg_name','$month','$year','$pasengers', (select pkg_id from package where pkg_name = '$pkg_name'));"; 
	$data = mysql_query($query) or die(mysql_error()); 
	$msg = "Thanx for registering to SuhanaSafar. Now, you can book your flights, hotels and holiday trip at your comfort and do more with SuhanaSafar. http://localhost/suhanasafar/index.html";
	$msg = wordwrap($msg, 70);
	$subject = "Succesful Registration!";
	if($data) 
	{ 
		//mail($email, $subject, $msg);
		$redirect_page = 'successfully_submitted.html';
		$redirect = true;
		if($redirect == true)
		{
			header('Location: '.$redirect_page);
		}
	}
} 

if(isset($_POST['signup'])) 
{ 
	NewUser();
}

?>

