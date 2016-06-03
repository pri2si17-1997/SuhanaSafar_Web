<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
</head>

<style>

#table_container
{
	border-radius : 10px;
	border : 1px solid black;
	background-color : #9999CC;
	opacity : 0.5;
	width : 800px;
	height : 500px; 
	margin-left : 90px; 
	top : 198px;
	position : absolute;
}

#header 
{
	background-image: url(./images/header.jpg);
	background-repeat:no-repeat;
    color:white;
    padding:10px;
	box-shadow: 1px 1px 2px #888888;
}

#section 
{
	border-radius : 0px;
	background-image: url(./images/hotels_bg_1.jpg);
	background-repeat:no-repeat;
	opacity : .8;
    width : 990px;
    height : 880px;
    padding:10px;
    margin-left : 165px;	 
    margin-top : 2.2px;
    box-shadow: 1px 1px 2px 2px #888888;
}

#footer 
{
    background-color:gray;
    height : 100px;
    color:white;
    clear:both;
    text-align:center;
   	padding:5px;	 	 
}

#header_1
{
	width : 880px;
	height : 30px;
	margin-left : 270px;
	top : 10px;
	background-image: url(./images/header.jpg);
	background-repeat:no-repeat;
	position : absolute;
}

#header_2
{
	width : 880px;
	height : 30px;
	margin-left : 270px;
	top : 45px;
	background-image: url(./images/header.jpg);
	background-repeat:no-repeat;
	position : absolute;
}

div.menu2
{
	top : 40px;
    margin-left : 50px;
	width:245px;
	height : 25px;
    text-align:center;
    background-image: url(./images/bg_2.jpg);
    border:0px solid black;
    font-size:0;
}

div.menu2 a
{
    display: inline-block;
    padding: 0 20px;
    background-image: url(./images/bg_1.jpg);
    color:blue;
    text-decoration:none;
    font: bold 12px Arial;
    line-height: 32px;
}

div.menu2 a:hover, div.menu2 a.current
{
	color : orange;
    background-position:0 -60px;
}

div.menu2 a.dummy
{
    width:2px;
    padding:0 0;
}

</style>

<style>
h1
{
	margin-top : 4px;
	margin-left : 10px;
	text-align : left;
	font-family : "Times New Roman", Times, Serif;
	font-size : 16px;
	position : relative;
}

p
{
	margin-left : 50px;
	margin-top : 10px;
	text-align : left;
	font-family : "Times New Roman", Times, Serif;
	font-size : 14px;
	position : relative;
}

table#t01 tr:nth-child(even)
{
	background-color : black;
	color : white;
}

table#t01 tr:nth-child(odd) 
{
   background-color: gray;
   color : white;
}

table#t01 th	
{
	text-align : left;
	font-size : 14px;
    background-color: aqua;
    color: black;
}

table#t01
{
	font-size : 12px
	border-radius : 10px;
	border : 1px;
	width : 700px;
	height : 300px; 
	top : 15px;
	margin-left : 50px; 
	margin-top : 80px;
	position : absolute;
	col width = "130";
	col height = "50";
}
</style>

<style>

a:link
{
	color : red;
	text-decoration : none;
}

a:visted
{
	color : orange;
	text-decoration : none;
}

a:hover
{
	color : orange;
	text-decoration : none;
}

a:active
{
	color : green;
	text-decoration : none;
}

div.img
{
	margin : 1px;
	padding : 5px;
	<--border : 1px solid black;>
	height : auto;
	width : auto;
	float : left;
	tect-align : center;
}

div.img img
{
	display : inline;
	margin : 2px;
	border : 1px solid red;
}

div.img a:hover img
{
	border : 1px solid #0000ff;
}

div.desc
{
	text-align : center;
	font-weight : normal;
	width : 120px;
	margin : 5px;
}
</style>

<body style = "margin : 0px">

<div id="header">
<img src = "./images/logo_1.png" style = "margin-left : 50px; width : 210px; height : 63px">
<div id = "header_1">
<p style = "text-align : left; font-size : 12px; margin-left : 650px; color : green"><a href = "login.html">Sign In</a></p>
</div>
<div id = "header_2">
	<div class="menu2">
    	<a href="index.html">Flights</a>
    	<a href="hotels.html">Hotels</a>
    	<a href="holiday_home.html">Holidays</a>
	</div>
</div>
</div>

<div id="section">
	<div id = "table_container">
		<?php 
			session_start();
			
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
				$_SESSION['rom'] = $Rooms_Avl;
				//echo $Check_Out;
				//$email = $_POST['email']; 
				//$password = $_POST['password']; 
				$var = "SELECT *FROM hotels WHERE place = '$Place' AND CheckIn BETWEEN '$Check_In' AND '$Check_Out' AND CheckOut BETWEEN '$Check_In' AND '$Check_Out' AND rooms_avl >= '$Rooms_Avl'";
				$res = mysql_query($var);
				if(mysql_num_rows($res) > 0)
				{
					echo '<table id = "t01">';
					echo '<th>Hotel Id</th><th>Hotel Name</th><th>Rating</th><th>Price</th><th>Address</th><th>Place</th><th>Rooms Available</th>';
					while($rows = mysql_fetch_array($res))
					{
						$_SESSION['hotel_id'] = $rows['h_id'];
						$hotel_name = $rows['hotel_name'];
						$rating = $rows['star'];
						$price = $rows['price'];
						$address = $rows['address'];
						$place = $rows['place'];
						$checkIn = $rows['CheckIn'];
						$checkOut = $rows['CheckOut'];
						$_SESSION['rooms'] = $rows['rooms_avl'];
						echo '<tr>';
						echo '<td>'.$rows['h_id'].'</td><td>'.$rows['hotel_name'].'</td><td>'.$rows['star'].'</td><td>'.$rows['price'].'</td><td>'.$rows['address'].'</td><td>'.$rows['place'].'</td><td>'.$rows['rooms_avl'].'</td>';
						echo '<td><a href = "payment.html"><button>Book Now</button></a></td>';
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
	</div>
</div>
<div id="footer">
</div>

</body>
</html>