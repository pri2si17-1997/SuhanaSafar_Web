<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
<link href="./themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="./themes/8/js-image-slider.js" type="text/javascript"></script>
    <link href="./themes/8/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="./themes/8/tooltip.js" type="text/javascript"></script>
    <link href="./generic.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
    </script>
</head>

<style> 
	input[type="radio"]
		margin: 0px 10px 0px 10px 0px 10px; 
</style>

<style>

#div_img_sld
{
	border-radius : 10px;
	border : 1px solid black;
	width : 450px;
	height : 250px; 
	margin-left : 540px; 
	top : 95px;
	position : absolute;
}

#lbl
{
	margin-left : 750px;
	background-color : yellow;
	color : blue;
}

#div_img_gall
{
	background-image: url(./images/background_3.jpg);
	background-repeat:no-repeat;
	border-radius : 10px;
	border : 1px solid black;
	width : 450px;
	height : 250px; 
	margin-left : 540px; 
	top : 355px;
	position : absolute;
}

#div_bg
{
	border-radius : 10px;
	background-image : url(./images/Capture2.jpg);
	background-repeat : no-repeat;
	left : 5px; 
	top : 5px; 
	width : 530px; 
	height : 590px; 
}

#div_air_deals
{
	background-image: url(./images/background_3.jpg);
	background-repeat:no-repeat;
	border : 1px solid black;
	border-radius : 10px;
	left : 175px;
	top : 660px;
	width : 515px;
	height : 300px;
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
	background-image: url(./images/background_1.jpg);
	background-repeat: y;
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
	font-size : 12px;
	border = 1px;
	margin-top : 15px; 
	margin-left : 50px; 
	width : 400px; 
	height : 200px; 
	position : relative;
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
	<label id = "lbl">
		<a href = "login.html">Login</a>
	</label>
</div>
<!--<div id = "header_2">
	<div class="menu2">
    	<a href="index.html">Flights</a>
    	<a href="hotels.html">Hotels</a>
    	<a href="holiday_home.html">Holidays</a>
	</div>
</div>-->
</div>

<div id="section">
	<div id = "div_bg">
	<iframe name = "frame_1" src = "one_way.html" style = "height : 335px; width : 460px; background-color : white; margin-top : 185px; margin-left : 25px; position : absolute; border : 0px"></iframe>
	</div>
	<div id = "div_air_deals">
	<h1>Airfare Details</h1>
	<p>Get the best deals you have ever got... Hurry! it's a limited period offer.</p>
	<table id = "t01">
	<tr>
	<th>From</th>
	<th>To</th>
	<th>Starting Price<sup>*</sup></th>
	</tr>
	<tr>
	<td>Delhi</td>
	<td>San Fransisco</td>
	<td>INR 65940</td>
	</tr>
	<tr>
	<td>Ahemedabad</td>
	<td>New York</td>
	<td>INR 65940</td>
	</tr>
	<tr>
	<td>Mumbai</td>
	<td>Chicago</td>
	<td>INR 65940</td>
	</tr>
	<tr>
	<td>Delhi</td>
	<td>Los Angeles</td>
	<td>INR 65940</td>
	</tr>
	<tr>
	<td>Chennai</td>
	<td>Washington</td>
	<td>INR 65940</td>
	</tr>
	</table>
	<p><sup>*</sup>Subject to availability.Fares are inclusive of taxes and fees.</p>
	</div>
	<div id = "div_img_gall">
		<h1 style = "text-align : left; font-size : 15px; margin-top : 5px">Holiday Packages</h1>
		<div class = "img" style = "margin-left : 5px; margin-top : 5px">
			<a target = "_blank" href = "https://www.codechef.com/"><img src = "./images/italy.jpg" alt = "Priyanshu" width = "125px" height = "125px"></a>
			<div class = "desc"><a target = "_blank" href = "https://www.codechef.com/">Incredible India!</a><br>6N/4D</div>
		</div>

		<div class = "img" style = "margin-top : 5px">
			<a target = "_blank" href = "https://www.codechef.com/"><img src = "./images/kerela.jpg" alt = "Priyanshu_Ayushi" width = "125px" height = "125px"></a>
			<div class = "desc"><a target = "_blank" href = "https://www.codechef.com/">Golden India!</a><br>6N/4</div>
		</div>

		<div class = "img" style = "margin-top : 5px">
			<a target = "_blank" href = "https://www.codechef.com/"><img src = "./images/rajasthan.jpg" alt = "Priya" width = "125px" height = "125px"></a>
			<div class = "desc"><a target = "_blank" href = "https://www.codechef.com/">India!</a><br>6N/4D</div>
		</div>
		<p style = "text-align : right; font-size : 12px; margin-right : 5px; font-family : "Times New Roman", Times, serif"><a target = "_blank" href = "https://www.codechef.com/">View More Packages</a></p>
	</div>
	<div id = "div_img_sld">
		<div id="sliderFrame">
        <div id="slider">
                <img src="./images/image-slider-1.jpg" alt="Great holidays.." />
            <img src="./images/image-slider-2.jpg" alt="colosium.." />
            <img src="./images/image-slider-3.jpg" alt="India..." />
            <img src="./images/image-slider-4.jpg" alt="Paris.." />
            <img src="./images/image-slider-5.jpg" alt="Flights..." />
        </div>
    </div>
	</div>
</div>
<div id="footer">
</div>

</body>
</html>