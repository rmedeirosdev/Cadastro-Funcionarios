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
    <table width="55%" cellspacing="0" cellpadding="0" border="0">
        <tr>                 
            <td width="130%" align="center"><b>Menu Pesquisar Funcionários</font></td>                  
        </tr>        
    </table>
    <ul>
        <li class="row"><a href="pesqTodosFuncionarios.php"><i class="material-icons left">search</i>Todos</a>
        <li class="row"><a href="formPesquisarTermosFuncionarios.php"><i class="material-icons left">search</i>Escolher Termo de Pesquisa</a>
    </ul>
</div>


<?php
         include_once 'includes/rodape.php';
?>