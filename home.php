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
<head><title>Welcome to www.Cars.com</title>
<style  type="text/css">
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

</head>
<body background="background\bg.jpg">


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
			<li><a href="ferrari_history.html">Ferrari</a></li>
			<li><a href="fiat_history.html">Fiat</a></li>
			<li><a href="lancia_history.html">Lancia</a></li>
		</ul>	
	</li>
	<li><a href="logout.php">LOGOUT</a></li>
	<li><a href="aboutus.php">ABOUTUS</a></li>
	<li><a href="contactus.php">CONTACT US</a></li>
	<li><a href="feedback.php">FEEDBACK</a></li>
</b></h4>
</ul></div><br><br><br><br><br>

<p><center>
<font face="Arial">This site aims to provide information on all Italian developed and built cars.</font></center>
<p align="center"><center><font face="Arial">There are individual sections on Alfa Romeo, Ferrari, Fiat &amp; Lancia section.</center> <br/><br/>
For each company there is a history, details of their involvement in motorsport (past &amp; present),  concept cars, events, links plus extensive model specific information.</font><br/><br/>
<p align="center"><center><font face="Arial">There are 4 Alfa Romeo, 4 Fiat, 4 Lancia, 4 Ferrari  model pages.</font></center>

<p align="center"><center><font face="Arial">For each model you will find both technical and historical information as well as many illustrations and more.</font></center>



<p align="center"><font face="Arial"></font></p>
<p align="center"><b><font face="Arial" size="+1"><br><br><br></font></b>
<br/>
<br/>
<table BORDER=0 CELLSPACING=0 CELLPADDING=0 COLS=5 WIDTH="100%" >
<tr ALIGN=CENTER VALIGN=CENTER>
<td><img SRC="logo\alfa_romeo.gif" border="0" height=76 width=77></a></td>
<td><img SRC="logo\ferrari.gif" border="0" height=76 width=44></a></td>
<td><img SRC="logo\fiat.gif" border="0" height=76 width=76></a></td>
<td><img SRC="logo\lancia.gif" border="0" height=79 width=77></a></td>

</tr>
</table>
<br/>
<hr size="5" color=gray>
<br><center><font face="Arial" size=+1>Including the new Alfa MiTo and 8C Spider, Lancia Delta and Ferrari California</font></center><br/>
</body>

</html>