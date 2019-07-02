<?php
include_once 'autoload.php';

class PDFController{
    private $obPDF;

    public function __construct()
    {
        $this->obPDF = new PDFClass();
        $this->obPDF->geraPDF();
    }
}
$class = new PDFController();