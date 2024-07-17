<?php
         require_once("includes/conectarBD.php");
         include_once 'includes/cabecalho.php';
         echo "Data/Hora Atual: ";
         require 'includes/data.inc';
?>
<div class="nav-bar-fixed">
    <nav>
        <div class="nav-wrapper blue lighten-1">
            <a href="#!" class="brand-logo">Menu de Opções</a>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="navbar-itens" class="right hide-on-med-and-down">
                <li><a href="formIncluirFuncionarios.php">Incluir</a>
                <li><a href="formAlterarFuncionarios.php">Alterar</a>
                <li><a href="formExcluirFuncionarios.php">Excluir</a>
                <li><a href="menuPesquisarFuncionarios.php">Pesquisar</a>
                <li><a class="dropdown-trigger" data-target="dropdown">Voltar<i class="material-icons">arrow_drop_down</i></a></li>
            </ul>
        </div> 
    </nav>
    <ul id="dropdown" class="dropdown-content">
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Funcionários</a></li>
    </ul>    
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="formIncluirFuncionarios.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
        <li><a href="formAlterarFuncionarios.php"><i class="material-icons left">done</i>Alterar</a>
        <li><a href="formExcluirFuncionarios.php"><i class="material-icons left">delete</i>Excluir</a>
        <li><a href="menuPesquisarFuncionarios.php"><i class="material-icons left">search</i>Pesquisar</a>
        <li class="divider" tabindex="-1"></li>
        <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Funcionários</a></li>
    </ul>
</div>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Lista Todos os Funcionários</font></div></td>
    </tr>
    </table>
<?php
     $sqlFuncionario = mysqli_query($conexao, "SELECT funID, funNome, funCargo FROM funcionario".
     
     " ORDER BY funID") or die ("Não foi possível realizar a consulta.");
?>
<?php
     
     if(mysqli_num_rows($sqlFuncionario) > 0)
     {
?>
        <table class="striped">
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Funcionários Cadastrados</font></b></font></div></td>
        </tr>
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Utilize as Teclas Ctlr+F para Encontrar o Código ou Nome do Funcionário</font></b></font></div></td>
        </tr>
        <tr>
            <td><b><font face="Arial" size="2">Código do Funcionário</font></b></div></td>
            <td><b><font face="Arial" size="2">Nome do Funcionário</font></b></div></td>            
            <td><b><font face="Arial" size="2">Cargo do Funcionário</font></b></div></td>
        </tr>
<?php
        
        while($arrayFuncionario = mysqli_fetch_array($sqlFuncionario))
        {
?>
        <tr>
            <td><b><font face="Arial" size="2"><?php echo $arrayFuncionario['funID'];?></font></td>            
            <td><b><font face="Arial" size="2"><?php echo $arrayFuncionario['funNome'];?></font></td>
            <td><b><font face="Arial" size="2"><?php echo $arrayFuncionario['funCargo'];?></font></td>
        </tr>
<?php
        
        }
?>
        </table>
<?php
     }
     else
     {
         echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mas não foram encontrados nenhum funcionário<br><br></font></div>";
     }
?>

<?php
         include_once 'includes/rodape.php';
?>