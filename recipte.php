<?php
	session_start();
if($_SESSION["username"]=="")
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?>

<html>
<body>

<a href="home.php">home</a>
&nbsp;
<a href="logout.php">logout</a>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
$sql ="select id, username, addr, no, model, price, date from orders where username= '".$_SESSION['username']."'";
$res= mysqli_query($con,$sql);
$row = mysqli_fetch_array($res); 
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo"<h2>";

echo "Your Transaction id:&nbsp;&nbsp;&nbsp;" , $row['id'] ,"  ";  echo "<br>";
echo " Your Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['username'] , " " ;  echo "<br>";

echo " Your Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['addr'] , " " ;  echo "<br>";
echo " Your Contact No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['no'] , " " ;  echo "<br>";
echo " Your Car Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['model'] , " " ;  echo "<br>";
echo " PriZe:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['price'] , " " ;  echo "<br>";
echo " Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" , $row['date'] , " " ;  echo "<br>";


?>
<br>
	<center>	<button onClick="window.print()">Print</button></center>
