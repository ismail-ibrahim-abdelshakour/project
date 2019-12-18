<?php
	require 'connection.php';
	//------------------------------------------------------ show data
	if(isset($_GET["showdata"])){
		$q="SELECT * FROM localstore";
		$dt=mysqli_query($conn,$q);
		echo "<table><tr><td>type</td><td>target</td><td>Date</td></tr>";
		while($row=mysqli_fetch_array($dt)){
				$db_type=$row['_type'];
				$dp_target=$row['_target'];
				$db_date=$row['_date'];
					echo "<tr><td>";
					echo $db_type;
			 		echo "</td><td>";
					echo  $dp_target;
					echo "</td><td>";
					echo  $db_date;
			 		echo "</td></tr>";
			 }
			echo "</table>";
	}
?>