<?php

class Usuario
{
  private $id;
  private $usuario;
  private $senha;
  private $objFunc;
  private $objConn;
  public function __construct()
  {
    $this->objFunc =  new Funcoes();
    $this->objConn =  new Conexao();
  }
  public function __set($atribute, $value)
  {
    $this->atribute = $value;
  }
  public function __get($atribute)
  {
    return $this->$atribute;
  }

  public function verificaUsuario($data)
  {
    try {
      $this->usuario = $data['inputUsuario'];
      $this->senha = $data['inputSenha'];
      $conn = $this->objConn->conectar();
      $sql = "select nm_usuario,ds_senha from usuario where nm_usuario = :usuario and ds_senha = :senha";
      $consulta = $conn->prepare($sql);
      $consulta->bindValue(':usuario', $this->usuario, PDO::PARAM_STR);
      $consulta->bindValue(':senha', $this->senha, PDO::PARAM_STR);
      $consulta->execute();
      if ($consulta->rowCount() == 1) 
      {
        session_start();
        while($param = $consulta->fetch(PDO::FETCH_ASSOC))
        {
     
          $_SESSION['usuario'] = $param['nm_usuario'];
          // $_SESSION['senha'] = $param['ds_senha'];
        }   
        return TRUE;
      }
      else { 
        return FALSE;
      }
    } catch (PDOException $erro) {
      echo "Erro: " . $erro->getMessage() . "</br>";
      echo "Arquivo: " . $erro->getFile() . "</br>";
      echo "Linha: " . $erro->getLine() . "</br>";
    }
  }
  public function verificasession()
  {
    if (!isset($_SESSION['usuario'])) {
  
      header('Location:login');
        echo "<script> 
        ('#msg').addClass('alert alert-danger').text('necessario login para acessar').fadeIn(1000);
        </script>"; 
    }
  }
 
}