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
<div>
<table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Pesquisar por Código, Nome e Cargo de Funcionários - Ipil</b></font></div></td>
    </tr>
</table>      
<form method="POST" action="resultadoPesquisarTermosFuncionarios.php">
<div class = "container" style="margin-top: 100px">
    <b>Selecione Código, Nome ou Cargo do Funcionário:<br>
    <select name="funItemPesquisa">
        <option value="funID"><b>Código</option>    
        <option value="funNome"><b>Nome</option>
        <option value="funCargo"><b>Cargo</option>
        </select><br/><br/>
        <div class = "col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">keyboard</i>
                <input type="text" name="funTermoPesquisa" required>
                <label for="funTermoPesquisa">Digite um Termo Conforme Item Escolhido Acima</label>
            </div>
        <b></br>
        <button type="submit" class="waves-effect waves-light btn-large blue lighten-1" name="pesqFuncionario" value="Pesquisar"><i class="material-icons left">assignment_ind</i>Pesquisar Funcionário</button>
    </div>
</form>

<?php
         include_once 'includes/rodape.php';
?>