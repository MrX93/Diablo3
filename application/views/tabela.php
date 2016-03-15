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
							$nadimak = array('name' => 'tb_nadimak', 'id' => 'tb_nadimak', 'class' => 'tb_forma_polje', 'value' => $red->nadimak);
							$meil = array('name' => 'tb_meil', 'id' => 'tb_meil', 'class' => 'tb_forma_polje', 'value' => $red->meil);
							$sifra = array('name' => 'tb_sifra', 'id' => 'tb_sifra', 'class' => 'tb_forma_polje', 'value' => $red->sifra);
							$id_uloga = array('name' => 'tb_id_uloga', 'id' => 'tb_id_uloga', 'class' => 'tb_forma_polje', 'value' => $red->id_uloga);
							echo form_open('', $attributes);
							?>
							<tr>
								<td><?php echo form_input($nadimak); ?></td>
								<td><?php echo form_input($meil); ?></td>
								<td><?php echo form_input($sifra); ?></td>
								<td><?php echo form_input($id_uloga); ?></td>
								<?php if ($red->vreme == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme); ?></td>
								<?php } ?>
								<?php if ($red->id_korisnik == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo $red->izmenio; ?></td>
								<?php } ?>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('korisnici', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_korisnik; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('korisnici');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
								<?php if ($red->vreme == NULL) { ?>
									<td>  </td>
								<?php } else {
									?>
									<td><?php echo date('d-m-Y h:i:s', $red->vreme); ?></td>
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
						$nadimak = array('name' => 'tb_nadimak', 'id' => 'tb_nadimak', 'class' => 'tb_forma_polje',);
						$meil = array('name' => 'tb_meil', 'id' => 'tb_meil', 'class' => 'tb_forma_polje',);
						$sifra = array('name' => 'tb_sifra', 'id' => 'tb_sifra', 'class' => 'tb_forma_polje',);
						$id_uloga = array('name' => 'tb_id_uloga', 'id' => 'tb_id_uloga', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($nadimak); ?></td>
						<td><?php echo form_input($meil); ?></td>
						<td><?php echo form_input($sifra); ?></td>
						<td><?php echo form_input($id_uloga); ?></td>
						<td>
							<button id="<?php echo $red->id_korisnik; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('korisnici', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$naziv = array('name' => 'tb_naziv', 'id' => 'tb_naziv', 'class' => 'tb_forma_polje', 'value' => $red->Naziv);
							$aktivna = array('name' => 'tb_aktivna', 'id' => 'tb_aktivna', 'class' => 'tb_forma_polje', 'value' => $red->Aktivna);
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
									<button id="<?php echo $red->idAnketa; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('anketa', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->idAnketa; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('anketa');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$naziv = array('name' => 'tb_naziv', 'id' => 'tb_naziv', 'class' => 'tb_forma_polje',);
						$aktivna = array('name' => 'tb_aktivna', 'id' => 'tb_aktivna', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($naziv); ?></td>
						<td><?php echo form_input($aktivna); ?></td>
						<td>
							<button id="<?php echo $red->idAnketa; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('anketa', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$odgovor = array('name' => 'tb_odgovor', 'id' => 'tb_odgovor', 'class' => 'tb_forma_polje', 'value' => $red->Odgovor);
							$rezultat = array('name' => 'tb_rezultat', 'id' => 'tb_rezultat', 'class' => 'tb_forma_polje', 'value' => $red->Rezultat);
							$id_anketa = array('name' => 'tb_id_anketa', 'id' => 'tb_id_anketa', 'class' => 'tb_forma_polje', 'value' => $red->idAnketa);
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
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('anketaodgovori', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->idAnketaOdgovori; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('anketaodgovori');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$odgovor = array('name' => 'tb_odgovor', 'id' => 'tb_odgovor', 'class' => 'tb_forma_polje',);
						$rezultat = array('name' => 'tb_rezultat', 'id' => 'tb_rezultat', 'class' => 'tb_forma_polje',);
						$id_anketa = array('name' => 'tb_id_anketa', 'id' => 'tb_id_anketa', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($odgovor); ?></td>
						<td><?php echo form_input($rezultat); ?></td>
						<td><?php echo form_input($id_anketa); ?></td>
						<td>
							<button id="<?php echo $red->idAnketaOdgovori; ?>" name="dodaj" class="admin_dugme" onclick="ispisi_tabelu('anketaodgovori', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$ime_lika = array('name' => 'tb_ime_lika', 'id' => 'tb_ime_lika', 'class' => 'tb_forma_polje', 'value' => $red->ime_lika);
							$slika_lik_pocetna = array('name' => 'tb_slika_lik_pocetna', 'id' => 'tb_slika_lik_pocetna', 'class' => 'tb_forma_polje', 'value' => $red->slika_lik_pocetna);
							$video = array('name' => 'tb_video', 'id' => 'tb_video', 'class' => 'tb_forma_polje', 'value' => $red->video);
							$dir_za_smestanje_slika = array('name' => 'tb_dir_za_smestanje_slika', 'id' => 'tb_dir_za_smestanje_slika', 'class' => 'tb_forma_polje', 'value' => $red->dir_za_smestanje_slika);
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
									<button id="<?php echo $red->id_lika; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('likovi', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_lika; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('likovi');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$ime_lika = array('name' => 'tb_ime_lika', 'id' => 'tb_ime_lika', 'class' => 'tb_forma_polje',);
						$slika_lik_pocetna = array('name' => 'tb_slika_lik_pocetna', 'id' => 'tb_slika_lik_pocetna', 'class' => 'tb_forma_polje',);
						$video = array('name' => 'tb_video', 'id' => 'tb_video', 'class' => 'tb_forma_polje',);
						$dir_za_smestanje_slika = array('name' => 'tb_dir_za_smestanje_slika', 'id' => 'tb_dir_za_smestanje_slika', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($ime_lika); ?></td>
						<td><?php echo form_input($slika_lik_pocetna); ?></td>
						<td><?php echo form_input($video); ?></td>
						<td><?php echo form_input($dir_za_smestanje_slika); ?></td>
						<td>
							<button id="<?php echo $red->id_lika; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('likovi', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$naziv = array('name' => 'tb_naziv', 'id' => 'tb_naziv', 'class' => 'tb_forma_polje', 'value' => $red->naziv);
							$link = array('name' => 'tb_link', 'id' => 'tb_link', 'class' => 'tb_forma_polje', 'value' => $red->link);
							$podmeni = array('name' => 'tb_podmeni', 'id' => 'tb_podmeni', 'class' => 'tb_forma_polje', 'value' => $red->podmeni);
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
									<button id="<?php echo $red->id_meni; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('meni', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_meni; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('meni');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$naziv = array('name' => 'tb_naziv', 'id' => 'tb_naziv', 'class' => 'tb_forma_polje',);
						$link = array('name' => 'tb_link', 'id' => 'tb_link', 'class' => 'tb_forma_polje',);
						$podmeni = array('name' => 'tb_podmeni', 'id' => 'tb_podmeni', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($naziv); ?></td>
						<td><?php echo form_input($link); ?></td>
						<td><?php echo form_input($podmeni); ?></td>
						<td>
							<button id="<?php echo $red->id_meni; ?>" name="dodaj" class="admin_dugme" onclick="ispisi_tabelu('meni', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$podmeni_naziv = array('name' => 'tb_podmeni_naziv', 'id' => 'tb_podmeni_naziv', 'class' => 'tb_forma_polje', 'value' => $red->podmeni_naziv);
							$id_lika = array('name' => 'tb_id_lika', 'id' => 'tb_id_lika', 'class' => 'tb_forma_polje', 'value' => $red->id_lika);
							$id_meni = array('name' => 'tb_id_meni', 'id' => 'tb_id_meni', 'class' => 'tb_forma_polje', 'value' => $red->id_meni);
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
									<button id="<?php echo $red->id_podmeni; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('podmeni', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_podmeni; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('podmeni');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$podmeni_naziv = array('name' => 'tb_podmeni_naziv', 'id' => 'tb_podmeni_naziv', 'class' => 'tb_forma_polje',);
						$id_lika = array('name' => 'tb_id_lika', 'id' => 'tb_id_lika', 'class' => 'tb_forma_polje',);
						$id_meni = array('name' => 'tb_id_meni', 'id' => 'tb_id_meni', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($podmeni_naziv); ?></td>
						<td><?php echo form_input($id_lika); ?></td>
						<td><?php echo form_input($id_meni); ?></td>
						<td>
							<button id="<?php echo $red->id_podmeni; ?>" name="dodaj" class="admin_dugme" onclick="ispisi_tabelu('podmeni', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$putanja = array('name' => 'tb_putanja', 'id' => 'tb_putanja', 'class' => 'tb_forma_polje', 'value' => $red->putanja);
							$id_lika = array('name' => 'tb_id_lika', 'id' => 'tb_id_lika', 'class' => 'tb_forma_polje', 'value' => $red->id_lika);
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
									<button id="<?php echo $red->id_slajda; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('slajd', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_slajda; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('slajd');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$putanja = array('name' => 'tb_putanja', 'id' => 'tb_putanja', 'class' => 'tb_forma_polje',);
						$id_lika = array('name' => 'tb_id_lika', 'id' => 'tb_id_lika', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($putanja); ?></td>
						<td><?php echo form_input($id_lika); ?></td>
						<td>
							<button id="<?php echo $red->id_slajda; ?>" name="dodaj" class="admin_dugme" onclick="ispisi_tabelu('slajd', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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
							$naziv_uloge = array('name' => 'tb_naziv_uloge', 'id' => 'tb_naziv_uloge', 'class' => 'tb_forma_polje', 'value' => $red->naziv_uloge);
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
									<button id="<?php echo $red->id_uloga; ?>" name="izmeni" class="admin_dugme" onclick="ispisi_tabelu('uloga', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
									</button>
								</td>
								<td>
									<button id="<?php echo $red->id_uloga; ?>" name="odustani" class="admin_dugme" onclick="ispisi_tabelu('uloga');" ><i class="fa fa-lg fa-times"></i>
									</button>
								</td>
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
						$naziv_uloge = array('name' => 'tb_naziv_uloge', 'id' => 'tb_naziv_uloge', 'class' => 'tb_forma_polje',);
						echo form_open('', $attributes);
						?>
					<tr>
						<td><?php ?></td>
						<td><?php echo form_input($naziv_uloge); ?></td>
						<td>
							<button id="<?php echo $red->id_uloga; ?>" name="dodaj" class="admin_dugme" onclick="ispisi_tabelu('uloga', this.id);" ><i class="fa fa-lg fa-floppy-o"></i>
							</button>
						</td>
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

