<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Result</title>
</head>
<style type="text/css">

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
td,th {
	padding: 30px; 
	border: 1px white;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border-right: 0pt solid white;
	border-left: 0pt solid white;
	text-align: center;

}

table {
   	margin-top: 50px; /* Half of total height */
    margin-left: auto;
    margin-right: auto;
	border-collapse: collapse;
	font-size: 75px;
	}
	
#top {
	
	border-bottom: 3pt solid white;

}

#results {
	font-size: 35px;
	float: left;
	
}

#result-table {
	margin-left: 425px;	
}

#button-style {
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	font-size: 35px;
	border:0;
    background-color:transparent;
}
</style>
<body background="http://www.livemusictylertx.com/wp-content/uploads/2014/05/g_live_music.jpeg">

<?php
		//ESTABLISH DATABASE CONNECTION
		$handle=mysql_connect('localhost','root');
			
		if($handle == FALSE)
			{
			die("No database connection available: ".mysql_error());
			}
			
		$db=mysql_select_db('music');
		if($db == FALSE) 
			{
			die("Unable to select database: ".mysql_error());
			}
?>
            
<?php
	//RUN QUERIES		
	$searchterms = $_POST['searchterms'];
	
	$query1 = 
	"	SELECT 	name
		FROM	songs
		WHERE name='".$searchterms."';";
	$result1= mysql_query($query1, $handle);
	
	$query2 = 
	"	SELECT 	name
		FROM	artist
		WHERE name='".$searchterms."';";
	$result2= mysql_query($query2, $handle);
	
	$query3 = 
	"	SELECT 	name
		FROM	album
		WHERE name='".$searchterms."';";
	$result3= mysql_query($query3, $handle);
	
	$query4 = 
	"	SELECT 	name
		FROM	genre
		WHERE name='".$searchterms."';";
	$result4= mysql_query($query4, $handle);
	
	?>
    
<table>
		<tr>
        <td><strong>Song</strong>
        <br />
        <form method="post" action="Song_Page.php">
 		<?php while($row=mysql_fetch_assoc($result1))
		{

		echo "<input type='submit' name='songinfo' value='".$row['name']."' id='button-style'>";
		}
		?>
		</form>
        </td>
        

        <td><strong>Artist</strong>
        <br />
        <form method="post" action="Artist_Page.php">
		<?php while($row=mysql_fetch_assoc($result2))
		{
		echo "<input type='submit' name='artistinfo' value='".$row['name']."' id='button-style'>";
		}
		?>
		</form>
        </td>
        

        <td><strong>Album</strong>
        <br />
        <form method="post" action="Album_Page.php">
 		<?php while($row=mysql_fetch_assoc($result3))
		{
		echo "<input type='submit' name='albuminfo' value='".$row['name']."' id='button-style'>";
		}
		?>
 		</form>
        </td>

        <td><strong>Genre</strong>
        <br />
        <form method="post" action="Genre_Page.php">
		<?php while($row=mysql_fetch_assoc($result4))
		{
		echo "<input type='submit' name='genreinfo' value='".$row['name']."' id='button-style'>";

		}
		?>
		</form>
 		</td>
        </tr>
        
</table>
 

<?php //ALLOW FOR A NEW SEARCH ?>

<form method="post" action="Results_Page.php">
<input id="bottom-button" type="text"  name="searchterms" placeholder="Search for an artist, album, genre, or song...">
</form>
</body>
</html>
