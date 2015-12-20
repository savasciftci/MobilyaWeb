<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Sayfalar</h3>
		</header>

		<div class="tab_container">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   				<th></th> 
                                <th>Sayfa Adı</th> 
                                <th>Sayfa Açıklama</th> 
    				<th>Oluşturulma Tarihi</th>
    				<th>İşlemler</th> 
				</tr> 
			</thead> 
			<tbody> 
                            <?php for($i=0 ; $i<count($model[0]); $i++) { ?>
				<tr> 
   				<td><input type="checkbox"></td> 
                            <td><?php echo $model[0][$i]["sayfa_baslik"]; ?></td> 
                            <td><?php echo $model[0][$i]["sayfa_icerik"]; ?></td> 
    				<td><?php echo $model[0][$i]["sayfa_tarih"]; ?></td> 
                                
    				<td>    <form action="<?php echo SITE_URL . "/admin/sayfaDuzenle"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["sayfa_id"]; ?>">
                            <input type="hidden" name="sayfa_baslik" value="<?php echo $model[0][$i]["sayfa_baslik"]; ?>">
                            <input type="hidden" name="sayfa_icerik" value="<?php echo $model[0][$i]["sayfa_icerik"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_edit.png" title="Edit"> </form>
                        
                        <form action="<?php echo SITE_URL . "/admin/sayfaSil"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["sayfa_id"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_trash.png" title="Trash"></td></form>
				
                                <?php } ?>
			</tbody> 
			</table>	
		</div>
		
		</article>