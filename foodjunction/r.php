<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		FOOD JUNCTION
	</title>
	<style>
	*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic; 
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(r1.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}

ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;

}

ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}

ul li a:hover{
	background-color: #fff;
	color: #000;
}

ul li.active a{
	background-color: #fff;
	color: #000;
}

.logo img{
	float: left;
	width: 150px;
	height: auto;
}

.main{
	max-width: 1200px;
	margin: auto;
}

.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.title h1{
	color: #fff;
	font-size: 70px;
}

.button{
	position: absolute;
	top: 62%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}

.btn:hover{
	background-color: #fff;
	color: #000;
}
form
{
padding: 10px 10px;
font-size: 30px;
color: white;
font-family: "Times New Roman", Times, serif;

}
input[type=text] {
  width: 100%;
  padding-left:20px;
  padding-top:10px;
  height: 500px;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
}

.bgp{
  background-image: url("https://media.istockphoto.com/photos/laminate-wooden-floor-texture-background-picture-id1083302826?b=1&k=20&m=1083302826&s=170667a&w=0&h=ePdma8I7u7KHs2YbehQSVcCX9qay5iPr3wynsWnzFZ0=");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

#rs:hover {
	border: 1px solid #fff;
	background-color: #000;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
#rs
{
	border: 1px solid #000;
	padding: 10px 30px;
	background-color: #fff;
	color: #000;
	text-decoration: none;
	transition: 0.6s ease;
}
.abc
{
background-image: url("https://media.istockphoto.com/photos/laminate-wooden-floor-texture-background-picture-id1083302826?b=1&k=20&m=1083302826&s=170667a&w=0&h=ePdma8I7u7KHs2YbehQSVcCX9qay5iPr3wynsWnzFZ0=");
  background-color: #cccccc;
  height: 1000px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

#rr1
{
padding: 40px 50px;
font-size: 30px;
color: white;
font-family: "Times New Roman", Times, serif;
}

#review1
{
 margin-left: 40px;
 margin-right: 40px;
	border-style: double;
    border-color: white;
  border-width: 5px;
  padding : 10px;
  background-color: #e9d4c5;
  color:black;
}
	</style>
</head>
<body >
	<header>
		<div class="main">
			<div class="logo">
				<img src="rlogo.jpg">
			</div>
			<ul> 
				<li ><a href="http://localhost/foodjunction/grid.php">Home</a></li>
				<li><a href="https://www.radissonhotels.com/en-us/hotels/radisson-bhopal?cid=a:se+b:gmb+c:apac+i:local+e:rad+d:ind+h:INMPBHO1">Website</a></li>
				<li><a href="http://localhost/foodjunction/logout.php">Logout</a></li>
			</ul>
		</div>	
		<div class="title">
			<h1>RADISSON</h1>
		</div>

		<div class="button">
			<a href="#write" class="btn">Give Review</a>
			<a href="#read" class="btn">Show Review</a>
		</div>
	</header> 
<div class="bgp" id="write">
<form>

  <label for="fname"><b>Write your review...</b></label>
<br>
<br>
  <input type="text" id="fname" name="fname" style=> <br><br>
	<button type="button" id="rs" ><b> Submit Review</b></button>
</form>

</div>
<div class="abc" id="read">
<p id="rr1"><b>Read Reviews :</b></p>
<br>
<p id="review1">When I think of a hotel I would like to stay and recommend to other single women like me - there are three aspects which are of top priority:
<br>
- Accessibility,<br>
- Amenities, and<br>
- Staff<br>
<br>
On both counts of Accessibility and Amenities, the RADISSON would rank High... considering its location, the decor, the restaurants within the premises, and the little <br>thoughtful touches at every corner.
<br><br>
But their real crown jewels are the Staff!
<br><br>
I say this with absolute conviction as I travelled last month as a solo female traveller during PEAK wedding season.
<br><br>
With a shifting schedule and the many variables that would determine my stay - their staff could arrange for my bookings (stayed there for 2 nights, then left for another city,<br> and then came back for two nights) and would inform me personally of all updates in a very timely manner.
<br><br>
I especially laud Aakash at the Front Desk for his assistance, can-do attitude and professionalism during my stay.
<br><br>
All the staff at Jehan Numa are highly invested in making sure that their guests have a gala experience. Gaurav (the Manager) and his team could offer a unique experience<br> of a personalised touch, despite the busy, near-chaotic weekend that it actually was!
<br><br>
The hotel is really beautiful - you could actually take half a day to explore it if you are visiting Bhopal for the first time (as I was)!
<br><br>
It feels like you have travelled back in time with its open spaces, green manicured lawns, colourful foliage, the stables, the pillars and pathways, black and white photography,<br> teak furniture… everything about it says quaint, but regal!
<br><br>
Be sure to catch the Guided Audio Tour of the history of Bhopal and the Jehan Numa Palace in the last two centuries. It is along the foyer past the lobby - clearly marked beneath <br>the portraits. It is worth scanning that QR code and browsing through it in an afternoon.
<br><br>
And post that I recommend sampling a Lemon Tart at Cafechino, or enjoying the special Masala Chai at Shahnama.
<br>It is fair to say, that the premises is akin to a museum and one realises just how iconic the structure is!
<br><br>
My itinerary aside - I recommend this hotel to anyone who is visiting the city of Bhopal for the first time.
<br>
Bhopal as a city is full surprises and is a little-known historical gem. And post my stay here, I would say the same for the Jehan Numa Palace as well!</p><br>
</div>
</body>	
</html>