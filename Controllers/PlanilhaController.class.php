<?php
include_once 'autoload.php';
class PlanilhaController{
    private $objPlan;

    public  function __construct()
    {
        $this->objPlan = new Planilha();   
        $this->objPlan->gerarPlanilha(); 
    }

}
$class = new PlanilhaController();