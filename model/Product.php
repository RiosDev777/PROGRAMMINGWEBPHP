<?php 
class Product {
    var $code;
    var $name;
    int $stock;
    double $valorUnitario;

    function __construct($code, $name, $stock, $valorUnitario) {
        $this->code = $code;
        $this->name = $name;
        $this->stock = $stock;
        $this->valorUnitario = $valorUnitario;
    }
}
?>