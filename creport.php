<h1><center>Customer Report</h1>

<?php

	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"automobile");
	
	$res= mysqli_query($con,"select * from signup");
		echo "<table border='1' align='center'>";
		echo "<tr>"; echo "<th>"; 
		echo "id"; echo "</th>";
		echo "<th>"; echo "First_name";echo "</th>";
		echo "<th>"; echo "Last_name";echo "</th>";
		echo "<th>"; echo "DOB";echo "</th>";
		echo "<th>"; echo "Gender";echo "</th>";
		echo "<th>"; echo "Address";echo "</th>";
		echo "<th>"; echo "email";echo "</th>";
		echo "<th>"; echo "contact";echo "</th>";
		echo "<th>"; echo "username"; echo "</th>";
		 echo "</tr>";
	while($row= mysqli_fetch_array($res))
	{
		echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["dob"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["m_no"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";

	 echo "</tr>";
	}
		echo "</table>";
	
	?>
	<br>
	<center>	<button onclick="window.print()">Print</button></center>