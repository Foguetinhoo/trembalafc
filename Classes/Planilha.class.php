<?php
		class Planilha{
			private $conexao;
			public function  __construct()
			{
				$this->conexao =  new Conexao();	
			} 


		public function gerarPlanilha(){
		
					$arquivo = 'listaunidos.xls';
				$html = '';
			$html .= '<table border="1">';
			$html .= '<tr>';
			$html .= '<td colspan="5">Lista de Participantes</tr>';
			$html .= '</tr>';		
			$html .= '<tr>';
			$html .= '<td><b>ID</b></td>';
			$html .= '<td><b>Nome</b></td>';
			$html .= '<td><b>Data de Nascimento</b></td>';
			$html .= '<td><b>CPF</b></td>';
			$html .= '<td><b>RG</b></td>';
			$html .= '</tr>';
		  
			$query = "SELECT cod_inscrito,nm_inscrito,date_formate(dt_nascimento,'%d/%m/%Y') as dataBr,cod_cpf,cod_rg FROM inscrito";
			$select = $this->conexao->conectar()->prepare($query);
			$select->execute();
			while ($linha = $select ->fetch(PDO::FETCH_ASSOC)) 
			{
			
			  // $data = $linha['dt_nascimento'];
			  // #retira os traços do padrao do banco
			  // $inversao = explode('-', $data);
			  // #aqui faz a inversao da data	
			  // $datanascimento = $inversao[2].'/'.$inversao[1].'/'.$inversao[0];
		  
			  $html .='<tr>';
				  $html .='<td>'.$linha['cod_inscrito'].'</td>';
			  $html .= '<td>'. $linha['nm_inscrito'].'</td>';
			  $html .= '<td>'. $linha['dateBr'].'</td>';
			  $html .= '<td>'.$linha['cod_cpf'].'</td>';
			   $html .='<td>' .$linha['cod_rg'].'</td>';
			  $html .='</tr>';
			}
			header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
			header ("Cache-Control: no-cache, must-revalidate");
			header("Content-type: text/html; charset=utf-8");
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'.$arquivo.'"');
		
			header ("Content-Description: PHP Generated Data" );
			// Envia o conteúdo do arquivo
			echo $html;
			// header ("location:../_adm/inscritos.php" );
		exit;
		
				}
		
		}
		
?>