<article class="module width_full">
    <header><h3>Ürün Düzenle</h3></header><form action="" method="post">
				<div class="module_content">
						<fieldset>
                                                    <label>ÜRÜN AÇIKLAMA</label>
                                                <input maxlength="27" type="text" name="urun_aciklama" value="<?php echo $_POST["urun_aciklama"];?>" />
					</fieldset>
					<fieldset>
						<label>ÜRÜN KATEGORİSİ</label>
						<select name="urun_kategori">
                                                  <?php $id =$_POST["urun_kategori"] ; for ($i = 0; $i < count($model[0]); $i++) { 
                                                     echo '<option ';
                                                     echo $id == $model[0][$i]["kategori_id"] ? 'selected' : null;
                                                     echo " value=".$model[0][$i]["kategori_id"].">".$model[0][$i]["kategori_adi"]."</option>";
                                                   } ?>
						</select>
					</fieldset><div class="clear"></div>
				</div>
        <footer><input type="hidden" name="guncelle" value="1">
            <input type="hidden" name="id" value="<?php echo $_POST["id"];?>">
				<div class="submit_link">
					<input type="submit" value="Ürünü Düzenle" class="alt_btn">					
				</div>
                        </footer></form>
		</article> 
