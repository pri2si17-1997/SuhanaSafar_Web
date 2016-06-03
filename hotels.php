<?php 

define('DB_HOST', 'localhost:3306'); 
define('DB_NAME', 'suhanasafar'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


function searchHotels() 
{ 
	$Place = $_POST['place']; 
	$Check_In = $_POST['CheckIn']; 
	$Check_Out = $_POST['CheckOut'];
	//echo $Place;
	$date_1 = new DateTime($Check_In);
	$Check_In = $date_1->format('Y-m-d');
	//echo $Check_In;
	$date_2 = new DateTime($Check_Out);
	$Check_Out = $date_2->format('Y-m-d');
	$Rooms_Avl = $_POST['NOR'];
	//echo $Check_Out;
	//$email = $_POST['email']; 
	//$password = $_POST['password']; 
	$var = "SELECT *FROM hotels WHERE place = '$Place' AND CheckIn BETWEEN '$Check_In' AND '$Check_Out' AND CheckOut BETWEEN '$Check_In' AND '$Check_Out' AND rooms_avl >= '$Rooms_Avl'";
	$res = mysql_query($var);
	if(mysql_num_rows($res) > 0)
	{
		echo '<table border = 1px>';
		echo '<th>Hotel Id</th><th>Hotel Name</th><th>Rating</th><th>Price</th><th>Address</th><th>Place</th><th>Rooms Available</th>';
		while($rows = mysql_fetch_array($res))
		{
			$hotel_id = $rows['h_id'];
			$hotel_name = $rows['hotel_name'];
			$rating = $rows['star'];
			$price = $rows['price'];
			$address = $rows['address'];
			$place = $rows['place'];
			$checkIn = $rows['CheckIn'];
			$checkOut  =$rows['CheckOut'];
			$rooms = $rows['rooms_avl'];
			/*echo "Hotel Id : $hotel_id | ";
			echo "Hotel Name : $hotel_name | ";
			echo "Rating : $rating | ";
			echo "Address : $address | ";
			echo "Price : $price | ";
			echo "Place : $place | ";
			echo "Check In : $checkIn | ";
			echo "Check Out : $checkOut | ";
			echo "Rooms Available : $rooms";
			echo "<br>";*/
			echo '<tr>';
			echo '<td>'.$rows['h_id'].'</td><td>'.$rows['hotel_name'].'</td><td>'.$rows['star'].'</td><td>'.$rows['price'].'</td><td>'.$rows['address'].'</td><td>'.$rows['place'].'</td><td>'.$rows['rooms_avl'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	else
	{
		echo "No Results Found";
	}
} 

if(isset($_POST['signup'])) 
{ 
	searchHotels();
}

?>

