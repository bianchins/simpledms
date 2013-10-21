$(document).ready(function() {

	function ricercaperparolachiave() {
		$.ajax({
			type : "POST",
			url : '/sbdms/index.php/api/ricerca/perparolachiave/',
			data : {
				terms : $('#q').val()
			},
			dataType : "json" ,
		}).done(function(json_response) {
			var $tabella = $('<table class="table table-hover"><thead><tr><th>Documento</th><th>Descrizione</th><th>Ultima modifica</th></tr></thead></table>');
			var $tbody = $('<tbody></tbody>');
			$('#risultati_ricerca').html('');
			for (var i = 0; i < json_response.length; i++) {
				$tbody.append('<tr><td><a href="sbdms/index.php/api/documento/get/' + json_response[i].id + '" target="_blank" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-floppy-save"></a> <span class="glyphicon glyphicon-file"></span> ' + json_response[i].nome + '</td><td>' + json_response[i].descrizione + '</td><td>' + json_response[i].modificato + '</td></tr>');
			}
			if (json_response.length == 0) {
				//Nessun risultato
				$('#risultati_ricerca').html('Nessun risultato');
			} else {
				$tabella.append($tbody);
				$('#risultati_ricerca').html($tabella);
			}
		}).fail(function(jqXHR, textStatus) {
			console.log("Request failed: " + textStatus + " " + jqXHR.status);
		});
	}


	$('#q').keypress(function(e) {
		if (e.which == 13) {
			ricercaperparolachiave();
		}
	});

	$('#btn_cerca').click(function(event) {
		event.preventDefault();
		ricercaperparolachiave();
	});

	$.ajax({
		type : "GET",
		url : '/sbdms/index.php/api/categorie',
		dataType : "json" ,
	}).done(function(json_response) {
		for (var i = 0; i < json_response.length; i++) {
			$('#lista_categorie').append('<a href="#" data-id="' + json_response[i].id + '" class="label label-info singola-cat">' + json_response[i].descrizione + '</a> ');
		}
		$('.singola-cat').click(function(event) {
			event.preventDefault();
			//Svuoto il campo di ricerca
			$('#q').val('');
			//Qui ricerca documenti per categoria
			$.ajax({
				type : "GET",
				url : '/sbdms/index.php/api/ricerca/percategoria/' + $(this).attr('data-id'),
				dataType : "json" ,
			}).done(function(json_response) {
				var $tabella = $('<table class="table table-hover"><thead><tr><th>Documento</th><th>Descrizione</th><th>Ultima modifica</th></tr></thead></table>');
				var $tbody = $('<tbody></tbody>');
				$('#risultati_ricerca').html('');
				for (var i = 0; i < json_response.length; i++) {
					$tbody.append('<tr><td><a href="sbdms/index.php/api/documento/get/' + json_response[i].id + '" target="_blank" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-floppy-save"></a> <span class="glyphicon glyphicon-file"></span> ' + json_response[i].nome + '</td><td>' + json_response[i].descrizione + '</td><td>' + json_response[i].modificato + '</td></tr>');
				}
				if (json_response.length == 0) {
					//Nessun risultato
					$('#risultati_ricerca').html('Nessun risultato');
				} else {
					$tabella.append($tbody);
					$('#risultati_ricerca').html($tabella);
				}
			}).fail(function(jqXHR, textStatus) {
				console.log("Request failed: " + textStatus + " " + jqXHR.status);
			});

		});
	}).fail(function(jqXHR, textStatus) {
		console.log("Request failed: " + textStatus + " " + jqXHR.status);
	});

});
