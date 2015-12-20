
<article class="module width_full">
    <header><h3>Sayfa Düzenle</h3></header><form action="" method="post">
				<div class="module_content">
						<fieldset>
							<label>Sayfa Başlığı</label>
							<input type="text"name="sayfa_baslik" value="<?php echo $_POST["sayfa_baslik"];?>">
						</fieldset>
						<fieldset>
							<label>Sayfa İçeriği</label>
							<textarea rows="12" name="sayfa_icerik" ><?php echo $_POST["sayfa_icerik"];?></textarea>
						</fieldset><div class="clear"></div>
				</div>
			<footer> <input type="hidden" name="guncelle" value="1">
                                <input type="hidden" name="id" value="<?php echo $_POST["id"];?>">
				<div class="submit_link">
					<input type="submit" value="Sayfa Düzenle" class="alt_btn">					
				</div>
			</footer></form>
		</article> 


