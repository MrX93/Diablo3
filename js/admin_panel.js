function ispisi_tabelu(tabela, id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById('limona').innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "http://diablo3.hol.es/admin/prikazi_tabelu/" + tabela + "/" + id, true);
	xhttp.send();
}
function obrisi_red(tabela, id, prva_kolona) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById('limona').innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "http://diablo3.hol.es/admin/obrisi_red/" + tabela + "/" + id + "/" + prva_kolona, true);
	xhttp.send();
}

$(function () {
	$(document).on("click", "button:has(.fa-floppy-o)", function () {
		if (this.id)
		{
		var	id= this.id;
			
			var url ="http://diablo3.hol.es/admin/izmeni_red/"+id;
			var data = $("#forma_izmena").serialize();
			$.post(url, data, function (data) {
				$("#limona").html(data);
			});
			
		} else {
			var url ="http://diablo3.hol.es/admin/dodaj_red/";
			var data = $("#forma_unos").serialize();
			$.post(url, data, function (data) {
				$("#limona").html(data);
			});
		}
	});
});
