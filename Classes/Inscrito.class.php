<?php
class Inscrito
{
  private $nome;
  private $nascimento;
  private $cpf;
  private $rg;
  private $objFunc;
  private $objConn;
  public function __construct()
  {
    $this->objFunc =  new Funcoes();
    $this->objConn =  new Conexao();
  }
  public function __set($atribute, $value)
  {
    $this->atribute =  $value;
  }
  public function __get($atribute)
  {
    return $this->$atribute;
  }


  public function addInscrito($data)
  {
    try {
      if (!empty($data)) {
        $consulta =  $this->objConn->conectar();
        $sql = "insert into inscrito(nm_inscrito ,dt_nascimento,cod_rg,cod_cpf)values(:nome,:nascimento,:rg,:cpf)";

        $this->nome =  $this->objFunc->tratamentCharacter($data["nome"], 1);
        $this->nascimento =  $this->objFunc->transformDate($data['datanascimento'], 'default');
        $this->cpf = $data["cpf"];
        $this->rg = $data["rg"];
        $insert =  $consulta->prepare($sql);
        $insert->bindParam(':nascimento', $this->nascimento, PDO::PARAM_STR);
        $insert->bindParam(':nome', $this->nome, PDO::PARAM_STR);
        $insert->bindParam(':rg', $this->rg, PDO::PARAM_STR);
        $insert->bindParam(':cpf', $this->cpf, PDO::PARAM_STR);
        if ($insert->execute()) {
          if ($insert->rowCount() !== 0) {
            return TRUE;
          }
        } else {
          return 'ERRO';
        }
      }
    } catch (PDOException $erro) {
      return "Erro: " . $erro->getMessage() . "</br>";
    }
  }

  public function selectLista()
  {
    try {
      $consulta =  $this->objConn->conectar();
      $sql = "select cod_inscrito, nm_inscrito ,date_format(dt_nascimento,'%d/%m/%Y') as dateAtual ,cod_rg,cod_cpf from inscrito";
      $select =  $consulta->prepare($sql);
      $select->execute();
      while ($result =  $select->fetch(PDO::FETCH_ASSOC)) { 
      ?>
        <tr>
             <th scope="row"><?php echo $result['cod_inscrito']; ?></th>
            <td><?php echo $result['nm_inscrito']; ?></td>
                <td><?php echo $result['dateAtual']; ?></td>
                <td><?php echo $result['cod_cpf']; ?></td>
                <td><?php echo $result['cod_rg']; ?></td>  
        </tr><?php
                
        }
      } catch (PDOException $erro) {
        return "Erro: " . $erro->getMessage() . "</br>";
      }
    }
    
  }
