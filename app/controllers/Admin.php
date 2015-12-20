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
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sayfalar");
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfaEkle() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sayfaEkle");
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfaDuzenle() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sayfaDuzenle");
        $this->load->view("Template_BackEnd/footer");
    }

    public function sayfaSil() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/sayfaSil");
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

        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/ayar");
        $this->load->view("Template_BackEnd/footer");
    }

    public function urunEkle() {

        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/urunEkle");
        $this->load->view("Template_BackEnd/footer");
    }

    public function urunler() {

        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/urunler");
        $this->load->view("Template_BackEnd/footer");
    }

}
?>

