<?php
    //Fará a conexão com o nosso banco de dados imaginaria
    require_once("includes/conectarBD.php");
    define('fpdf186/FPDF_FONTPATH', 'font/');
    require('fpdf186/fpdf.php');
    //Irá instanciar a classe. P=Retrato, mm =tipo de medida utilizada, no caso milímetros, tipo de folha = A4
    $pdfFuncionario = new FPDF("P","mm","A4");
    $pdfFuncionario->AddPage();
    //Aqui, estamos definindo a fonte a ser utilizada
    $pdfFuncionario->SetFont('Arial', 'B', 10);
    //Aqui, estamos definindo o cabeçalho do nosso relatório
    //SetY: Move a abscissa atual de volta para margem esquerda e define a ordenada.
    //Se o valor passado for negativo, ele será relativo à margem inferior da página. sintaxe: SetY(float y)
    $pdfFuncionario->SetY("13");
    $pdfFuncionario->Cell(0,5,utf8_decode('Loucuras Produtos de Informática Ltda - IPIL'),0,1,'R');
    $pdfFuncionario->Cell(0,0,'',1,1,'L');
    //Ln: Faz uma quebra de linha. A abscissa corrente volta para a margem 
    //esquerda e a ordenada é somada ao valor passado como parâmetro.
    //sintaxe: Ln([float h])
    $pdfFuncionario->Ln(8);
    //Aqui, estamos definindo os Labels de Título do formulário
    $pdfFuncionario->Cell(20, 5, 'ID');
    $pdfFuncionario->SetX(30);
    $pdfFuncionario->Cell(20, 5, 'Nome');
    $pdfFuncionario->SetX(85);
    $pdfFuncionario->Cell(20, 5, 'Cargo');
    $pdfFuncionario->SetX(125);
    // Busca os dados no banco de dados
    $busca = mysqli_query($conexao, "SELECT funID, funNome, funCargo FROM funcionario");
    while ($resultado = mysqli_fetch_array($busca))
    {
        $pdfFuncionario->ln(8);
        $pdfFuncionario->Cell(20, 5, $resultado['funID']);
        $pdfFuncionario->SetX(30);
        $pdfFuncionario->Cell(20, 5, $resultado['funNome']);
        $pdfFuncionario->SetX(85);
        $pdfFuncionario->Cell(20, 5, $resultado['funCargo']);
        $pdfFuncionario->SetX(125);
    }
    // Aqui, estamos definindo o rodapé posicionado verticalmente com 270 mm 
    //e seus respectivos largura, altura e alinhamento
    $pdfFuncionario->SetY("270");
    //Aqui, buscaremos a data atual do sistema
    $data = date("d/m/Y");
    $rodape = "impresso em: ".$data;
    $logo = "Ipil";
    $pdfFuncionario->Cell(0,0,'',1,1,'L');
    $pdfFuncionario->Cell(0,5, $logo ,0,0,'L');
    $pdfFuncionario->Cell(0,5, $rodape ,0,1,'R');
    //Aqui, é a saída do arquivo PDF
    $pdfFuncionario->Output( );
?>
