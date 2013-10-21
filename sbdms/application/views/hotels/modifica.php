    <form enctype="multipart/form-data" action="<?php echo site_url('hotels/modifica/'.$hotel->id)?>" method="post">
    <fieldset>
    <legend>Modifica Hotel</legend>
    <label>Nome (con "Hotel")</label>
    <input type="text" name="nome" value="<?php echo $hotel->nome;?>">
    <label>Descrizione</label>
    <textarea class="input-xxlarge" name="descrizione"><?php echo $hotel->descrizione;?></textarea>
    <label class="checkbox">
    <input type="checkbox" name="abilitato" value="1" <?php if($hotel->abilitato) echo 'checked="checked"';?>/> Abilitato
    </label>
    <label>Email</label>
    <div class="input-prepend">
	<span class="add-on">@</span>
	<input class="span2" id="prependedInput" type="text" placeholder="Email" name="email" value="<?php echo $hotel->email;?>">
	</div>
	<label>Sito internet</label>
	<input type="text" class="input-xxlarge" placeholder="http://" name="sitoweb" value="<?php echo $hotel->sitoweb;?>">
	<label>Telefono</label>
	<input type="text" placeholder="fisso e fax" name="telefono" value="<?php echo $hotel->telefono;?>">
	<label>Indirizzo</label>
	<input type="text" class="input-xxlarge" placeholder="Es. Via Torino 4/16 47838 Riccione (RN)" name="indirizzo" value="<?php echo $hotel->indirizzo;?>">
    <label>Stelle</label>
    <select name="stelle">
	<option value="1" <?php echo set_select('stelle', '1', ($hotel->stelle==1)); ?>>1</option>
	<option value="2" <?php echo set_select('stelle', '2', ($hotel->stelle==2)); ?>>2</option>
	<option value="3" <?php echo set_select('stelle', '3', ($hotel->stelle==3)); ?>>3</option>
	<option value="4" <?php echo set_select('stelle', '4', ($hotel->stelle==4)); ?>>4</option>
	<option value="5" <?php echo set_select('stelle', '5', ($hotel->stelle==5)); ?>>5</option>
	</select>
	<label class="checkbox">
    <input type="checkbox" name="flag_stelle_superior" value="1" <?php if($hotel->flag_stelle_superior) echo 'checked="checked"';?>> Superior
    </label>
    <label>Immagine</label>
    <div class="fileupload fileupload-new" data-provides="fileupload">
	<div class="fileupload-new thumbnail" style="width: 120px; height: 90px;">
	<?php if(file_exists('./images/'.$hotel->id.'.jpg')) : ?>
		<img src="<?php echo base_url().'images/'.$hotel->id.'.jpg';?>" />
	<?php else : ?>	
		<img src="http://www.placehold.it/120x90/EFEFEF/AAAAAA&text=Nessuna" />
	<?php endif; ?>	
	</div>
	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 120px; max-height: 90px; line-height: 20px;"></div>
	<div>
	<span class="btn btn-file"><span class="fileupload-new">Seleziona immagine</span><span class="fileupload-exists">Cambia</span><input type="file" name="immagine"/></span>
	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Rimuovi</a>
	</div>
	</div>
	<label>Latitudine e longitudine</label>
	<input type="text" class="input-small" name="latitudine"> <input type="text" class="input-small" name="longitudine">
    <label class="checkbox">
    <input type="checkbox" name="convenzione_inps" value="1" <?php if($hotel->convenzione_inps) echo 'checked="checked"';?>/> Convenzione INPS
    </label>
    <label class="checkbox">
    <input type="checkbox" name="convenzione_inail" value="1" <?php if($hotel->convenzione_inail) echo 'checked="checked"';?>/> Convenzione INAIL
    </label>
    <label class="checkbox">
    <input type="checkbox" name="convenzione_enasarco" value="1" <?php if($hotel->convenzione_enasarco) echo 'checked="checked"';?>/> Convenzione ENASARCO
    </label>
    
    <div class="form-actions">
    <button type="submit" class="btn btn-primary">Salva</button>
    <button type="button" class="btn">Annulla</button>
    </div>
    </fieldset>
    </form>