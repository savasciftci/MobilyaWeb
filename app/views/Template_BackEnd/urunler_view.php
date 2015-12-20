<article class="module width_3_quarter" style="width: 90%">
    <header><h3 class="tabs_involved">Ürünler</h3>
    </header>
    <div class="tab_container">
        <table class="tablesorter" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th></th> 
                    <th>Ürün Açıklama</th> 
                    <th>Ürün Kategori</th> 
                    <th>Oluşturulma Tarihi</th>
                    <th>İşlemler</th> 
                </tr> 
            </thead> 

            <tbody>  <?php for ($i = 0; $i <count($model[0]); $i++) { ?>

                <tr> 
                    <td style="width: 10px">-></td> 
                    <td><?php echo $model[0][$i]["urun_aciklama"]; ?></td> 
                     <td><?php for($a=0;$a<count($model[1]);$a++){
                         if($model[0][$i]["urun_kategori"] == $model[1][$a]["kategori_id"]){
                            echo $model[1][$a]["kategori_adi"];
                         }}?></td> 
                    <td style="width: 180px"><?php echo $model[0][$i]["urun_tarih"]; ?></td> 

                    <td style="width: 90px">    <form action="<?php echo SITE_URL . "/admin/urunDuzenle"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["urun_id"]; ?>">
                            <input type="hidden" name="urun_aciklama" value="<?php echo $model[0][$i]["urun_aciklama"]; ?>">
                            <input type="hidden" name="urun_kategori" value="<?php echo $model[0][$i]["urun_kategori"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_edit.png" title="Edit"> </form>
                        <form action="<?php echo SITE_URL . "/admin/urunSil"; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $model[0][$i]["urun_id"]; ?>">
                            <input type="image" src="<?php echo SITE_URL_BIMG; ?>/icn_trash.png" title="Trash"></td> </form>
                        <?php } ?>
            </tbody> 
        </table>	
    </div>

</article>