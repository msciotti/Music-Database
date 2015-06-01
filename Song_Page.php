<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Song Result</title>
</head>
<style>
input{
	height: 25px;
    width:300px;
	border-radius:20px;
	text-align: center;
	position: absolute;
   	left: 50%;
   	top: 100%;
   	margin-top: -50px; /* Half of total height */
   	margin-left: -150px; /* Half of total width */
}
#main-img {
	height: 400px;
	width: 400px;
	float: left;
}

#other-albums {
	height:150px;
	width:150px;
	float: right;
	margin-right: 10px;
}

div.header-text {
	color: white;
	float: left;
	font-size: 33px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-left: 10px;
}

#album-list {

	color:white; 
	font-size: 40px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-right: 100px;
	margin-top: 1.5%;
}

li, ul {
	clear:both; 
	color:white; 
	font-size: 20px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
</style>

<body background="http://www.livemusictylertx.com/wp-content/uploads/2014/05/g_live_music.jpeg">

<img id="main-img" src="http://celebmafia.com/wp-content/uploads/2014/10/taylor-swift-1989-album-cover-and-promo-pictures-2014-_2.jpg" />

<div class="header-text">

<p> Track: </p>
<p> Artist: </p>
<p > Album: </p>
<p> Genre: </p>
</div>

<iframe align="right" width="1000" height="550" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>

<ul><p>Other Tracks on This Album </p>
	<li > TEST </li>
    <li > TEST </li>
</ul>

<p align="right" id="album-list"> Other Albums by This Artist </p>

<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/8f/Taylor_Swift_-_Speak_Now_cover.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/f/fa/Taylor_Swift.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/86/Taylor_Swift_-_Fearless.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" />
<form method="post" action="Results_Page.php">
<input type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
