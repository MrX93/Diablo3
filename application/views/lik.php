
<div id="slideshow" class="fadein"  >
	<?php
	foreach ($slideshow_lik as $sld) {
		echo "<img src=\"$base_url/pictures/slideshow/" . $sld['putanja'] . "\" />";
	}
	?>	
</div>
<div id="content-wrapper">

	<div id="left">
		<?php
		foreach ($slika_video_lik as $slvd) {
			echo $slvd['tekst'];
		}
		?>
	</div>
	<div id="right">
    <iframe width="490" height="350" src="http://www.youtube.com/embed/<?php echo $slvd['video']; ?>" frameborder="0" allowfullscreen></iframe>
	</div>			
	<div class="clear"> </div>
</div>

<div id="galerija">
	<h2>Galerija slika</h2>
	<?php foreach ($query as $galerija_sl) { ?>
		<?php foreach ($galerija_direktorijum as $galerija_dir) { ?>
			<div class="character-picture">
				<?php
				$thumb = imagecreatetruecolor(300, 160);
				$slika = imagecreatefromjpeg("pictures/" . $galerija_dir['dir_za_smestanje_slika'] . "/" . $galerija_sl['veca_slika']);
				imagecopyresampled($thumb, $slika, 0, 0, 0, 0, 300, 160, 920, 518);
				imagejpeg($thumb, "pictures/" . $galerija_dir['dir_za_smestanje_slika'] . "/manja_slika/" . $galerija_sl['veca_slika'], 100);
				imagedestroy($thumb);
				imagedestroy($slika);
				?>
				<a href="<?php echo $base_url; ?>pictures/<?php echo $galerija_dir['dir_za_smestanje_slika']; ?>/<?php echo $galerija_sl['veca_slika']; ?>" rel="celeb"><img src="<?php echo $base_url; ?>pictures/<?php echo $galerija_dir['dir_za_smestanje_slika']; ?>/manja_slika/<?php echo $galerija_sl['veca_slika']; ?>" /> </a>
			</div>
		<?php } ?>	
	<?php } ?>	

	<div id="stranicenje">
		<?php
		echo $links;
		?>
	</div>
</div>	

<div class="clear"></div>


