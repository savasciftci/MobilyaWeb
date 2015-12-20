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
                $form->post('email', TRUE);
                $form->post('password', TRUE);
                $loginMail = $form->values['email'];
                $loginPassword = $form->values['password'];
                if ($loginMail != "") {
                    if (filter_var($loginMail, FILTER_VALIDATE_EMAIL)) {
                        if ($loginPassword != "") {
                            $result = $model->loginselect($loginMail, md5($loginPassword));

                            if ($result) {
                                $ID = $result[0]["id"];
                                $email = $result[0]["mail"];
                                Session::set("login", TRUE);
                                Session::set("email", $email);
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