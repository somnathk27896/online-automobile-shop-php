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

<html><head><title>Ferrari California</title>
<style type="text/css">
body{
background-image:url(background/bg.jpg)}
.buy{
width:150px;
height:50px;
font-size:36px;
background-color:#FF0000;
}
*{
margin:0px;
padding:0px;
}
.container ul{
list-style:none;
}
.container ul li{
background-color:#666666;
width:120px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:#FFFFFF;
position:relative;
}
.container ul li a{
	text-decoration: none;
	color:#000000;
}


.container ul li:hover{
background-color:#999999;
}

.container ul ul{
display:none;
}
.container ul li:hover > ul{
display:block;
}
.container ul ul ul{
margin-left:120px;
top:0px;
position:absolute;
}
</style>

</head><body vlink="red" alink="red" background="background\bg.jpg" link="red">

<table WIDTH="100%">
<tr>
<td><center><b><h1><font face="Arial">Welcome To</font></h1></b></center></td>
</tr>
<tr>
<td bgcolor="black">
<center><b><font face="Bodoni MT Black"><font color="orange" size="+4">www.ItalicCars.com</font></b></center>
</td>
</tr>
<tr>
<td>

</td>
</tr>
</tr>
</table>
<div class="container">
<ul><b><h4>
	<li><a href="Welcome.html">HOME</a></li>

	<li><a>MODELS</a>
		<ul>
			<li><a>Alfa Romeo</a>
				<ul>
					<li><a href="alf_spider.php">Alfa Spider</a></li>
					<li><a href="alfa_gtv.php">Alfa Romeo GTV</a></li>
					<li><a href="alfa_mito.php">Alfa MiTO</a></li>
					<li><a href="alfa_sz_and_rz.php">Alfa Romeo SZ and RZ</a></li>
				</ul>
			</li>
			<li><a>Ferrari</a>
				<ul>
					<li><a href="ferrari_california.php">California</a></li>
					<li><a href="ferrari_f40.php">F40</a></li>
					<li><a href="ferrari_599gtb.php">599 GTB Fiorano</a></li>
					<li><a href="ferrari612.php">612 Scaglietti
</a></li>
				</ul>
			</li>
			<li><a>Fiat</a>
			<ul>
					<li><a href="fiat_stilo.php">Stilo</a></li>
					<li><a href="fiat_coupe.php">Coupe</a></li>
					<li><a href="fiat_punto.php">Punto</a></li>
					<li><a href="fiat_linea.php">Linea</a></li>
				</ul>
			</li>
			<li><a>Lancia</a>
			<ul>
					<li><a href="lancia_dedra.php">Dedra</a></li>
					<li><a href="lancia_deltas4.php">Delta S4</a></li>
					<li><a href="lancia_delta2008.php">Delta(2008+)</a></li>
					<li><a href="lancia_flamania.php">Flamania</a></li>
				</ul>
			</li>
		</ul>
	
	
	</li>
	<li><a href="wallpapers.html">GALLERY</a></li>

	<li><a>HISTORY</a>
		<ul>
			<li><a href="alfa_history.html">Alfa Romeo</a></li>
			<li><a  href="ferrari_history.html">Ferrari</a></li>
			<li><a href="fiat_history.html">Fiat</a></li>
			<li><a href="lancia_history.html">Lancia</a></li>
		</ul>	
	</li>
	<li><a href="logout.php">LOGOUT</a></li>
	<li><a>ABOUT</a></li>
</b></h4>
</ul></div><br><br><br><br><br>

<form action="book.php" method="get">
<b><font size="+3" color="red" face="Arial">Ferrari California</font></b><br><br><br>

<img src="logo\california_3.jpg" alt="Ferrari California" width="450" align="right" border="1" height="200"><hr>

<p><b><font size="+2" color="red" face="Arial">Technical Details</font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Engine</font></td>
<td><font face="Arial">4300cc V8 with 460bhp @ 7,500rpm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">Carbon-ceramic discs by Brembo</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Transmission</font></td>
<td><font face="Arial">7-speed with dual-clutch</font>
</td>
</tr>
</tbody></table><br><br>
<center><input type="submit" value="BUY" class="buy"/></font></b>
<input type="hidden" value="ferrari_california" name="mname">
<input type="hidden" value="60 Lacs" name="price">

</form>
</p><p>
</p><hr>
</body></html>