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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<br>
<h1>
Address

</h1>
<pre><h2>
Royal Apartment, B- wing,202
C.B.D. BELAPUR
NAVI MUMBAI - 400614</h2>
</pre><h1>
Contact NO.
</h1>
<pre><h2>

8286119230
9856985698
</h2></pre>
</body>
</html>
