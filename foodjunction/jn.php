<?php

    include "test.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		FOOD JUNCTION
	</title>
	<style>*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic; 
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(jn1.jpg);
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

.row1
{
 margin-left: 40px;
 margin-right: 40px;
	border-style: double;
    border-color: white;
  border-width: 5px;
  padding : 10px;
  background-color: #e9d4c5;
  color:black;
}</style>
</head>
<body >
	<header>
		<div class="main">
			<div class="logo">
				<img src="jnlogo.jpg">
			</div>
			<ul> 
				<li ><a href="http://localhost/foodjunction/grid.php">Home</a></li>
				<li><a href="https://www.jehannuma.com/retreat-bhopal/">Website</a></li>
				<li><a href="http://localhost/foodjunction/logout.php">Logout</a></li>

			</ul>
		</div>	
		<div class="title">
			<h1>JEHAN NUMA</h1>
		</div>

		<div class="button">
			<a href="#write" class="btn">Give Review</a>
			<a href="#read" class="btn">Show Review</a>
		</div>
	</header> 
<div class="bgp" id="write">

<br>
<br>
<form method="post">

  <label for="fname"><b>Write your review...</b></label>
<br>
<br>
  <input type="text" id="fname" name="content" > <br><br>
	<button type="submit" id="rs" name="new_post" onclick="num()"><b> Submit Review</b></button>
</form>
</div>
<div class="abc" id="read" >
<p id="rr1"><b>Read Reviews :</b></p>
<div class="row1">

	<?php foreach($query as $q){?>
		
					<p class="card-text"><?php echo $q['content']; ?></p>
	
	<?php }?>
</div>
</div>
<script>
function num()
{
alert("review submitted")

}
</script>

</body>	
</html>