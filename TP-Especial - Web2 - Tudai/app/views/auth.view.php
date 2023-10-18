<?php
require_once('libs/smarty/Smarty.class.php');

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showFormLogin($error = "") {
        $this->smarty->assign("error", $error);
        $this->smarty->display('formLogin.tpl');
    }

    function showListProduct(){
        $this->smarty->display('productList.tpl');
    }
}