<?php 
spl_autoload_register(function($classe){
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once "$path/Classes/$classe.class.php";
    require_once "$path/Classes/fpdf181/fpdf.php";
});
