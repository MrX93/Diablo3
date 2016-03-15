<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
	<head> 
		<title>DiabloIII</title>
		<link rel="stylesheet" href="stil.css" type="text/css"/>
		<script type="text/javascript" src="kodovi/query.js"> </script>
		<script type="text/javascript" src="kodovi/pr_rg_an.js"> </script>
		<script type="text/javascript" src="kodovi/meni.js"> </script>
		<script type="text/javascript" src="kodovi/meniFiksiran.js"> </script>
		<script type="text/javascript" src="kodovi/slideshow.js"> </script>
		<script type="text/javascript" src="kodovi/regularniIzrazi.js"> </script>
		
		
	</head>
	<body>
		<div id="wrapper">
				
					<div id="header">  
									
						<div id="logo">
							<a href="index.html" title="Početna strana"> <img src="pictures/slicice/diablologo1.png"/> </a>
						</div>	
						
						<div id="login"> <a><i>Prijavi se </i></a> 
						</div>
						<div id="loginforma"> 
							<form method="get">
								<div id="tekst">E-mail: </div>  <input type="text" id="E-mail" name="E-mail" />
								<span id="grEmail">  </span> 
								<div id="tekst1">šifra: </div> <input type="password" id="Sifra" name="šifra" />
								<span id="grSifra">  </span> 
								<input type="checkbox" id="zapamti" name="zapamti" /> <div id="tekst2">Zapamti me </div>
								<span id="grCheck">  </span>
								<input type="button" id="prijava" name="prijava"  value="Prijavi se" title="Prijavi se" onClick="provera1();"/>
								<input type="reset" id="resetuj1" name="resetuj1" value="Resetuj" title="Resetuj" onClick="ponisti();" />
							</form>
						</div>  
							
						<div id="register"> <a><i>Registruj se </i></a>
						</div>
						<div id="registerforma"> 
							<form method="get">						
								<div id="rtekst">Nadimak:</div>  <input type="text" id="Nadimak" name="nadimak"  /> 
								<span id="naGreska">  </span>								
								<div id="rtekst2" >E-mail:</div> <input type="text" id="rE-mail" name="rE-mail" />
								<span id="emGreska">  </span>
								<div id="rtekst3">Šifra:</div> <input type="password" id="rSifra" name="ršifra" /> 	
								<span id="siGreska">  </span>								
								<div id="rtekst4">Ponovi Šifru:</div> <input type="password" id="rPonoviSifru" name="rponoviŠifru" />				
								<input type="checkbox" id="uslov" name="uslov" /> <div id="tekst5">Prihvatam uslove korišćenja <br/> i zaštitu ličnih podataka </div>
								<span id="ceGreska">  </span>
								<input type="button" id="nalog" name="nalog"   value="Napravi besplatan nalog" title="Napravi besplatan nalog" onClick="provera();" />
								<input type="reset" id="resetuj" name="resetuj" value="Resetuj" title="Resetuj" onClick="ponisti();" />
							</form>
						</div>  
							
						
							
						<div id="search-box">
							<form method="get">
								<input id="search" name="search" type="text" maxlength="30" />
								<input id="search-button" name="search-button" type="button" title="Pretraži" value="pretrazi"  />
							</form>
						</div>			
						</div>	
						<div id="nav" >
								<ul> 									 
										<li class="active"><a href="index.html" title="Početna">Početna</a></li> 
										<li><a title="Likovi" id="lop" style="cursor:pointer;" >Likovi</a></li> 	
											<ul id="drop"> 
												<li><a href="varvarin.html" title="Varvarin">Varvarin</a></li> 
												<li><a href="monah.html" title="Monah">Monah</a></li>
												<li><a href="lovac.html" title="Lovac na Demone">Lovac na Demone</a></li>   
												<li><a href="carobnjak.html" title="Čarobnjak">Čarobnjak</a></li> 
												<li><a href="vrac.html" title="Vrač">Vrač</a></li>
											</ul>
										<li><a href="#" title="Likovi">Dokumentacija</a></li> 									
										<li><a href="o_autoru.html" title="O Autoru">O Autoru</a></li> 
										<li><a href="kontakt.html" title="Kontakt">Kontakt </a></li> 
										<li><a href="Baza_pretrage.html" title="Baza_pretrage">Baza pretrage</a></li>
								</ul> 
								
						</div>
		</div>
	<div id="wrapper2">
	<div id="artical">
		<h1>RSS</h1>
	
		  <xsl:for-each select="rss/channel/item"> <br/> <br/>			
	<p>  <h2><xsl:value-of select="title"/> </h2>		 
		  <xsl:value-of select="description"/> 
		  <a href="{link}"> Saznaj vise </a> </p>
		</xsl:for-each>
		</div>
	</div>
	
	</body>
</html>
</xsl:template>
</xsl:stylesheet>