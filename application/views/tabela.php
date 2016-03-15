<table id="admin_tabela" >
	<?php
	if (isset($view)):
		switch ($view) {
			case 'galerija':
				?>
				<thead>
					<tr>
						<th>slika</th>
						<th>id_lika</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :
						if (isset($id) && $id == $red->id_slike):

							$attributes = array('id' => 'forma_izmena',);
							$veca_slika = array('name' => 'veca_slika', 'id' => 'veca_slika', 'class' => 'tb_forma_polje', 'value' => $red->veca_slika, 'form'=>'forma_izmena');
							$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'value' => $red->id_lika, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_slike', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'galerija', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($veca_slika); ?></td>
								<td><?php echo form_input($id_lika); ?></td>	
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<td><?php echo $red->nadimak; ?></td>
								<td>
									<button id="<?php echo $red->id_slike; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_slike; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('galerija');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							<?php
							echo form_close();
						else:
							?>	
							<tr>
								<td><?php echo $red->veca_slika; ?></td>
								<td><?php echo $red->id_lika; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_slike; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('galerija', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_slike; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('galerija',this.id,'id_slike');" > <i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>			
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$veca_slika = array('name' => 'veca_slika', 'id' => 'veca_slika', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'galerija', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($veca_slika); ?></td>
						<td><?php echo form_input($id_lika); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
	  </table>
				<?php
				break;

			case 'korisnici':
				?>
				<thead>
					<tr>
						<th>nadimak</th>
						<th>meil</th>
						<th>sifra</th>
						<th>id_uloga</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_korisnik):

							$attributes = array('id' => 'forma_izmena');
							$nadimak = array('name' => 'nadimak', 'id' => 'nadimak', 'class' => 'tb_forma_polje', 'value' => $red->nadimak, 'form'=>'forma_izmena');
							$meil = array('name' => 'meil', 'id' => 'meil', 'class' => 'tb_forma_polje', 'value' => $red->meil, 'form'=>'forma_izmena');
							$sifra = array('name' => 'sifra', 'id' => 'sifra', 'class' => 'tb_forma_polje', 'value' => $red->sifra, 'form'=>'forma_izmena');
							$id_uloga = array('name' => 'id_uloga', 'id' => 'id_uloga', 'class' => 'tb_forma_polje', 'value' => $red->id_uloga, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_korisnik', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'korisnici', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($nadimak); ?></td>
								<td><?php echo form_input($meil); ?></td>
								<td><?php echo form_input($sifra); ?></td>
								<td><?php echo form_input($id_uloga); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->izmenio; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('korisnici');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->nadimak; ?></td>
								<td><?php echo $red->meil; ?></td>
								<td><?php echo $red->sifra; ?></td>
								<td><?php echo $red->id_uloga; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->izmenio; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('korisnici', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button> 
								</td>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('korisnici', this.id,'id_korisnik');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$nadimak = array('name' => 'nadimak', 'id' => 'nadimak', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$meil = array('name' => 'meil', 'id' => 'meil', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$sifra = array('name' => 'sifra', 'id' => 'sifra', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$id_uloga = array('name' => 'id_uloga', 'id' => 'id_uloga', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'korisnici', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($nadimak); ?></td>
						<td><?php echo form_input($meil); ?></td>
						<td><?php echo form_input($sifra); ?></td>
						<td><?php echo form_input($id_uloga); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;

			case 'anketa':
				?>
				<thead>
					<tr>
						<th>naziv</th>
						<th>aktivna</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->idAnketa):

							$attributes = array('id' => 'forma_izmena');
							$naziv = array('name' => 'naziv', 'id' => 'naziv', 'class' => 'forma_polje', 'value' => $red->Naziv, 'form'=>'forma_izmena');
							$aktivna = array('name' => 'aktivna', 'id' => 'aktivna', 'class' => 'tb_forma_polje', 'value' => $red->Aktivna, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'idAnketa', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'anketa', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($naziv); ?></td>
								<td><?php echo form_input($aktivna); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->idAnketa; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->idAnketa; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('anketa');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>		
							<tr>
								<td><?php echo $red->Naziv; ?></td>
								<td><?php echo $red->Aktivna; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td> 
									<button id="<?php echo $red->idAnketa; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('anketa', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button> 
								</td>
								<td>
									<button id="<?php echo $red->idAnketa; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('anketa', this.id,'idAnketa');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$naziv = array('name' => 'naziv', 'id' => 'naziv', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$aktivna = array('name' => 'aktivna', 'id' => 'aktivna', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'anketa', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($naziv); ?></td>
						<td><?php echo form_input($aktivna); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;

			case 'anketaodgovori':
				?>
				<thead>
					<tr>
						<th>odgovor</th>
						<th>rezultat</th>
						<th>id_anketa</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->idAnketaOdgovori):

							$attributes = array('id' => 'forma_izmena');
							$odgovor = array('name' => 'odgovor', 'id' => 'odgovor', 'class' => 'tb_forma_polje', 'value' => $red->Odgovor, 'form'=>'forma_izmena');
							$rezultat = array('name' => 'rezultat', 'id' => 'rezultat', 'class' => 'tb_forma_polje', 'value' => $red->Rezultat, 'form'=>'forma_izmena');
							$id_anketa = array('name' => 'idAnketa', 'id' => 'idAnketa', 'class' => 'tb_forma_polje', 'value' => $red->idAnketa, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'idAnketaOdgovori', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'anketaodgovori', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($odgovor); ?></td>
								<td><?php echo form_input($rezultat); ?></td>
								<td><?php echo form_input($id_anketa); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('anketaodgovori');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->Odgovor; ?></td>
								<td><?php echo $red->Rezultat; ?></td>
								<td><?php echo $red->idAnketa; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td> 
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('anketaodgovori', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('anketaodgovori', this.id,'idAnketaOdgovori');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$odgovor = array('name' => 'odgovor', 'id' => 'odgovor', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$rezultat = array('name' => 'rezultat', 'id' => 'rezultat', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$id_anketa = array('name' => 'idAnketa', 'id' => 'idAnketa', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'anketaodgovori', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($odgovor); ?></td>
						<td><?php echo form_input($rezultat); ?></td>
						<td><?php echo form_input($id_anketa); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;

			case 'likovi':
				?>
				<thead>
					<tr>
						<th>ime_lika</th>
						<th>slika_lik_pocetna</th>
						<th>video</th>
						<th>dir_za_smestanje_slika</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_lika):

							$attributes = array('id' => 'forma_izmena');
							$ime_lika = array('name' => 'ime_lika', 'id' => 'ime_lika', 'class' => 'tb_forma_polje', 'value' => $red->ime_lika, 'form'=>'forma_izmena');
							$slika_lik_pocetna = array('name' => 'slika_lik_pocetna', 'id' => 'slika_lik_pocetna', 'class' => 'tb_forma_polje', 'value' => $red->slika_lik_pocetna, 'form'=>'forma_izmena');
							$video = array('name' => 'video', 'id' => 'video', 'class' => 'forma_polje', 'value' => $red->video, 'form'=>'forma_izmena');
							$dir_za_smestanje_slika = array('name' => 'dir_za_smestanje_slika', 'id' => 'dir_za_smestanje_slika', 'class' => 'tb_forma_polje', 'value' => $red->dir_za_smestanje_slika, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_lika', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'likovi', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($ime_lika); ?></td>
								<td><?php echo form_input($slika_lik_pocetna); ?></td>
								<td><?php echo form_input($video); ?></td>
								<td><?php echo form_input($dir_za_smestanje_slika); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_lika; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_lika; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('likovi');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->ime_lika; ?></td>
								<td><?php echo $red->slika_lik_pocetna; ?></td>
								<td><?php echo $red->video; ?></td>
								<td><?php echo $red->dir_za_smestanje_slika; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_lika; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('likovi', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button> 
								</td>
								<td>
									<button id="<?php echo $red->id_lika; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('likovi', this.id,'id_lika');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$ime_lika = array('name' => 'ime_lika', 'id' => 'ime_lika', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$slika_lik_pocetna = array('name' => 'slika_lik_pocetna', 'id' => 'slika_lik_pocetna', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$video = array('name' => 'video', 'id' => 'video', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$dir_za_smestanje_slika = array('name' => 'dir_za_smestanje_slika', 'id' => 'dir_za_smestanje_slika', 'class' => 'tb_forma_polje', 'form' => 'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'likovi', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($ime_lika); ?></td>
						<td><?php echo form_input($slika_lik_pocetna); ?></td>
						<td><?php echo form_input($video); ?></td>
						<td><?php echo form_input($dir_za_smestanje_slika); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
				</tbody>

				<?php
				break;

			case 'meni':
				?>
				<thead>
					<tr>
						<th>naziv</th>
						<th>link</th>
						<th>podmeni</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_meni):

							$attributes = array('id' => 'forma_izmena');
							$naziv = array('name' => 'naziv', 'id' => 'naziv', 'class' => 'forma_polje', 'value' => $red->naziv, 'form'=>'forma_izmena');
							$link = array('name' => 'link', 'id' => 'link', 'class' => 'tb_forma_polje', 'value' => $red->link, 'form'=>'forma_izmena');
							$podmeni = array('name' => 'podmeni', 'id' => 'podmeni', 'class' => 'tb_forma_polje', 'value' => $red->podmeni, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_meni', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'meni', 'form'=>'forma_izmena','type'=>'hidden');					
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($naziv); ?></td>
								<td><?php echo form_input($link); ?></td>
								<td><?php echo form_input($podmeni); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_meni; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_meni; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('meni');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->naziv; ?></td>
								<td><?php echo $red->link; ?></td>
								<td><?php echo $red->podmeni; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_meni; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('meni', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button> 
								</td>
								<td>
									<button id="<?php echo $red->id_meni; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('meni', this.id,'id_meni');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$naziv = array('name' => 'naziv', 'id' => 'naziv', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$link = array('name' => 'link', 'id' => 'link', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$podmeni = array('name' => 'podmeni', 'id' => 'podmeni', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'meni', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($naziv); ?></td>
						<td><?php echo form_input($link); ?></td>
						<td><?php echo form_input($podmeni); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
							<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>		
				</tbody>
				<?php
				break;

			case 'podmeni':
				?>
				<thead>
					<tr>
						<th>podmeni_naziv</th>
						<th>id_lika</th>
						<th>id_meni</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_podmeni):

							$attributes = array('id' => 'forma_izmena');
							$podmeni_naziv = array('name' => 'podmeni_naziv', 'id' => 'podmeni_naziv', 'class' => 'tb_forma_polje', 'value' => $red->podmeni_naziv, 'form'=>'forma_izmena');
							$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'value' => $red->id_lika, 'form'=>'forma_izmena');
							$id_meni = array('name' => 'id_meni', 'id' => 'id_meni', 'class' => 'tb_forma_polje', 'value' => $red->id_meni, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_podmeni', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'podmeni', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($podmeni_naziv); ?></td>
								<td><?php echo form_input($id_lika); ?></td>
								<td><?php echo form_input($id_meni); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_podmeni; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_podmeni; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('podmeni');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
									<?php echo form_input($prva_kolona); ?>
								  <?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->podmeni_naziv; ?></td>
								<td><?php echo $red->id_lika; ?></td>
								<td><?php echo $red->id_meni; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_podmeni; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('podmeni', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_podmeni; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('podmeni', this.id,'id_podmeni');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$podmeni_naziv = array('name' => 'podmeni_naziv', 'id' => 'podmeni_naziv', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$id_meni = array('name' => 'id_meni', 'id' => 'id_meni', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'podmeni', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($podmeni_naziv); ?></td>
						<td><?php echo form_input($id_lika); ?></td>
						<td><?php echo form_input($id_meni); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;

			case 'slajd':
				?>
				<thead>
					<tr>
						<th>putanja</th>
						<th>id_lika</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_slajda):

							$attributes = array('id' => 'forma_izmena');
							$putanja = array('name' => 'putanja', 'id' => 'putanja', 'class' => 'tb_forma_polje', 'value' => $red->putanja, 'form'=>'forma_izmena');
							$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'value' => $red->id_lika, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_slajda', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'slajd', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($putanja); ?></td>
								<td><?php echo form_input($id_lika); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_slajda; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_slajda; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('slajd');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>

							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->putanja; ?></td>
								<td><?php echo $red->id_lika; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td> 
									<button id="<?php echo $red->id_slajda; ?>" name="izmeni" class="admin_dugme"  onclick="ispisi_tabelu('slajd', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_slajda; ?>" name="obrisi" class="admin_dugme"  onclick="obrisi_red('slajd', this.id,'id_slajda');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$putanja = array('name' => 'putanja', 'id' => 'putanja', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$id_lika = array('name' => 'id_lika', 'id' => 'id_lika', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'slajd', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($putanja); ?></td>
						<td><?php echo form_input($id_lika); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;

			case 'uloga':
				?>
				<thead>
					<tr>
						<th>naziv_uloge</th>
						<th>vreme_unosa</th>
						<th>izmenio</th>
						<th>izmeni</th>
						<th>obrisi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($kolone as $red) :

						if (isset($id) && $id == $red->id_uloga):

							$attributes = array('id' => 'forma_izmena');
							$naziv_uloge = array('name' => 'naziv_uloge', 'id' => 'naziv_uloge', 'class' => 'tb_forma_polje', 'value' => $red->naziv_uloge, 'form'=>'forma_izmena');
							$prva_kolona=array('name' => 'prva_kolona', 'id' => 'prva_kolona','value'=>'id_uloga', 'form'=>'forma_izmena','type'=>'hidden');
							$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'uloga', 'form'=>'forma_izmena','type'=>'hidden');
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($naziv_uloge); ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td> </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>   </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_uloga; ?>" name="sacuvaj_izmenu" class="admin_dugme" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_uloga; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('uloga');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
								<?php echo form_input($prva_kolona); ?>
								<?php echo form_input($tabela); ?>
							</tr>
							<?php
							echo form_close();
						else:
							?>
							<tr>
								<td><?php echo $red->naziv_uloge; ?></td>
								<?php if ($red->vreme_unosa == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme_unosa); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->nadimak; ?></td>
								<?php } ?>
								<td> 
									<button id="<?php echo $red->id_uloga; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('uloga', this.id);" ><i class="fa fa-lg fa-pencil"></i>
									</button> 
								</td>
								<td>
									<button id="<?php echo $red->id_uloga; ?>" name="obrisi" class="admin_dugme" onclick="obrisi_red('uloga', this.id,'id_uloga');" ><i class="fa fa-lg fa-trash-o"></i>
									</button>
								</td>
							</tr>
						<?php
						endif;
					endforeach;
					?>
					<tr>
						<?php
						$attributes = array('id' => 'forma_unos');
						$naziv_uloge = array('name' => 'naziv_uloge', 'id' => 'naziv_uloge', 'class' => 'tb_forma_polje', 'form'=>'forma_unos');
						$tabela=array('name' => 'tabela', 'id' => 'tabela','value'=>'uloga', 'form'=>'forma_unos','type'=>'hidden');
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php echo form_input($naziv_uloge); ?></td>
						<td>
							<button name="dodaj" class="admin_dugme"><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
						<?php echo form_input($tabela); ?>
					</tr>
					<?php
					echo form_close();
					?>
					</tr>
				</tbody>
				<?php
				break;
		}
	endif;
	?>		
</table>

