		 <table border="0" cellpadding="5" cellspacing="0" width="950">
            <tbody>
             <tr>
                <td style="border-top: 1px solid rgb(204, 204, 204);" height="10">&nbsp;</td>
                <td style="border-top: 1px solid rgb(204, 204, 204);"><div align="left"></div></td>
                <td style="border-top: 1px solid rgb(204, 204, 204);">&nbsp;</td>
              </tr>            
            <?php foreach ($hotels as $hotel) : ?>
              <tr>
                <td height="90" valign="middle" width="148"><div align="right"><a href="<?php echo $hotel->sitoweb;?>"  title="<?php echo $hotel->nome;?> <?php echo $hotel->stelle;?> Stelle"><img src="<?php echo base_url().'images/'.$hotel->id.'.jpg';?>" style="margin-bottom: 10px; border: 3px solid rgb(204, 204, 204);" border="0" /></a> </div></td>
                <td width="598"><div align="left">
                  <p><span style="font-weight: bold;"><?php echo $hotel->nome;?> <img src="hotelspa_files/<?php echo $hotel->stelle;?>star.jpg" alt="<?php echo $hotel->stelle;?> Stelle" /> <?php if($hotel->flag_stelle_superior):?>S<?php endif; ?><br />
                    </span> <?php echo $hotel->indirizzo;?> 
                    <?php echo $hotel->telefono;?><br />
                    <span class="indirizzo"> <a href="<?php echo $hotel->sitoweb;?>"><?php echo $hotel->sitoweb;?></a> - </span><a href="mailto:<?php echo $hotel->email;?>?subject=info%20sito%20riccioneterme"><?php echo $hotel->email;?></a></p>
                  <p><span class="indirizzo"><?php echo $hotel->descrizione;?>
                      </span> </p>
                </div></td>
                <td width="174">
                	<?php if($hotel->convenzione_inps) : ?> Convenzione INPS <br/><?php endif; ?>
                	<?php if($hotel->convenzione_inail) : ?> Convenzione INAIL <br/><?php endif; ?>
                	<?php if($hotel->convenzione_enasarco) : ?> Convenzione ENASARCO <br/><?php endif; ?>
                </td>
              </tr>
              <tr>
                <td style="border-top: 1px solid rgb(204, 204, 204);" height="10">&nbsp;</td>
                <td style="border-top: 1px solid rgb(204, 204, 204);"><div align="left"></div></td>
                <td style="border-top: 1px solid rgb(204, 204, 204);">&nbsp;</td>
              </tr>
             <?php endforeach; ?> 
            </tbody>
          </table>
