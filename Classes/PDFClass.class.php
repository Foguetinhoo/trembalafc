<?php

class PDFClass
{
    private $ObjPDF;
    private $ObjConn;
    private $ObjFunc;
    public function __construct()
    {
        $this->ObjPDF = new FPDF("P");
        $this->ObjConn = new Conexao();
        $this->ObjFunc = new Funcoes();
    }

    public function geraPDF()
    {

        $this->ObjPDF->AddPage();
        $arquivo = "Inscritos.pdf";
        $fonte = "Courier";
        $style = "B";
        $border = "1";
        $alignce = "C";
        $alignL = "L";
        /*Gerar tipo de arquivo     
        I:Enviar o arquivo para o navegador. O visualizador de PDF é usado se disponível;
        D:Enviar o arquivo para o navegador e forçar o arquivo, um download com o nome especificado;
        F:Salva o arquivo local com o nome dado por name(pode incluir um caminho)
        S:Retorna documento como uma string
        valor padrao: I
      */
        $tipo_arquivo = "D";
    
        $query = "SELECT cod_inscrito,nm_inscrito,date_format(dt_nascimento,'%d/%m/%Y') as dataBr,cod_cpf,cod_rg FROM inscrito";
        $select = $this->ObjConn->conectar()->prepare($query);
        $select->execute();
        $linha = $select->fetchAll();

        // $this->ObjPDF->SetY(40);
        $this->ObjPDF->Image('../Resources/images/logo.png',60,11,28,28);
        // TItulo da tabela
        $this->ObjPDF->SetFont($fonte, $style, 13);
        $this->ObjPDF->Cell(190, 30, 'Trem Bala FC', $border, 1, $alignce);
        $this->ObjPDF->SetFont('Arial', '', 12);
        $this->ObjPDF->Cell(7, 7, '', 'L,B,R', 0, $alignce);
        $this->ObjPDF->Cell(73, 7, 'Nome Completo', 'L,B,R', 0, $alignce);
        $this->ObjPDF->Cell(30, 7, 'Data Nasc.', 'L,B,R', 0, $alignce);
        $this->ObjPDF->Cell(40, 7, 'CPF', 'L,B,R', 0, $alignce);
        $this->ObjPDF->Cell(40, 7, 'RG', 'L,B,R', 1, $alignce);

        foreach ($linha as $result) {
            $this->ObjPDF->SetFont('Arial', '', 11);
            $this->ObjPDF->Cell(7, 8, $result['cod_inscrito'], 'L,B,R', 0, $alignce);
            $this->ObjPDF->Cell(73, 8, $this->ObjFunc->tratamentCharacter($result['nm_inscrito'], 1), 'L,B,R', 0, $alignL);
            $this->ObjPDF->Cell(30, 8, $result['dataBr'], 'L,B,R', 0, $alignce);
            $this->ObjPDF->Cell(40, 8, $result['cod_cpf'], 'L,B,R', 0, $alignce);
            $this->ObjPDF->Cell(40, 8, $result['cod_rg'], 'L,B,R', 1, $alignce);
        }
        $this->ObjPDF->Output($tipo_arquivo, $arquivo, true);
    }
}
