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
           <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center" class="striped">
                  <tr>
                          <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Funcionários</b></font></div></td>
                  </tr>
           </table><br/>
           <?php
            
                  $nomeFun = $_POST["funNome"];
                  $cargoFun = $_POST["funCargo"];

                  $sql = mysqli_query($conexao,"INSERT INTO funcionario (funNome, funCargo) VALUES ('$nomeFun', '$cargoFun')") or die("Erro no comando SQL!!!<br/> <b><a href='formIncluirFuncionarios.php'><b>Voltar Para a Inclusão de Funcionários</a><br/>".mysqli_error($conexao));
                  echo "<div align=center>Os dados do Funcionário $nomeFun foram cadastrados com sucesso!!! Veja abaixo os dados cadastrados.<br/><br/>";
                  echo "<table class='striped'>";
                  echo "<tr>";
                  echo "<th><div>Nome do Funcionário</div></th>";
                  echo "<th><div>Cargo do Funcionário</div></th>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>$nomeFun</font></td>";
                  echo "<td>$cargoFun</font></td>";
                  echo "</tr>";
                  echo "</table><br/>";
           ?>
</div>
<?php
         include_once 'includes/rodape.php';
?>
