<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Genre Page</title>
</head>

<style>
#top{
	color: white;
	font-size: 75px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	text-decoration: underline;
}

ul, li {
	color: white;
	font-size: 35px;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	margin-left: auto;
	text-align:center;
}

img {
	height: 150px;
	width: 150px;
	float: left;
	margin-left: 700px;
}
#button-style {
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	font-size: 35px;
	border:0;
    background-color:transparent;
}
#bottom-button{
	height: 25px;
    width:300px;
	border-radius:20px;
	text-align: center;
	position: absolute;
   	left: 50%;
   	top: 50%;
   	margin-top: -50px; /* Half of total height */
   	margin-left: -150px; /* Half of total width */
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
   <p id='top'>         
<?php
$info = $_POST['genreinfo'];
$query = "SELECT name FROM genre WHERE name='".$info."';";
$result = mysql_query($query, $handle);
while($row = mysql_fetch_assoc($result)){
 echo $row['name']; 
}

?>
</p>
<form method="post" action="Artist_Page.php">
<?php
$query2 = "SELECT artist_name FROM belongs_to WHERE genre_name='".$info."';";
$result2 = mysql_query($query2, $handle);
 echo "<ul>";
while($row2 = mysql_fetch_assoc($result2)){
	echo"<li>";
	echo "<input align='center' type='submit' name='artistinfo' value='".$row2['artist_name']."' id='button-style'>";
	echo "</li>";
}
 echo "</ul>";
?>
</form>
<form method="post" action="Results_Page.php">
<input id="bottom-button" type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
