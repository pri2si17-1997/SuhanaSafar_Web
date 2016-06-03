<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>

<script>
	function validate_card(str)
	{
		var re = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/; 
		return re.test(str);
	}
  
	function validateForm()	
	{	
		var nm = /^[A-Za-z]{10,20}$/;
		if(!validate_card(form01.card_number.value))
		{
			alert("The card number you have entered is not valid!");
			document.form01.card_number.focus();
			return false;
		}
		if(isNaN(form01.cvv.value))
		{
			alert("Enter Valid CVV");
			document.form01.cvv.focus();
			return false;
		}
		if(form01.cvv.value.length != 3)
		{
			alert("Enter Valid CVV");
			document.form01.cvv.focus();
			return false;
		}
		if(!nm.form01.card_holder.value)
		{
			alert("Enter Valid Card Holder name");
			document.form01.card_holder.focus();
			return false;
		}
		return true;
	}
</script>
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

table#01 tr:nth-child(even)
{
	background-color : yellow;
	color : white;
}

table#t01 tr:nth-child(odd) 
{
   background-color: WhiteSmoke;
   color : black;
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
	border : 1px solid black;
	width : 500px;
	height : 300px; 
	top : 15px;
	margin-left : 90px; 
	margin-top : 80px;
	position : absolute;
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
<p style = "text-align : left; font-size : 12px; margin-left : 650px; color : green"><a href = "logout.php">Logout</a></p>
</div>
<div id = "header_2">
	<div class="menu2">
    	<a href="#1">Flights</a>
    	<a href="#2">Hotels</a>
    	<a href="#3">Holidays</a>
	</div>
</div>
</div>

<div id="section">
	<div id = "table_container">
	<form name = "form01" action = "test.php" method = "post" onsubmit = "return validateForm();">
	<p style = "font-size : 25px; margin-left : 15px; top : 15px"><strong>Eneter Your Credit/Debit Card Credentials : </strong></p>
	<p style = "font-size : 15px; margin-left : 15px"><strong>Card Number : <input type = "text" name = "card_number" style = "width : 345px; height : 25px; margin-left : 80px" required></strong></p>
	<p style = "font-size : 15px; margin-left : 15px"><strong>CVV : <input type = "text" name = "cvv" style = "width : 45px; height : 25px; margin-left : 138px" required></strong></p>
	<p style = "font-size : 15px; margin-left : 15px"><strong>Valid Through : <input type = "month" name = "valid_thru" style = "width : 145px; height : 25px; margin-left : 75px" required></strong></p>
	<p style = "font-size : 15px; margin-left : 15px"><strong>Card Holder Name : <input type = "text" name = "card_holder" style = "width : 345px; height : 25px; margin-left : 45px" required></strong></p>
	<input type = "submit" name = "signup" style = "background-image : url(./images/ShowFlights.jpg); width : 100px; height = 200px; margin-left : 200px">
	</form>
	</div>
</div>
<div id="footer">
</div>

</body>
</html>