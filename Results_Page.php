<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Result</title>
</head>
<style type="text/css">

td,th {
	padding: 30px; 
	border: 1px white;
	font-family: Copperplate / Copperplate Gothic Light, sans-serif;
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border-right: 0pt solid white;
	border-left: 0pt solid white;

}

table {
   	margin-top: 50px; /* Half of total height */
    margin-left: auto;
    margin-right: auto;
	border-collapse: collapse;
	}
	
#top {
	font-size: 75px;
	border-bottom: 3pt solid white;
	

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
			
	$searchterms = $_POST['searchterms'];
	$query1 ="
		SELECT 	*
		FROM	songs
		WHERE	name='".$searchterms.";";
		
	$result1= mysql_query($query1, $handle);
		
	$query2 ="
		SELECT 	*
		FROM	artist
		WHERE	name='".$searchterms.";";
	$result2= mysql_query($query2, $handle);
	
	$query3 ="
		SELECT 	*
		FROM	album
		WHERE	name='".$searchterms.'";";
		
	$result3= mysql_query($query3, $handle);
	
	$query4 ="
		SELECT 	*
		FROM	genre
		WHERE	name='$searchterms'";
		
	$result4= mysql_query($query4, $handle);
		?>
        
        <table>
		<tr id="top" >
        	<td align="center"><strong>Song</strong></td>
            <td align="center"><strong>Artist</strong></td>
            <td><strong>Album</strong></td>
            <td><strong>Genre</strong></td>
        </tr>
        <tr>
        <td>
         <?php while($row = mysql_fetch_assoc($result1)): ?>
    <tr>
        <?php echo $row['name']; ?>
    </tr>
 
    <?php endwhile; ?>
    </td>
    <td>
        <?php while($row = mysql_fetch_assoc($result2)): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
    </tr>
    <?php endwhile; ?>
      </td>
      <td>  
        <?php while($row = mysql_fetch_assoc($result3)): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
    </tr>
    <?php endwhile; ?>
      </td>
      <td>  
        <?php while($row = mysql_fetch_assoc($result4)): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
    </tr>
    <?php endwhile; ?>
        </td>
        </tr>
       
    </table>
</body>
</html>
