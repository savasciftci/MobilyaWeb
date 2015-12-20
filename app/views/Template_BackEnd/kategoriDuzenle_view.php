
<article class="module width_full">
    <header><h3>Kategori Düzenle</h3></header><form action="" method="post">
        <div class="module_content">
            <fieldset>
                <label>Kategori Başlığı</label>
                <input type="text" name="kategori_adi" value="<?php echo $_POST["kategori_adi"]; ?>" />
            </fieldset><div class="clear"></div>
        </div>
        <footer><input type="hidden" name="guncelle" value="1">
            <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
            <div class="submit_link">
                <input type="submit" value="Kategori Düzenle" class="alt_btn">					
            </div>
        </footer></form>
</article> 
