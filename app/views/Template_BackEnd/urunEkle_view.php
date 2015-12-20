 
<article class="module width_full">
	<header><h3>Ürün Ekle</h3></header>
		<form action="<?php echo SITE_URL."/admin/urunEkle";?>" method="post">
			<div class="module_content">
                            <fieldset>
						<label>ÜRÜN AÇIKLAMA</label>
						<input maxlength="27" type="text" name="urun_aciklama" />
					</fieldset>
					<fieldset>
						<label>ÜRÜN KATEGORİSİ</label>
						<select name="urun_kategori">
                                                  <?php for ($i = 0; $i < count($model[0]); $i++) { ?> 
                                                    <option value="<?php echo $model[0][$i]["kategori_id"]; ?>"><?php echo $model[0][$i]["kategori_adi"]; ?></option>
                                                  <?php } ?>
						</select>
					</fieldset>
					<article class="module width_full" style="margin-left: 0px">
                                    <header><h3 style="text-indent: 9px; font-size: 12 px;">Dosya Yükle</h3></header>
                                           
                                                    <div class="module_content">
                                                            <fieldset>
                                                                    <div style="padding-left: 15px">
                                                                            <input type="file" name="dosya" /> Dosya Seçin. (Rar, Zip, JPEG, PNG, GIF)
                                                                    </div>
                                                            </fieldset><div class="clear"> </div>
                                                    </div>
                                                    <footer>
                                                            <div class="submit_link">
                                                                    <input type="submit" value="Fotğraf Yükle" class="alt_btn">
                                                            </div>
                                                    </footer>
                                            
                            </article>
					
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Ürün Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>