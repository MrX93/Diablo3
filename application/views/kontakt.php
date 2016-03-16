<div id="kontakt">
	<div id="forma" >  
		<div id="contact_form">	
			<?php
			echo form_open($base_url . 'kontakt/kontaktiraj', $kontakt_forma);

			echo form_label('E-mail: ', 'kontakt_ime');
			echo form_input($kontakt_ime);
			echo '<br/>';
			echo form_label('Subject: ', 'kontakt_predmet');
			echo form_input($kontakt_predmet);
			echo '<br/>';
			echo form_label('Message: ', 'kontakt_poruka', 'labela');
			echo form_textarea($kontakt_poruka);
			echo '<br/>';
			echo form_submit($kontakt_posalji);
			echo form_reset($kontakt_reset);

			echo form_close();
			?>
		</div>        
	</div>      
</div>


