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
<title>Information on the Ferrari 612 Scaglietti</title>
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
<form action="book.php" method="get">
</ul></div><br><br><br><br><br>

<b><font size="+3" color="red" face="Arial">Ferrari 612 Scaglietti</font></b>
<p><img src="logo\612_2.jpg" alt="Ferrari 612 Scaglietti" width="391" border="1" height="200"><align="right"><img src="logo\612_3.jpg" alt="Ferrari 612 Scaglietti cockpit" width="381" align="right" border="1" height="200"></div>
</td></tr>
</tbody></table>
<hr>
<input type="submit" value="BUY" class="buy"/>
<p><b><font size="+2" color="red" face="Arial"><br>Technical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Engine</font></td>
<td><font face="Arial">5748cc 65deg V12 48v dohc (per bank) with 533bhp @ 7,250rpm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension</font></td>
<td><font face="Arial">front : double wishbones and coil springs
<br>rear : double wishbones and coil springs
<br>Adaptive damping with electronic control.
<br>8x18 (front) and 10x19 (rear) wheels</font>
</td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">ventilated discs all round with Brembo callipers, servo assistance and ABS</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Transmission</font></td>
<td><font face="Arial">6 speed manual, hydraulically actuated with steering-wheel control optional</font>
</td>
</tr>
<tr>
<td valign="top"><font face="Arial">Steering</font></td>
<td><font face="Arial">rack and pinion with power assistance.</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Weight</font></td>
<td><font face="Arial">1,840kg</font>
</td>
</tr>
</tbody></table>
</p><p>
</p><hr>

<hr>

<p><b><font size="+2" color="red" face="Arial">Performance</font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td><font face="Arial">model</font></td>
<td><font face="Arial">max speed</font></td>
<td><font face="Arial">0-100 km/h</font></td>
<td><font face="Arial">standing km</font></td>
</tr>
<tr>
<td><font face="Arial">612 Scaglietti</font></td>
<td><font face="Arial">320 km/h</font></td>
<td><font face="Arial">4.2 sec</font></td>
<td><font face="Arial">22 sec</font></td>
</tr>
</tbody></table>

</p><p>
</p><hr>
<img src="logo\612_4.jpg" alt="Ferrari 612 Scaglietti">
<hr>

<input type="hidden" value="ferrari612" name="mname">
<input type="hidden" value="42 Lacs" name="price">

</form>
</body></html>