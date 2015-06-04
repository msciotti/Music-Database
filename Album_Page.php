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

#bottom-button{
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
	font-size: 50px;
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
#button-style {
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	font-size: 35px;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border:0;
    background-color:transparent;

}
</style>
<body background="http://www.livemusictylertx.com/wp-content/uploads/2014/05/g_live_music.jpeg">
<?php
			$handle=mysql_connect('localhost','root');
			
			if($handle == FALSE) {
				die("No database connection available: ".mysql_error());
			}
			
			$db=mysql_select_db('music');
			if($db == FALSE) {
				die("Unable to select database: ".mysql_error());
			}
			?>
<?php
$info = $_POST['albuminfo'];
$query = "SELECT artwork FROM album WHERE name='".$info."';";
$result = mysql_query($query, $handle);
while($row = mysql_fetch_assoc($result)){

 echo "<img id='main-img' src='".$row['artwork']."' />";

}
?>

<div class="track-list-text">
<form method="post" action="Song_Page.php">
<ul> Track List
	<?php
$query7 = "SELECT song_name FROM belongs_to_album WHERE album_name='".$info."';";						
$result7 = mysql_query($query7, $handle);
while ($row7 = mysql_fetch_assoc($result7)){
	echo "<li>";
	echo "<input type='submit' name='songinfo' value='".$row7['song_name']."' id='button-style'>";
	echo "</li>";	
}
?>
    </ul>
    </form>
</div>


</div>
<div class="header-text">
<br />
<p> Artist: 
<?php
$query3 = "SELECT Artist_name FROM album WHERE name='".$info."';";
$result3 = mysql_query($query3, $handle);
while($row3=mysql_fetch_assoc($result3)) {
	echo $row3['Artist_name'];
}
?>
</p>
<p > Album:
<?php
$query4 = "SELECT name FROM album WHERE name='".$info."';";
$result4 = mysql_query($query4, $handle);
while($row4=mysql_fetch_assoc($result4)) {
	echo $row4['name'];
}
?>
 </p>
<p> Genre:
<?php
$query5 = "
	SELECT genre_name
	FROM belongs_to, artist, album
	WHERE artist.name=album.artist_name AND belongs_to.artist_name=artist.name AND album.name='".$info."';";

$result5 = mysql_query($query5, $handle);
while($row5=mysql_fetch_assoc($result5)) {
	echo $row5['genre_name'];
}
?>
 </p>
</div>






<form method="post" action="Results_Page.php">
<input id="bottom-button" type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
