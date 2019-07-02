<?php
include 'autoload.php';

class LoginController{
private $dados;
private $ObjLogin;
    public function __construct()
    {
        $this->ObjLogin = new Usuario(); 
        $this->dados = $_POST;
    }
    public function Logar(){
      
            if($this->ObjLogin->verificaUsuario($this->dados)){
                print('OK');
            }else{
                print('ERRO');
            }
        }
    }
$login =  new LoginController();
$login->Logar();