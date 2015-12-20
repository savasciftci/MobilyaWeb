<?php

class Home extends Controller {

    public function __construct() {
        error_log("geliyormu");
        parent::__construct();
    }

    public function index() {
        $this->front();
    }

    public function front() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/home");
        $this->load->view("Template_FrontEnd/footer");
    }

}
?>

