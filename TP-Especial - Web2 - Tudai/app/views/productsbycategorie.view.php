<?php
require_once ('Smarty.class.php');

class ProductsByCategorieView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showProductsByCategorie($productosPorCategoria) {
        // asigno variables al tpl smarty
       $this->smarty->assign('count', count($productosPorCategoria));
       $this->smarty->assign('productosPorCategoria', $productosPorCategoria); 

        // mostrar el tpl
        $this->smarty->display('productsByCategorieTable.tpl');
    }

}