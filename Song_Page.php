<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Song Result</title>
</head>
<style>
#standard{
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

div.header-text {
	color: white;
	float: left;
	font-size: 33px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-left: 10px;
}

li, ul {
	clear: left;
	color:white; 
	font-size: 20px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

#button-style{
	color:white; 
	font-size: 20px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border:0;
    background-color:transparent;
}

iframe {
	height: 600px;
	width: 800px;
	float: left;
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
	$song = $_POST['songinfo'];
	$query1 = "SELECT artwork FROM album, belongs_to_album WHERE song_name='".$song."' AND name=album_name;";
	$result1 = mysql_query($query1, $handle);
	
	while($row=mysql_fetch_assoc($result1)) {
	echo "<img id='main-img' src='".$row['artwork']."' />";
	}
?>

<div class="header-text">

<p> Track: 
<?php
$query2 = "SELECT name FROM songs WHERE name='".$song."';";
$result2 = mysql_query($query2, $handle);
while($row2=mysql_fetch_assoc($result2)) {
	echo $row2['name'];
}
?>

</p>
<p> Artist: 
<?php
$query3 = "SELECT Artist_name FROM songs WHERE name='".$song."';";
$result3 = mysql_query($query3, $handle);
while($row3=mysql_fetch_assoc($result3)) {
	echo $row3['Artist_name'];
}
?>
</p>
<p > Album:
<?php
$query4 = "SELECT album_name FROM belongs_to_album WHERE song_name='".$song."';";
$result4 = mysql_query($query4, $handle);
while($row4=mysql_fetch_assoc($result4)) {
	echo $row4['album_name'];
}
?>
 </p>
<p> Genre:
<?php
$query5 = "SELECT genre_name FROM artist, belongs_to, songs WHERE songs.artist_name=artist.name AND artist.name=belongs_to.artist_name AND songs.name='".$song."';";
$result5 = mysql_query($query5, $handle);
while($row5=mysql_fetch_assoc($result5)) {
	echo $row5['genre_name'];
}
?>
 </p>
</div>

<?php
$query6 = "SELECT song_link FROM songs WHERE name='".$song."';";
$result6 = mysql_query($query6, $handle);
while($row6=mysql_fetch_assoc($result6)){
echo "<p style='float:right;'>".$row6['song_link']."'</p>";	
}

?>
<form method="post" action="Song_Page.php">
<ul><p>Other Tracks on This Album </p>
<?php
$query7 = "SELECT song_name FROM belongs_to_album WHERE album_name IN
							(SELECT album_name FROM belongs_to_album WHERE song_name='".$song."')
							;";
$result7 = mysql_query($query7, $handle);
while ($row7 = mysql_fetch_assoc($result7)){
	echo "<li>";
	echo "<input type='submit' name='songinfo' value='".$row7['song_name']."' id='button-style'>";
	echo "</li>";	
}
?>

</ul>
</form>
<form method="post" action="Results_Page.php">
<input id="standard"type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
