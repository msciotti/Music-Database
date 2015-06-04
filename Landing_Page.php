<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Landing Page</title>
<style>

body{
	background-image: url("http://fc06.deviantart.net/fs70/f/2013/226/7/8/trance_albums_poster_normal_by_jrexxx-d6i2vgb.jpg");
}


input{
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
</head>

<body>
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
<form method="post" action="Results_Page.php">
<input type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">

</form>

</body>
</html>
