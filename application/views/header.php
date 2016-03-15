<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>DiabloIII</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Diablo III je igrica koju je napravio Blizard.Jedna od najboljih RPG igara.
					Proizvedena je 2012 i ona je treci nastavak Diablo serije." />
		<meta name="keywords" content="Diablo"/>
		<link href="<?php echo $base_url; ?>../../css/stil-page.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo $base_url; ?>../../css/colorbox.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
		
		<script src="<?php echo $base_url; ?>js/jquery-2.2.1.min.js"></script>
		
			<script type="text/javascript" src="<?php echo $base_url; ?>js/galerija.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/izmena.js"></script>	
			<script type="text/javascript" src="<?php echo $base_url; ?>js/pr_rg_an.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/meni.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/meniFiksiran.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/slideshow.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/regularniIzrazi.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/admin_panel.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/izmenaBrisanje.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>js/jquery.colorbox-min.js"></script>
			<script>
				$(document).ready(function () {
					$("#anketaSbt").click(function () {
						var Odgovor = $("input[name=odgovor]:checked", "#form_anketa").val();

						$.ajax({
							type: "POST",
							url: "<?php echo base_url(); ?>anketa/anketaRezultat",
							dataType: "json",
							data: {odgovor: Odgovor},
							success: function (response) {
								$('#anketaforma').text("");
								$('#anketaforma').append(response);
							}
						});
					});
				});
			</script>

	</head>
	<body>
		<div id="wrapper">

			<div id="header">  

				<div id="logo">
					<a href="<?php echo base_url() ?>" title="Početna strana"> <img src="<?php echo base_url(); ?>pictures/slicice/diablologo1.png"/> </a>
				</div>	
				<?php if (!isset($session['uloga'])) { ?>

					<div id="login">
						<a><i>Prijavi se </i></a> 
					</div>


					<div id="loginforma" > 
						<form method="POST" action="<?php echo $base_url ?>logovanje/login" name="loginForm" >
							<div id="tekst">E-mail: </div>  <input type="text" id="E-mail" name="E-mail" />
							<span id="grEmail">  </span> 

							<div id="tekst1">Šifra: </div> <input type="password" id="Sifra" name="Sifra" />
							<span id="grSifra">  </span> 

							<input type="checkbox" id="zapamti" name="zapamti" /> <div id="tekst2">Zapamti me </div>
							<span id="grCheck">  </span>

							<input type="button" id="prijava" name="prijava" onclick="provera1()" value="Prijavi se" title="Prijavi se"/>

							<input type="reset" id="resetuj1" name="resetuj1" value="Resetuj" title="Resetuj" onClick="ponisti()" />
						</form>
					</div> 
				<?php } else { ?>
					<div id="login"> 
						<a href='<?php echo $base_url; ?>logovanje/logout'><?php echo $session['nadimak']; ?> (Odjavi se)</a> 
						<?php if ($this->session->userdata('uloga') == 1) { ?>
							<a href='<?php echo $base_url; ?>admin/admin_panel' style='color:blue; font-size:20px;'> Admin Panel </a>
						<?php } ?>
					</div>
				<?php } ?>

				<div id="register"> <a>Registruj se</a>
				</div>
				<div id="registerforma"> 
					<?php
					$forma_ats = array('name' => 'reg_form');
					$input_nadimak = array('name' => 'nadimak', 'id' => 'Nadimak');
					$input_mail = array('name' => 'rE-mail', 'id' => 'rE-mail');
					$password = array('name' => 'rsifra', 'id' => 'rSifra');
					$Rpassword = array('name' => 'rEponoviSifru', 'id' => 'rPonoviSifru');
					$ckeckbox = array('name' => 'uslov', 'id' => 'uslov');
					$button = array('name' => 'nalog', 'id' => 'nalog', 'onClick' => 'provera()', 'content' => 'Napravi besplatan nalog', 'title' => 'Napravi besplatan nalog');
					$resetuj = array('name' => 'resetuj', 'id' => 'resetuj', 'value' => 'Resetuj', 'title' => 'Resetuj');

					print form_open('registracija/registruj', $forma_ats);
					?>
					<div id="rtekst">Nadimak:</div> <?php echo form_input($input_nadimak) ?>
					<span id="naGreska">  </span>	
					<div id="rtekst2" >E-mail:</div><?php echo form_input($input_mail) ?>
					<span id="emGreska">  </span>
					<div id="rtekst3">Šifra:</div> <?php echo form_password($password) ?>
					<span id="siGreska">  </span>	
					<div id="rtekst4">Ponovi Šifru:</div> <?php echo form_password($Rpassword) ?>
					<?php echo form_checkbox($ckeckbox) ?><div id="tekst5">Prihvatam uslove korišćenja <br/> i zaštitu ličnih podataka </div>
					<span id="ceGreska">  </span>

					<?php
					echo form_button($button);
					echo form_reset($resetuj);
					print form_close();
					?>

				</div> 

				<div id="anketa"> 
					<a>Anketa</a>
				</div>
				<div id="anketaforma">

						<?php echo form_open('', $form_anketa); ?>

						<?php foreach ($anketa_pitanje as $pitanje) { ?>
							<?php echo $pitanje['Naziv']; ?> <br/>
						<?php
						}
						foreach ($anketa_odgovori as $odgovor) {
							$radio = array('name' => 'odgovor', 'id' => $odgovor['Odgovor'], 'value' => $odgovor['idAnketaOdgovori'],'class'=>'radio');
							$radioC = array('name' => 'odgovor', 'id' => $odgovor['Odgovor'], 'value' => $odgovor['idAnketaOdgovori'], 'checked' => TRUE,'class'=>'radio');
							if ($odgovor['idAnketaOdgovori'] == 1) {
								echo form_radio($radioC);
							?> <label for="<?php	echo $odgovor['Odgovor'];
							?>"> <span></span> <?php	echo $odgovor['Odgovor'];
							?></label> <br/>
								<?php
							} else {
								?>	
								<?php
								echo form_radio($radio);
								?> <label for="<?php	echo $odgovor['Odgovor'];
								?>"><span></span> <?php	echo $odgovor['Odgovor'];
							?></label> <br/>
							<?php }
						};
						?>
<?php echo form_button($anketaSbt, 'Glasaj'); ?>

<?php echo form_close(); ?>
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