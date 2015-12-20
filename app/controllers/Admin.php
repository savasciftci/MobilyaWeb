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
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/kategoriler");
        $this->load->view("Template_BackEnd/footer");
    }
      public function kategoriEkle() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/kategoriEkle");
        $this->load->view("Template_BackEnd/footer");
    }
    public function kategoriDuzenle() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/kategoriDuzenle");
        $this->load->view("Template_BackEnd/footer");
    }
    public function kategoriSil() {
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

