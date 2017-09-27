<?php
	session_start();
if($_SESSION["name"]=="")
{
?>
<script type="text/javascript">
window.location="admin.php";
</script>
<?php
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<big><big><big><big>WELCOME</big></big></big></big><h1><?php echo $_SESSION["name"];?></h1><br>
<a href="emp.php">MANAGE EMPLOEES</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="customer.php">MANAGE CUSTOMERS</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="orders.php">MANAGE ORDERS</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="supplier.php">MANAGE SUPPLIER</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="vehicals.php">MANAGE VEHICALS</a>&nbsp;&nbsp;&nbsp;&nbsp;


<a href="logout.php">logout</a>

</body>
</html>
