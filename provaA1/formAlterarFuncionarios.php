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
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Alterar Dados de Funcionários</b></font></div></td>
        </tr>
    </table>
    <?php
        if (!isset($_POST["funID"]) && !isset($_POST["enviar"]))
        {
    ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <div class = "container" style="margin-top: 100px">
                <div class="row">
                    <div class = "col s12">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment_ind</i>
                            <input type="text" name="funID" size="10" required>
                            <label for="funID">Código do Funcionário</label>
                        </div>
                    </div>                    
                </div>
                <div class="row center">
                    <div class = "col s12">
                        <button type="submit" class="waves-effect waves-light btn-large blue lighten-1" name="alterar" value="Alterar Dados do Fucnionario"><i class="material-icons left">assignment_ind</i>Alterar Dados do Funcionário</button>
                    <div><br>
                    <div class = "col s12">
                        <button class="waves-effect waves-light btn-large blue lighten-1">Não Lembra o Código?<a href='pesqTodosFuncionarios.php'>Clique Aqui </button>
                    </div>
                </div>
            </div>
        </form>
        <?php
        }
       e
        else if(!isset($_POST["enviar"]))
        {
            $funID = $_POST["funID"];
            $consulta = mysqli_query($conexao, "SELECT funID, funNome, funCargo FROM funcionario WHERE funID = '$funID'");
  
            $linha = mysqli_num_rows($consulta);
            if ($linha == 0) 
        {
            echo "Funcionário não encontrado $funID";
        }
        else
        {
            echo "<div><font face=Arial size=4><b>Funcionário Encontrado:</b></font></div>";
          
            $campoFuncionario = mysqli_fetch_row($consulta);            
            $funNome = $campoFuncionario[1];
            $funCargo = $campoFuncionario[2];
        ?>
            <form name="formFuncionarios" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center" class="striped">
                <tr>
                    <td colspan="15"><div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Funcionários Cadastrados</font></b></font></div></td>
                </tr>
                <tr><td width="5%"><div align="center"><b><font face="Arial" size="2">Código do Funcionário</font></b></div></td>                    
                    <td width="5%"><div align="center"><b><font face="Arial" size="2">Nome do Funcionário</font></b></div></td>
                    <td width="5%"><div align="center"><b><font face="Arial" size="2">Cargo do Funcionário</font></b></div></td>
                </tr>
                <tr>
                    <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $funID;?></font></td>
                    <td width="20%" height="25"><b><font face="Arial" size="2"><input type="text" name="funNome" size="42" required value="<?php echo $funNome;?>"></font></td>
                    <td width="10%" height="25"><b><font face="Arial" size="2"><input type="text" name="funCargo" required value="<?php echo $funCargo;?>"></font></td>                    
                </tr>
            </table>
            <input type ="hidden" name="funID" value="<?php echo $funID;?>">
            <input type ="hidden" name="enviar" value="S"><br>
            <div class = "col s12 center">
                <button type="submit" class="waves-effect waves-light btn-large blue lighten-1" name="alterar" value="Alterar Dados do Funcionario"><i class="material-icons left">assignment_ind</i>Alterar Dados do Funcionário</button>
            </div>
            </form>
            <?php
                mysqli_close($conexao);
        }
        }
        else 
        {
            $funID = $_POST["funID"];
            $funNome = $_POST["funNome"];
            $funCargo = $_POST["funCargo"];
            $altera = mysqli_query($conexao, "UPDATE funcionario SET funNome='$funNome', funCargo='$funCargo' WHERE funID='$funID'");
          
            if (mysqli_affected_rows($conexao) > 0)
            {
                echo "<p align='center'>Dados do Funcionário $funNome alterados com sucesso!!! Verifique abaixo a alteração feita.</p>";
                echo "<table width='100%' border='0' cellspacing='1' cellpadding='0' align='center' class='striped'>";
                    echo "<tr>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial'csize='2'>Código do Funcionário</font></b></div></td>";
                        echo "<td width='20%'><div align='center'><b><font face='Arial' size='2'>Nome do Funcionário</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>Cargo do Funcionário</font></b></div></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td width='10%' height='25'><b><font face='Arial' size='2'>$funID</font></td>";                        
                        echo "<td width='20%' height='25'><b><font face='Arial' size='2'>$funNome</font></td>";                        
                        echo "<td width='10%' height='25'><b><font face='Arial' size='2'>$funCargo</font></td>";
                    echo "</tr>";
                echo "</table>";
            }
            else
            {
                $erro=mysqli_error($conexao );
                echo "<p align='center'>Erro: Nenhum dado foi alterado!!$erro</p>";
            }
        mysqli_close($conexao);
    }
?>
<?php
    include_once 'includes/rodape.php';
?>
