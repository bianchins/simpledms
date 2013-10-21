<table class="table table-striped">
	<thead>
		<tr><th>Nome</th><th>Stelle</th><th>Telefono</th><th>Immagine</th><th>Abilitato</th><th>Modifica</th></tr>
	</thead>
	<tbody>
	<?php foreach ($hotels as $hotel) : ?>
		<tr>
			<td><?php echo $hotel->nome; ?></td>
			<td style="width:90px;">
				<?php for($i=0; $i<$hotel->stelle; $i++) : ?><i class="icon-asterisk"></i><?php endfor; ?>
				<?php if($hotel->flag_stelle_superior):?>S<?php endif; ?>
			</td>
			<td><?php echo $hotel->telefono; ?></td>
			<td><img src="images/<?php echo $hotel->id; ?>.jpg" class="img-polaroid"/></td>
			<td style="width:70px;text-align:center">
				<?php if($hotel->abilitato) :  ?>
				<a class="btn btn-small btn-success" href="<?php echo site_url('hotels/disabilita/'.$hotel->id)?>"><i class="icon-ok-sign icon-white"></i></button> 
				<?php else : ?>
				<a class="btn btn-small btn-danger" href="<?php echo site_url('hotels/abilita/'.$hotel->id)?>"><i class="icon-ban-circle icon-white"></i></button> 
				<?php endif; ?>
			</td>
			<td style="width:70px;text-align:center"><a href="<?php echo site_url('hotels/modifica/'.$hotel->id)?>" class="btn btn-small btn-warning"><i class="icon-edit"></i></a></td>
		</tr>
		
	<?php endforeach; ?>
	</tbody>
</table>