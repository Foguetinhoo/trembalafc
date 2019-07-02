<?php
include_once 'autoload.php';

class InscritoController {
    private $objIns;
    public function __construct()
    {
        $this->objIns = new Inscrito();
        $this->objIns->addInscrito($_POST);
    }
}
$controlle = new InscritoController();