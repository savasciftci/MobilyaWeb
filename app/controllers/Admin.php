<?php

class Admin extends Controller {

    public function __construct() {
        error_log("admin.php");
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/home");
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfalar() {
        $model = $this->load->model("Panel_Model");
        $veriler = array();
        $veriler[0]=$model->sayfaselect();
        
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sayfalar",$veriler);
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfaEkle() {

        if ($_POST) {
            $form = $this->load->otherClasses('Form');
            $model = $this->load->model("Panel_Model");
            $form->post('sayfa_baslik', true);
            $form->post('sayfa_icerik', true);
            $sayfaBaslik = $form->values['sayfa_baslik'];
            $sayfaAciklama = $form->values['sayfa_icerik'];

            if($sayfaBaslik){
                if ($sayfaAciklama) {
                $varmi = $model->sayfaAdiselect($sayfaBaslik);
                if(!$varmi){
                    if ($form->submit()) {       
                    $ekle = array('sayfa_baslik' => $sayfaBaslik, 'sayfa_icerik' => $sayfaBaslik); 
                    $sonuc = $model->sayfainsert($ekle);
                    if($sonuc){
                        echo 'Sayfa başarıyla eklendi!';
                        $form->yonlendir(SITE_URL."/admin/sayfalar",1);
                    }else{
                        echo 'Sayfa Eklenemedi!';
                         $form->yonlendir(SITE_URL."/admin/sayfaEkle",1);
                    }
                    }
                }else{
                    echo "Bu Sayfayı daha önce eklediniz!";
                    $form->yonlendir(SITE_URL."/admin/sayfaEkle",1);
                }
            }
            else{
                echo 'Lütfen Sayfa İçeriğini giriniz.';
                $form->yonlendir(SITE_URL."/admin/sayfaEkle",1);
            }
                }else{
                echo 'Lütfen Sayfa başlığını giriniz.';
                $form->yonlendir(SITE_URL."/admin/sayfaEkle",1);
            }
        } else {
            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/sayfaEkle");
            $this->load->view("Template_BackEnd/footer");
        }
    }
    

   public function sayfaDuzenle() {
           $guncelle = $_POST["guncelle"];
            if($guncelle==1){
            $id = $_POST["id"];
            $form = $this->load->otherClasses('Form');
            $model = $this->load->model("Panel_Model");
            $form->post('sayfa_baslik', true);
            $form->post('sayfa_icerik', true);
            $sayfaBaslik = $form->values['sayfa_baslik'];
            $sayfaAciklama = $form->values['sayfa_icerik'];
            if($sayfaBaslik){
                $varmi = $model->sayfaAdiselect($sayfaBaslik);
                if(!$varmi){
                    if ($form->submit()) {
                    $guncelle = array('sayfa_baslik' => $sayfaBaslik, 'sayfa_icerik' => $sayfaAciklama); 
                    $sonuc = $model->sayfaupdate($guncelle,$id);
                    if($sonuc){
                        echo 'Sayfa başarıyla güncellendi!';
                        $form->yonlendir(SITE_URL."/admin/sayfalar",1);
                    }else{
                        echo 'Sayfa güncellenemedi!';
                         $form->yonlendir(SITE_URL."/admin/sayfaDuzenle",1);
                    }
                    }
                }else{
                    echo "Bu Sayfayı daha önce eklediniz!";
                    $form->yonlendir(SITE_URL."/admin/sayfaDuzenle",1);
                }
            }else{
                echo 'Lütfen Sayfa başlığını giriniz.';
                $form->yonlendir(SITE_URL."/admin/sayfaDuzenle",1);
            }
            }
            
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left"); 
        $this->load->view("Template_BackEnd/sayfaDuzenle");
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfaSil() {
        $id = $_POST["id"];
        if ($_POST) {
            $form = $this->load->otherClasses('Form');
            $model = $this->load->model("Panel_Model");
            $sil = $model->sayfadelete($id);
            echo 'Kategori başarıyla Silindi!';
            $form->yonlendir(SITE_URL."/admin/sayfalar",1);
        }
        else{
            echo 'Kategori Silinemedi';
            $form->yonlendir(SITE_URL."/admin/sayfalar",1);
        }
        
        
        
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/Sil");
        $this->load->view("Template_BackEnd/footer");
    }

    public function kategoriler() {
        $model = $this->load->model("Panel_Model");
        $veriler = array();
        $veriler[0]=$model->kategoriselect();
      
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/kategoriler",$veriler);
        $this->load->view("Template_BackEnd/footer");
    }
   
    public function kategoriEkle() {

        if ($_POST) {
            $form = $this->load->otherClasses('Form');
            $model = $this->load->model("Panel_Model");
            $form->post('kategori_baslik', true);
            $kategoriBaslik = $form->values['kategori_baslik'];

            if($kategoriBaslik){
                $varmi = $model->kategoriAdiselect($kategoriBaslik);
                if(!$varmi){
                    if ($form->submit()) {
                    $ekle = array('kategori_adi' => $kategoriBaslik); 
                    $sonuc = $model->kategoriinsert($ekle);
                    if($sonuc){
                        echo 'Kategori başarıyla eklendi!';
                        $form->yonlendir(SITE_URL."/admin/kategoriler",1);
                    }else{
                        echo 'Kategori Eklenemedi!';
                         $form->yonlendir(SITE_URL."/admin/kategoriEkle",1);
                    }
                    }
                }else{
                    echo "Bu kategoriyi daha önce eklediniz!";
                    $form->yonlendir(SITE_URL."/admin/kategoriEkle",1);
                }
            }else{
                echo 'Lütfen Kategori başlığını giriniz.';
                $form->yonlendir(SITE_URL."/admin/kategoriEkle",1);
            }
        } else {
            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/kategoriEkle");
            $this->load->view("Template_BackEnd/footer");
        }
    }

    public function kategoriDuzenle() {
           $guncelle = $_POST["guncelle"];
            if($guncelle==1){
            $id = $_POST["id"];
            $form = $this->load->otherClasses('Form');
            $model = $this->load->model("Panel_Model");
            $form->post('kategori_adi', true);
            $kategoriBaslik = $form->values['kategori_adi'];
            if($kategoriBaslik){
                $varmi = $model->kategoriAdiselect($kategoriBaslik);
                if(!$varmi){
                    if ($form->submit()) {
                    $guncelle = array('kategori_adi' => $kategoriBaslik); 
                    $sonuc = $model->kategoriupdate($guncelle,$id);
                    if($sonuc){
                        echo 'Kategori başarıyla güncellendi!';
                        $form->yonlendir(SITE_URL."/admin/kategoriler",1);
                    }else{
                        echo 'Kategori güncellenemedi!';
                         $form->yonlendir(SITE_URL."/admin/kategoriDuzenle",1);
                    }
                    }
                }else{
                    echo "Bu kategoriyi daha önce eklediniz!";
                    $form->yonlendir(SITE_URL."/admin/kategoriDuzenle",1);
                }
            }else{
                echo 'Lütfen Kategori başlığını giriniz.';
                $form->yonlendir(SITE_URL."/admin/kategoriDuzenle",1);
            }
            }
            
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left"); 
        $this->load->view("Template_BackEnd/kategoriDuzenle");
        $this->load->view("Template_BackEnd/footer");
    }

    public function kategoriSil() {
        $id = $_POST["id"];
        $form = $this->load->otherClasses('Form');
        $model = $this->load->model("Panel_Model");
        $sil = $model->kategoridelete($id);
        echo 'Kategori Silindi!';
        $form->yonlendir(SITE_URL."/admin/kategoriler",1);
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/kategoriEkle");
        $this->load->view("Template_BackEnd/footer");
    }

     public function ayar() {
        $model = $this->load->model("Panel_Model");
        $form = $this->load->otherClasses('Form');
        $data = array();
        $data[0]=$model->ayarselect();
        if($_POST){
        $form->post('site_baslik', true);
        $form->post('site_aciklama', true);
        $form->post('is_tel', true);
        $form->post('cep_tel', true);
        $form->post('site_mail', true);
        $form->post('adres', true);
        $form->post('sifre', true);
        $site_baslik = $form->values['site_baslik'];
        $site_aciklama = $form->values['site_aciklama'];
        $is_tel = $form->values['is_tel'];
        $cep_tel = $form->values['cep_tel'];
        $site_mail = $form->values['site_mail'];
        $adres = $form->values['adres'];
        $sifre = $form->values['sifre'];
        error_log($site_baslik);
        error_log($site_aciklama);
        error_log($is_tel);
        error_log($cep_tel);
        error_log($site_mail);
        error_log($adres);
        error_log($sifre);
        
        
        
        if($form->submit()){
            $ayarguncelle = array(
                                'site_baslik' => $site_baslik,
                                'site_aciklama' => $site_aciklama,
                                'is_tel' => $is_tel,
                                'cep_tel' => $cep_tel,
                                'site_mail' => $site_mail,
                                'adres' => $adres,
                                'sifre' => md5($sifre)
                            );
            $sonuc = $model->ayarupdate($ayarguncelle,1);
             error_log($sonuc);
             if($sonuc){
                        echo 'Ayarlar başarıyla güncellendi!';
                        $form->yonlendir(SITE_URL."/admin/ayar",1);
                        }else{
                        echo 'Ayar güncellenemedi!';
                         $form->yonlendir(SITE_URL."/admin/ayar",1);
                    }
        }
            
        }
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/ayar",$data);
        $this->load->view("Template_BackEnd/footer");
    }

    public function urunEkle() {
         
        $model = $this->load->model("Panel_Model");
        $veriler = array();
        $veriler[0]=$model->kategoriselect();
       if ($_POST) {
            $form = $this->load->otherClasses('Form');
            $form->post('urun_aciklama', true);
            $urunAciklama = $form->values['urun_aciklama'];
            $form->post('urun_kategori', true);
            $urunKategori = $form->values['urun_kategori'];

            if($urunAciklama){
                    if ($form->submit()) {
                    $ekle = array('urun_aciklama' => $urunAciklama,'urun_kategori' => $urunKategori); 
                    $sonuc = $model->uruninsert($ekle);
                    if($sonuc){
                        echo 'Ürün başarıyla eklendi!';
                        $form->yonlendir(SITE_URL."/admin/urunler",1);
                    }else{
                        echo 'Ürün Eklenemedi!';
                         $form->yonlendir(SITE_URL."/admin/urunEkle",1);
                    }
                    }
            }else{
                echo 'Lütfen Ürün açıklamasını giriniz.';
                $form->yonlendir(SITE_URL."/admin/urunEkle",1);
            }
        }
            $this->load->view("Template_BackEnd/header");
            $this->load->view("Template_BackEnd/left");
            $this->load->view("Template_BackEnd/urunEkle",$veriler);
            $this->load->view("Template_BackEnd/footer");
        
    }

    public function urunler() {
        $model = $this->load->model("Panel_Model");
        $veriler = array();
        $veriler[0]=$model->urunselect();
        $veriler[1]=$model->kategoriselect();
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/urunler",$veriler);
        $this->load->view("Template_BackEnd/footer");
    }

    public function urunDuzenle() {
           $guncelle = $_POST["guncelle"];
            $model = $this->load->model("Panel_Model");
        $veriler = array();
        $veriler[0]=$model->kategoriselect();
            if($guncelle==1){
            $id = $_POST["id"];
           $form = $this->load->otherClasses('Form');
            $form->post('urun_aciklama', true);
            $urunAciklama = $form->values['urun_aciklama'];
            $form->post('urun_kategori', true);
            $urunKategori = $form->values['urun_kategori'];
            if($urunAciklama){
                    if ($form->submit()) {
                    $guncelle = array('urun_aciklama' => $urunAciklama,'urun_kategori' => $urunKategori); 
                    $sonuc = $model->urunupdate($guncelle,$id);
                    if($sonuc){
                        echo 'Ürün başarıyla güncellendi!';
                        $form->yonlendir(SITE_URL."/admin/urunler",1);
                    }else{
                        echo 'Ürün güncellenemedi!';
                         $form->yonlendir(SITE_URL."/admin/urunDuzenle",1);
                    }
                    }
            }else{
                echo 'Lütfen ürün açıklamasını giriniz.';
                $form->yonlendir(SITE_URL."/admin/urunDuzenle",1);
            }
            }
            
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left"); 
        $this->load->view("Template_BackEnd/urunDuzenle",$veriler);
        $this->load->view("Template_BackEnd/footer");
    }
    
     public function urunSil() {
        $id = $_POST["id"];
        $form = $this->load->otherClasses('Form');
        $model = $this->load->model("Panel_Model");
        $sil = $model->urundelete($id);
        echo 'Ürün Silindi!';
        $form->yonlendir(SITE_URL."/admin/urunler",1);
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sil");
        $this->load->view("Template_BackEnd/footer");
    }

}
?>

