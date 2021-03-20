<html>
<head>
<style>
.Header {
	background-color: #800000;
	height: 160px;
	font-size: 100px;
	border-radius: 50px;
}
.Right {
	float: right;
	background-image: url("pupback.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	margin: 10px;
	width: 25%;
	height: 750px;
	font-size: 20px;
	font-weight: bold;
	border: 10px;
	border-radius: 15px;
	text-align: center;
}
.left{
	position: absolute;
	top: 50%;
	left: 30%;
	margin: -25px 0 0 -25px;
}
.footer{
	font-size: 40px;
}
.picture{
	position: relative;
	left: 1200px;
	height: 160px;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: 10px;
  border-radius: 15px;
  box-shadow: 0 20px #999;
  height: 100px;
  width: 200px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 15px #666;
  transform: translateY(4px);
}
body {
	background-color: lightblue;
}
</style>
</head>
<body>
<div class = "Header">
This is Header
	<img src = "puplogo.png" class = "picture"/>
</div>
<div class = "Right">
<p>Sintang Paaralan</p>
<p>Tanglaw ka ng bayan</p>
<p>Pandayan ng isip ng kabataan</p>
<p>Kami ay dumating nang salat sa yaman</p>
<p>Hanap na dunong ay iyong alay</p>
<p>Ang layunin mong makatao</p>
<p>Dinarangal ang Pilipino</p>
<p>Ang iyong aral, diwa, adhikang taglay</p>
<p>PUP, aming gabay</p>
<p>Paaralang dakila</p>
<p>PUP, pinagpala</p>
<p>Gagamitin ang karunungan</p>
<p>Mula sa iyo, para sa bayan</p>
<p>Ang iyong aral, diwa, adhikang taglay</p>
<p>PUP, aming gabay</p>
<p>Paaralang dakila</p>
<p>PUP, pinagpala</p>
</div>
<div class = "left">
<a href = "bot2.php">
	<button class="button" style = "vertical-align:middle"> page2 </button>
</a>
</div>
<div class = "footer">
<marquee> Welcome to PUP Itech!!! </marquee>
</div>
</body>
</html>
<?php
?>