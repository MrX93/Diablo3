<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	<title>DiabloIII</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Diablo III je igrica koju je napravio Blizard.Jedna od najboljih RPG igara.
	Proizvedena je 2012 i ona je treci nastavak Diablo serije." />
	<meta name="keywords" content="Diablo"/>
	<link rel="stylesheet" href="<?php echo $base_url ;?>/css/stil.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $base_url ;?>/css/stil-page.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $base_url ;?>/css/colorbox.css" type="text/css"/>
         
        <script type="text/javascript" src="<?php echo $base_url ;?>/js/query.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/jquery-1.4.min.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/galerija.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/izmena.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/jquery.colorbox-min.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/pr_rg_an.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/meni.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/meniFiksiran.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/slideshow.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/regularniIzrazi.js"> </script>
	<script type="text/javascript" src="<?php echo $base_url ;?>/js/pretraga.js"> </script>
	

	
      
    </head>
    <body>
        <div id="wrapper">

<div id="header">  
									
    <div id="logo">
        <a href="<?php echo $base_url ?>" title="Početna strana"> <img src="<?php  echo base_url() ;?>pictures/slicice/diablologo1.png"/> </a>
    </div>	
    <?php if(!isset($session['uloga'])) {  ?>					
    <div id="login">
        
    </div>
    
    <div id="loginforma" > 
	<form method="POST" action="<?php echo $base_url ?>logovanje/login" name="loginForm" >
            <div id="tekst">E-mail: </div>  <input type="text" id="E-mail" name="E-mail" />
		<span id="grEmail">  </span> 
                
            <div id="tekst1">Šifra: </div> <input type="password" id="Sifra" name="Sifra" />
		<span id="grSifra">  </span> 
                
            <input type="checkbox" id="zapamti" name="zapamti" /> <div id="tekst2">Zapamti me </div>
		<span id="grCheck">  </span>
                
            <input type="submit" id="prijava" name="prijava"  value="Prijavi se" title="Prijavi se"/>
            
            <input type="reset" id="resetuj1" name="resetuj1" value="Resetuj" title="Resetuj" onClick="ponisti()" />
	</form>
    </div> 
    <?php } else { ?>
	<div id="login1"> 
            <a href='<?php echo $base_url; ?>logovanje/logout'><?php echo $session['nadimak'];?> (Odjavi se)</a> 
	</div>
    <?php   }  ?>
    							
	<div id="anketa"> 
            
	</div>
	<div id="anketaforma">
            <div id="anketa1">
                        <?php echo form_open('',$form_anketa); ?>
                        <table>
                            <?php foreach($anketa_pitanje as $pitanje) { ?>
                            <tr><th><?php echo $pitanje['Naziv']; ?></th></tr>
                            <?php } ?>
                            <?php foreach($anketa_odgovori as $odgovor){ ?>
                            <tr><td><?php echo form_radio('odgovor',$odgovor['idAnketaOdgovori']); echo $odgovor['Odgovor'];  ?></td></tr>
                            <?php }; ?>
                            <tr><td><?php echo form_button($anketaSbt,'Glasaj'); ?></td></tr>
                        </table>
                        <?php echo form_close(); ?>
                    </div>
	</div>
							
	<div id="search-box">
            <input id="search" name="search" type="text" maxlength="30" />
            <input id="search-button" name="search-button" type="button" title="Pretraži" value="pretrazi" onClick="pretraga();" />
	</div>	
	<div id="ispisOkvir">
            <div id="ispis"> </div>
            <div id="Nazad" onClick="naz();"> Nazad </div>
	</div>	
</div>