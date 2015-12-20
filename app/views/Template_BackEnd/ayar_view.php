
<article class="module width_full">
    <header><h3>Genel Ayarlar</h3></header>
    
    <form action="" method="post">
        <div class="module_content">
            <fieldset>
                <label>Site Başlık:</label>
                <input type="text" name="site_baslik" value="<?php echo $model[0][0]["site_baslik"];?>">
            </fieldset>
            <fieldset>
                <label>Site Açıklaması</label>
                <div ></div>
                <div>
                    <textarea rows="5"name="site_aciklama" ><?php echo $model[0][0]["site_aciklama"];?> </textarea>
                </div>
            </fieldset>
            <fieldset>
                <label>İş Tel :</label>
                <input type="text" name="is_tel" value="<?php echo $model[0][0]["is_tel"];?>">
            </fieldset>
            <fieldset>
                <label>Cep Tel :</label>
                <input type="text" name="cep_tel" value="<?php echo $model[0][0]["cep_tel"];?>">
            </fieldset>
            <fieldset>
                <label>Site Eposta Adresi :</label>
                <input type="text" name="site_mail" value="<?php echo $model[0][0]["site_mail"];?>">
            </fieldset>
            <fieldset>
                <label>Adres</label>
                <div ></div>
                <div>
                    <textarea rows="5"name="adres" ><?php echo $model[0][0]["adres"];?> </textarea>
                </div>
            </fieldset>
            <fieldset>
                <label>Sifre :</label>
                <input type="text" name="sifre" value="">
            </fieldset>
            
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Ayarları Güncelle" class="alt_btn">
            </div>
        </footer>
    </form>
</article><!-- end of post new article -->
<div class="spacer"></div>