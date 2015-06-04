<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Page</title>
</head>

<style>
img {
	height: 300px;
	width: 300px;
	float: left;	
}

p {
	color: white;
	font-size: 35px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	float: left;
	
}

#other-albums {
	height:250px;
	width:250px;
	float: left;
}

#album-list {

	color:white;
	float: left;
	font-size: 40px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-left: auto;
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
#button-style {
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	font-size: 35px;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border:0;
    background-color:transparent;
	margin-bottom: 150px;
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
 $info = $_POST['artistinfo'];
 $query = "SELECT artist_name, genre_name FROM belongs_to WHERE artist_name='".$info."';";
 $result = mysql_query($query, $handle);
 while($row = mysql_fetch_assoc($result)){
	echo "<p> Artist: ";
	echo $row['artist_name'];
    echo "<br />";
    echo "Genre: ";
	echo $row['genre_name'];
	echo"</p>";
 }
 ?>

<p style="clear:both;"> 
<?php
$query2 = "SELECT bio FROM artist WHERE name='".$info."';";
$result2 = mysql_query($query2, $handle);
while ($row2 = mysql_fetch_assoc($result2)){
	echo $row2['bio']; 
}
?>
</p>

<p id="album-list"> Albums by This Artist </p>
<form method="post" action="Album_Page.php">
<?php
$query3 = "SELECT name, artwork FROM album WHERE artist_name='".$info."';";
$result3 = mysql_query($query3, $handle);
while($row3 = mysql_fetch_assoc($result3)){
echo "<p style='clear:both;'>
	  <input type='submit' name='albuminfo' value='".$row3['name']."' id='button-style'>
	  </p>";
echo "<img id='other-albums' src='".$row3['artwork']."'/>";

}
?>
</form>
<form method="post" action="Results_Page.php">
<input id="bottom-button" type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
