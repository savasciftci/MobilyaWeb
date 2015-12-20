<article class="module width_3_quarter">
    <header><h3 class="tabs_involved">Kategoriler</h3>
    </header>
    <div class="tab_container">
        <table class="tablesorter" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th></th> 
                    <th>Kategori Adı</th> 
                    <th>Oluşturulma Tarihi</th>
                    <th>İşlemler</th> 
                </tr> 
            </thead> 

            <tbody>  <?php for ($i = 0; $i < count($model[0]); $i++) { ?>

                <tr> 
                    <td><input type="checkbox"></td> 
                    <td><?php echo $model[0][$i]["kategori_adi"]; ?></td> 
                    <td><?php echo $model[0][$i]["kategori_tarih"]; ?></td> 

                    <td>    <form action="<?php echo SITE_URL . "/admin/kategoriDuzenle"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["kategori_id"]; ?>">
                            <input type="hidden" name="kategori_adi" value="<?php echo $model[0][$i]["kategori_adi"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_edit.png" title="Edit"> </form>
                        
                        <form action="<?php echo SITE_URL . "/admin/kategoriSil"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["kategori_id"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_trash.png" title="Trash"></td></form>
                        <?php } ?>
                        
            </tbody> 
        </table>	
    </div>

</article>