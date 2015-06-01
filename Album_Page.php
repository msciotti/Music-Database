<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Album Page</title>
</head>
<style>

#main-img {
	height: 400px;
	width: 400px;
	display: block;
	float: left;
	margin-right: auto;
}

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

div.header-text {
	color: white;
	clear:both;
	font-size: 33px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-left: 10px;
	float:left;
}

div.track-list-text {
	color: white;
	float: left;
	font-size: 33px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	position: absolute;
   	left: 40%;
}
div.artist-albums {
	float: right;
	display: block;
	position:relative;
}
div.genre-albums {
	float: right;
	display: block;
	position:relative;

}
#other-albums {
	margin-top: 150px;
	height:150px;
	width:150px;
	margin-right: 10px;
	display: block;
	float: right;
}

#album-list {

	color:white; 
	font-size: 40px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-right: 50px;

	margin-bottom:-20%;
	
	
}
</style>
<body background="http://www.livemusictylertx.com/wp-content/uploads/2014/05/g_live_music.jpeg">


<img id="main-img" src="http://celebmafia.com/wp-content/uploads/2014/10/taylor-swift-1989-album-cover-and-promo-pictures-2014-_2.jpg" />
<div class="track-list-text">
<ul> Track List
	<li> Test </li>
    <li> Test </li>
    </ul>
</div>

<div class="artist-albums">
<p id="album-list"> Other Albums by This Artist </p>

<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/8f/Taylor_Swift_-_Speak_Now_cover.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/f/fa/Taylor_Swift.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/86/Taylor_Swift_-_Fearless.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" />
</div>

</div>
<div class="header-text">
<br />
<p > Album: </p>
<p> Artist: </p>
<p> Genre: </p>
</div>


<div class="genre-albums">
<p id="album-list"> Other Albums in This Genre </p>

<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/8f/Taylor_Swift_-_Speak_Now_cover.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/f/fa/Taylor_Swift.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/8/86/Taylor_Swift_-_Fearless.png" />
<img id="other-albums"src="http://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png" />

</div>





<form method="post" action="Results_Page.php">
<input type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
