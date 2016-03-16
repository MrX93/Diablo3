<div id="slideshow" class="fadein"  >
	<?php
	foreach ($slideshow as $sld) {
		echo "<img src=\"$base_url/pictures/slideshow/" . $sld['putanja'] . "\" />";
	}
	?>	
</div>
<div id="content-wrapper">

	<div id="left">
		<?php foreach ($slika_video as $slvd) {
			echo $slvd['tekst'];
		} ?>
	</div>
	<div id="right">
    <iframe width="490" height="350" src="http://www.youtube.com/embed/<?php echo $slvd['video']; ?>" frameborder="0" allowfullscreen></iframe>
	</div>			
	<div class="clear"> </div>
</div>

<div id="content-wrapper1"> 
	<?php
	foreach ($pocetna_likovi as $pl) {
		?>
		<div id="<?php echo $pl['id_diva']; ?>">
			<img src="pictures/<?php echo $pl['dir_za_smestanje_slika']; ?>/<?php echo $pl['slika_lik_pocetna']; ?>" alt="<?php echo $pl['ime_lika'] ?>" />
	<?php echo $pl['tekst_pocetna']; ?> <a href="lik/vrsta/<?php echo $pl['id_lika'] ?>" title="<?php echo $pl['ime_lika'] ?>" >(saznaj više) </br> </a></p>
		</div>

<?php } ?>
	<div class="clear"></div>

</div>