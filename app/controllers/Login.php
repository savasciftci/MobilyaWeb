<?php

class Login extends Controller {

    public function __construct() {
        //error_log("admin.php");
        parent::__construct();
    }

    public function index() {
        $this->login();
    }

    public function login() {
        if (session::get("login") == true) {
            header("location:" . SITE_URL . "/Admin");
        } else {
            if ($_POST) {
                $form = $this->load->otherClasses('Form');
                $model = $this->load->model("Panel_Model");
                $form->post('site_mail', TRUE);
                $form->post('password', TRUE);
                $site_mail = $form->values['site_mail'];
                $loginPassword = $form->values['password'];
                if ($site_mail != "") {
                    if (filter_var($site_mail, FILTER_VALIDATE_EMAIL)) {
                        if ($loginPassword != "") {
                            $result = $model->loginselect($site_mail, md5($loginPassword));

                            if ($result) {
                                $ID = $result[0]["id"];
                                $email = $result[0]["$site_mail"];
                                Session::set("login", TRUE);
                                Session::set("site_mail", $site_mail);
                                Session::set("ID", $ID);
                                header("location:" . SITE_URL . "/Admin");
                            } else {
                                $this->load->view("Entry/loginForm");
                            }
                        } else {
                            echo "şifre boş girilemez";
                        }
                    } else {
                        echo "mail formatında değil";
                    }
                } else {
                    echo "mail boş olmaz";
                }
            } else {
                $this->load->view("Entry/loginForm");
            }
        }
    }

    public function logout() {
        session::destroy();
        $this->load->view("Entry/loginForm");
    }

}

?>