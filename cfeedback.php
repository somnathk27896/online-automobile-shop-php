<h1><center>Customer Feedback</h1>

<?php

	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	
	$res= mysqli_query($con,"select * from feedback");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; 
		echo "id"; echo "</th>";
		echo "<th>"; echo "NAME";echo "</th>";
		echo "<th>"; echo "ADDRESS";echo "</th>";
		echo "<th>"; echo "CONTACT NO";echo "</th>";
		echo "<th>"; echo "COUNTRY";echo "</th>";
		echo "<th>"; echo "STATE"; echo "</th>";
		echo "<th>"; echo "FEEDBACK";echo "</th>";

		 echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";
		echo "<td>"; echo $row["country"]; echo "</td>";
		echo "<td>"; echo $row["state"]; echo "</td>";
		echo "<td>"; echo $row["comment"]; echo "</td>";
	 echo "</tr>";
	}
		echo "</table>";
	
	?>
	<br>
<center>	<button onclick="window.print()">Print</button></center>