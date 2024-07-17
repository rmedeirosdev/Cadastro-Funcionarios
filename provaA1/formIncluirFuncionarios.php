<?php
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
                                   <li><a href="menuPesquisarClientes.php">Pesquisar</a>
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
                  <li><a href="menuPesquisarClientes.php"><i class="material-icons left">search</i>Pesquisar</a>
                  <li class="divider" tabindex="-1"></li>
                  <li><a href="index.php"><i class="material-icons left">person_pin</i>Gerenciamento de Funcionários</a></li>
           </ul>
<div>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
           <tr>
                  <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Funcionários</b></font></div></td>
           </tr>
</table>        
<form name="formFuncionarios" id="formFuncionarios" method="POST" action="incluirFuncionarios.php">
<div class = "container" style="margin-top: 100px">               
           <div class="row">
                  <div class = "col s12">
                          <div class="input-field col s12">
                                   <i class="material-icons prefix">keyboard</i>
                                   <input type="text" name="funNome" required>
                                   <label for="funNome">Nome:</label>
                          </div>
                  </div>
           </div>                 
           <div class="row">
                  <div class = "col s12">
                          <div class="input-field col s12">
                                   <i class="material-icons prefix">keyboard</i>
                                   <input type="text" name="funCargo" required>
                                   <label for="funCargo">Cargo:</label>
                          </div>
                  </div>
</div><br/><br/>
<div align="center">
           <button type="submit" class="waves-effect waves-light btn-large blue lighten-1" name="cadFuncionario" value="Cadastrar Funcionario"><i class="material-icons left">assignment_ind</i>Cadastrar Funcionário</button>
</div>
</form>
</div>
<?php
         include_once 'includes/rodape.php';
?>