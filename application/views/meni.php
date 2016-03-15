<div id="nav" >
	<ul> 	
		<?php foreach ($meni as $link) { ?>
			<?php if ($link['naziv'] != 'Likovi' && $link['naziv'] != 'Dokumentacija') { ?>
				<li> <a href="<?php echo $base_url . $link['link']; ?>"><?php echo $link['naziv'] ?></a></li>
			<?php } ?>

			<?php if ($link['naziv'] == 'Dokumentacija') { ?>
				<li> <a href="<?php echo $base_url . $link['link']; ?>" target="_blank"><?php echo $link['naziv'] ?></a></li>
			<?php } ?>

			<?php if ($link['podmeni'] == 1) { ?>
				<li> <a title="<?php echo $base_url . $link['naziv'] ?>" style="cursor:pointer;" id="lop"><?php echo $link['naziv']; ?></a>
					<ul id="drop">	
						<?php foreach ($podmeni as $podlink) { ?>			
							<li><a href="<?php echo $base_url; ?>lik/vrsta/<?php echo $podlink['id_lika'] ?>" title="<?php echo $podlink['podmeni_naziv'] ?>" > <?php echo $podlink['podmeni_naziv'] ?> </a></li>
						<?php } ?>
					</ul>
				</li>
			<?php }
		} ?> 	
	</ul>
</div>