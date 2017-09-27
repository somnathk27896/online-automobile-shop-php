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

<html><head>
<title>Fiat Coupé</title>
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
</head><body alink="red" background="background\bg.jpg" bgcolor="red" link="red" vlink="red">

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
</ul></div><br><br><br><br><br><br><br>

<b><font color="red" face="Arial" size="+3">Fiat Coupé</font></b><br><br><br><br><br>
<p><form action="book.php" method="get">
<table border="0" cellpadding="0" cellspacing="0" width="91%">
<tbody><tr>
<td><img src="logo\coupe2xx.jpg" alt="Fiat Coupé" border="1" height="200" width="347"></td>
<td>
<div align="right"><img src="logo\coupe1xx.jpg" alt="Fiat Coupé" border="1" height="200" width="324"></div>
</td>
</tr>
</tbody></table>
</p><p>
</p><hr>
<p><b><font color="red" face="Arial" size="+2">Technical Details
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="BUY" class="buy"/></font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">transverse engine at front with front wheel drive</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Engines</font></td>
<td><font face="Arial">1995cc (84x90mm) 4 cylinder in-line dohc 16V turbo with 195bhp @ 5,500rpm
<br>1747cc (82x82.7mm) 4 cylinder in-line dohc 16V with 130bhp @ 6,300rpm 
<br>1995cc (84x90mm) 4 cylinder in-line dohc 16V with 142bhp @ 6,000rpm
<br>1998cc (82x75.65mm) 5 cylinder in-line dohc 20V with 147bhp
<br>1998cc (82x75.65mm) 5 cylinder in-line dohc 20V turbo with 220bhp @ 5,750rpm
</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front : MacPherson strut with telescopic dampers and coil springs plus anti-roll bar
<br>rear :&nbsp; independent with telescopic dampers and coil springs plus anti-roll bar
<br>wheelbase : 2540mm
<br>track (front/rear) : 1483mm/1468mm (front : 1491mm on 20V turbo)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">front : discs, ventilated, diameter 284mm (305mm on 20V turbo)
<br>rear : discs, diameter 240mm
<br>handbrake operating on the rear via a cable</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">5 or 6 speed manual</font></td>
</tr>
<tr>
<td><font face="Arial">Steering</font></td>
<td><font face="Arial">Rack and Pinion with power assisstance</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Kerb weight</font></td>
<td><font face="Arial">original 1995cc 16V : 1250kg
<br>1997 20V turbo : 1310kg ; distribution front/rear : 67.2%/32.8%
<br>1997 1.8 16v : 1180kg</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Dimensions</font></td>
<td><font face="Arial">20v turbo</font></td>
</tr>

</tbody></table>

</p><p>
</p><hr>

<input type="hidden" value="fiat_coupe" name="mname">
<input type="hidden" value="51 Lacs" name="price">


</form>
<hr>
</body></html>