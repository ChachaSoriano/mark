<?php
/** save codes by loading database module */
	session_start();
	include 'config.php';

/** these headers allow sending data from mobile */
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
	
	echo '<table border="1" style="font-size:30px; height:250px; width:250px;">';
	echo '<th>NAME</th>';
	echo '<th>SCORES</th>';

	/** sql statements go here and fetch data from server */
	$result = mysql_query("select * from scores order by score desc" ,$con) or die(mysql_error());
	while($data=mysql_fetch_array($result)){	
		
	  
	  
	  	echo "<tr>";
			echo "<td>";
				echo $data['name'];
			echo "</td>";
			echo "<td>";
				echo 	$data['score'];	
			echo "</td>";
		echo "</tr>";
	}
echo '</table>';
?>

