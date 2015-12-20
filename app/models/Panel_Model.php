<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $sql = "SELECT * FROM table";
        return $this->db->select($sql);
    }

    public function insert($data) {
        return ($this->db->insert("table", $data));
    }

    public function update($data, $gelenid) {
        return ($this->db->update("table", $data, "table_id=$gelenid"));
    }

    public function delete($gelenid) {
        return ($this->db->delete("table","table_id=$gelenid"));
    }
    //login select sorgusu
     public function loginselect($email,$sifre) {
        $sql = "SELECT * FROM ayar WHERE mail = '$email' AND sifre = '$sifre'";
        error_log($sql);
        return $this->db->select($sql);
    }
   
    //kategori adı select sorgusu
     public function kategoriAdiselect($kategori_baslik) {
        $sql = "SELECT kategori_id FROM kategoriler WHERE kategori_adi = '$kategori_baslik'";
        return $this->db->select($sql);
    }
     //kategori select sorgusu
     public function kategoriselect() {
        $sql = "SELECT * FROM kategoriler";
        return $this->db->select($sql);
    }
    //kategori İnsert
    public function kategoriinsert($data) {
        return ($this->db->insert("kategoriler", $data));
    }

     public function kategoriupdate($data, $gelenid) {
        return ($this->db->update("kategoriler", $data, "kategori_id=$gelenid"));
    }
     public function kategoridelete($gelenid) {
        return ($this->db->delete("kategoriler","kategori_id=$gelenid"));
    }
    //sayfa adı select sorgusu
     public function sayfaAdiselect($sayfa_baslik) {
        $sql = "SELECT sayfa_id FROM sayfalar WHERE sayfa_baslik = '$sayfa_baslik'";
        return $this->db->select($sql);
    }
    public function sayfainsert($data) {
        return ($this->db->insert("sayfalar", $data));
    }
    //kategori select sorgusu
     public function sayfaselect() {
        $sql = "SELECT * FROM sayfalar";
        return $this->db->select($sql);
    }
    public function sayfaupdate($data, $gelenid) {
        return ($this->db->update("sayfalar", $data, "sayfa_id=$gelenid"));
    }
    public function sayfadelete($gelenid) {
        return ($this->db->delete("sayfalar","sayfa_id=$gelenid"));
    }
    public function uruninsert($data) {
        return ($this->db->insert("urunler", $data));
    }
     public function urunselect() {
        $sql = "SELECT * FROM urunler";
        return $this->db->select($sql);
    }
    public function urunupdate($data, $gelenid) {
        return ($this->db->update("urunler", $data, "urun_id=$gelenid"));
    }
      public function urundelete($gelenid) {
        return ($this->db->delete("urunler","urun_id=$gelenid"));
    }
    public function ayarupdate($ayarguncelle, $gelenid) { 
        return ($this->db->update("ayar", $ayarguncelle, "id=$gelenid"));
    }
      //ayar select sorgusu
     public function ayarselect() {
        $sql = "SELECT * FROM ayar";
        return $this->db->select($sql);
    }
}

?>
