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
<title>Lancia Flaminia</title>
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
</head><body  vlink="red" alink="red" background="background\bg.jpg" link="red">

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
<b><font size="+3" color="red" face="Arial">Lancia Flaminia</font></b><br><br><br><br>
<img src="logo\flaminiasport_200.jpg" alt="Lancia Flaminia Sport" width="363" align="left" border="1" height="200"><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<p><b><font size="+2" color="red" face="Arial">Technical Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="BUY" class="buy"/></font></b>
<br>&nbsp;
<table border="0" cellpadding="8" cellspacing="0">
<tbody><tr>
<td valign="top"><font face="Arial">Driveline</font></td>
<td><font face="Arial">longitudinal engine at front with rear wheel drive</font>
<br><font face="Arial">transmission mounted at rear</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Engines</font></td>
<td><font face="Arial">2458cc (80x81.5mm) 60� V6 ohv with 102-140bhp depending on variant (see above)</font>
<br><font face="Arial">2775cc (85x81.5mm) 60� V6 ohv with 129-152bhp depending on variant (see above)</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Suspension&nbsp;</font></td>
<td><font face="Arial">front : double wishbone with coil springs and telescopic dampers plus anti-roll bar</font>
<br><font face="Arial">rear : independent with semi-trailing links, coil springs and telescopic dampers (early cars)</font>
<br><font face="Arial">rear : de Dion with leaf springs and telescopic dampers</font>
<br><font face="Arial">wheelbase : 2870mm (Berlina); 2750mm (Coupe); 2520mm (GT, Sport &amp; Convertible); 2600mm (GTL)</font>
<br><font face="Arial">front track : 1368mm</font>
<br><font face="Arial">rear track : 1370mm</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Brakes</font></td>
<td><font face="Arial">discs on all four wheels (drums on all four wheels on first 500 cars)</font>
<br><font face="Arial">handbrake operating on the rear</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Gearbox</font></td>
<td><font face="Arial">4 speed manual</font>
<br><font face="Arial">Semiautomatic 'Saxomat' unit available in some models</font></td>
</tr>
<tr>
<td><font face="Arial">Steering</font></td>
<td><font face="Arial">Worm and sector</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial">Kerb weight</font></td>
<td><font face="Arial">1430kg (early 2.5 berlina); 1560kg (2.8 berlina)</font>
<br><font face="Arial">1490kg (early 2.5 coupe); 1320kg (early GT); 1370kg (early convertible); 1260kg (early sport)</font></td>
</tr>
</tbody></table>
<input type="hidden" value="lancia_flamania" name="mname">
<input type="hidden" value="1.5 Cr" name="price">

</form>
</p><p>
</p><hr>
</body></html>