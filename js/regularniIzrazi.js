function provera()
{
var greska = 0;
var nadimak = document.getElementById('Nadimak');
var email = document.getElementById('rE-mail');
var sifra = document.getElementById('rSifra');
var ponSifra = document.getElementById('rPonoviSifru');
var uslov = document.getElementById('uslov');


var reEmail= /^[\S]+@[a-z]{3,8}\.[a-z]{2,4}(\.[a-z]{2,4})?$/;  


	if(nadimak.value == "")
	{
		document.getElementById('naGreska').innerHTML = "Morate izabrati nadimak! ";
		document.getElementById('Nadimak').style.border = '2px solid red';
		document.getElementById('naGreska').style.color = 'red';
		greska++;
	}
	 else 
	{
		document.getElementById('naGreska').innerHTML = "";
		document.getElementById('Nadimak').style.border = '2px solid blue';
	}

	if(!email.value.match(reEmail))
	{
	   document.getElementById('emGreska').innerHTML = "Email nije unet u dobrom formatu!";
		document.getElementById('rE-mail').style.border = '2px solid red';
		document.getElementById('emGreska').style.color = 'red';
		greska++;
	}
	else 
	{
		document.getElementById('emGreska').innerHTML = "";
		document.getElementById('rE-mail').style.border= '2px solid  blue';
	}
	
	if(sifra.value==ponSifra.value)
	 {
		document.getElementById('siGreska').innerHTML = "";
		document.getElementById('rSifra').style.border = '2px solid  blue';
		document.getElementById('rPonoviSifru').style.border = '2px solid  blue';
		
	}
	
	if(sifra.value=="")
	{
		document.getElementById('siGreska').innerHTML = "Unesite sifru!";
		document.getElementById('rSifra').style.border = '2px solid red';
		document.getElementById('rPonoviSifru').style.border = '2px solid red';
		document.getElementById('siGreska').style.color = 'red';
		greska++;
	}
	
	else if(sifra.value!=ponSifra.value)
	{
		document.getElementById('siGreska').innerHTML = "Sifra se ne poklapa!";
		document.getElementById('siGreska').style.color = 'red';
		document.getElementById('rSifra').style.border = '2px solid red';
		document.getElementById('rPonoviSifru').style.border = '2px solid red';
		greska++;
	}
		
	if(!uslov.checked)
	{
		document.getElementById('ceGreska').innerHTML = "Morate prihvatiti uslove!"
		document.getElementById('ceGreska').style.color = 'red';
		greska++;
	}
	else
	{
		document.getElementById('ceGreska').innerHTML = ""
	}
	
	
	if(greska == 0)
	{
		document.reg_form.submit();
	}
}


	function provera1(){
	var logEmail = document.getElementById('E-mail');
	var logSifra = document.getElementById('Sifra');
	var greska=0;
	
	var reLogEmail= /^[\S]+@[a-z]{3,8}\.[a-z]{2,4}(\.[a-z]{2,4})?$/;  
	
	if(logEmail.value=="")
	{
		document.getElementById('grEmail').innerHTML = "Morate uneti Vas E-mail!"
		document.getElementById('E-mail').style.border = '2px solid red';
		document.getElementById('grEmail').style.color = 'red';
		greska++;
	}
	else 
	{
		document.getElementById('grEmail').innnerHTML = "";
		document.getElementById('E-mail').style.border = '2px solid blue';
	}
	
	if(logSifra.value=="")
	{
		document.getElementById('grSifra').innerHTML = "Unesite sifru!";
		document.getElementById('Sifra').style.border = '2px solid red';
		document.getElementById('grSifra').style.color = 'red';	
		greska++;
	}
	else 
	{
		document.getElementById('grSifra').innerHTML = "";
		document.getElementById('Sifra').style.border = '2px solid blue';
	}
	
	if(greska==0)
		document.loginForm.submit();

}
	
	function provera2()
	{
	var Ime = document.getElementById('ime1');
	var EmailAdresa= document.getElementById('e-mail-adresa');
	var Tema= document.getElementById('tema');
	var Poruka= document.getElementById('poruka');
		
	var reIme= /^[A-Z]{1}[a-z]{2,19}\s[A-Z]{1}[a-z]{2,20}$/;
	var reEmailAdresa = /^[\S]+@[a-z]{3,8}\.[a-z]{2,4}(\.[a-z]{2,4})?$/; 
	
	if(!Ime.value.match(reIme))
	{
		document.getElementById('grIme').innerHTML = "Ime i prezime nisu uneti u dobrom formatu!";
		document.getElementById('ime1').style.border = '2px solid red';
		document.getElementById('grIme').style.color = 'red';	
	}
	
	else
	{
		document.getElementById('grIme').innerHTML = "";
		document.getElementById('ime1').style.border = '2px solid blue';
	}
	if(!EmailAdresa.value.match(reEmailAdresa))
	{
	   document.getElementById('grEmailAdresa').innerHTML = "Email nije unet u dobrom formatu!";
		document.getElementById('e-mail-adresa').style.border = '2px solid red';
		document.getElementById('grEmailAdresa').style.color = 'red';
	}
	else 
	{
		document.getElementById('grEmailAdresa').innerHTML = "";
		document.getElementById('e-mail-adresa').style.border= '2px solid  blue';
	}
	
	if(Tema.value=="")
	{
		document.getElementById('grTema').innerHTML = "Upisite temu poruke!"
		document.getElementById('grTema').style.color = 'red';
		document.getElementById('tema').style.border = '2px solid red';
	}
	else
	{
		document.getElementById('grTema').innerHTML = "";
		document.getElementById('tema').style.border= '2px solid  blue';
	}
	
	if(Poruka.value=="")
	{
		document.getElementById('grPoruka').innerHTML = "Molim Vas unesite poruku."
		document.getElementById('grPoruka').style.color = 'red';
		document.getElementById('poruka').style.border = '2px solid red';
	}
	else
	{
		document.getElementById('grPoruka').innerHTML = ""
		document.getElementById('poruka').style.border= '2px solid  blue';
	}
	if(Ime.value.match(reIme) && EmailAdresa.value.match(reEmailAdresa) && Tema.value!="" && Poruka.value!="")
	{
		alert("Uspesno ste poslali poruku");
	}
}
	function glasaj()
	{
		alert("Hvala sto ste glasali");
	}
	
	
	function pr()
	{
		
	}
