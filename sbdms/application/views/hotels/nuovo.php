    <form enctype="multipart/form-data" action="<?php echo site_url('hotels/nuovo')?>" method="post">
    <fieldset>
    <legend>Nuovo Hotel</legend>
    <label>Nome (con "Hotel")</label>
    <input type="text" name="nome">
    <label>Descrizione</label>
    <textarea class="input-xxlarge" name="descrizione"></textarea>
    <label class="checkbox">
    <input type="checkbox" name="abilitato" checked="checked"> Abilitato
    </label>
    <label>Email</label>
    <div class="input-prepend">
	<span class="add-on">@</span>
	<input class="span2" id="prependedInput" type="text" placeholder="Email" name="email">
	</div>
	<label>Sito internet</label>
	<input type="text" class="input-xxlarge" placeholder="http://" name="sitoweb">
	<label>Telefono</label>
	<input type="text" placeholder="fisso e fax" name="telefono">
	<label>Indirizzo</label>
	<input type="text" class="input-xxlarge" placeholder="Es. Via Torino 4/16 47838 Riccione (RN)" name="indirizzo">
    <label>Stelle</label>
    <select name="stelle">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<label class="checkbox">
    <input type="checkbox" name="flag_stelle_superior"> Superior
    </label>
    <label>Immagine</label>
    <div class="fileupload fileupload-new" data-provides="fileupload">
	<div class="fileupload-new thumbnail" style="width: 120px; height: 90px;"><img src="http://www.placehold.it/120x90/EFEFEF/AAAAAA&text=Nessuna" /></div>
	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 120px; max-height: 90px; line-height: 20px;"></div>
	<div>
	<span class="btn btn-file"><span class="fileupload-new">Seleziona immagine</span><span class="fileupload-exists">Cambia</span><input type="file" name="immagine"/></span>
	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Rimuovi</a>
	</div>
	</div>
	<label>Latitudine e longitudine</label>
	<input type="text" class="input-small" name="latitudine"> <input type="text" class="input-small" name="longitudine">
    <label class="checkbox">
    <input type="checkbox" name="convenzione_inps" value="1" /> Convenzione INPS
    </label>
    <label class="checkbox">
    <input type="checkbox" name="convenzione_inail" value="1" /> Convenzione INAIL
    </label>
    <label class="checkbox">
    <input type="checkbox" name="convenzione_enasarco" value="1" /> Convenzione ENASARCO
    </label>
    
    
    <div class="form-actions">
    <button type="submit" class="btn btn-primary">Salva</button>
    <button type="button" class="btn">Annulla</button>
    </div>
    </fieldset>
    </form>