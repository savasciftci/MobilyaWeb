
            <article class="module width_full">
			<header><h3>Sayfa Ekle</h3></header>
                        <form action="<?php echo SITE_URL; ?>/admin/sayfaEkle" method="post">
				<div class="module_content">
						<fieldset>
							<label>Sayfa Başlığı</label>
							<input type="text" name="sayfa_baslik" >
						</fieldset>
						<fieldset>
							<label>Sayfa İçeriği</label>
							<textarea rows="12" name="sayfa_icerik"></textarea>
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Sayfa Ekle" class="alt_btn">					
				</div>
			</footer>
                        </form>
		</article> 
