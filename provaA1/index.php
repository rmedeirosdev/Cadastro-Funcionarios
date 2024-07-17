<?php
         include_once 'includes/cabecalho.php';
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
                <li><a href="relatorioFuncionarios.php">Relatorio de Funcionários PDF</a>
            </ul>
        </div>
    </nav>
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="formIncluirFuncionarios.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
        <li><a href="formAlterarFuncionarios.php"><i class="material-icons left">done</i>Alterar</a>
        <li><a href="formExcluirFuncionarios.php"><i class="material-icons left">delete</i>Excluir</a>
        <li><a href="menuPesquisarFuncionarios.php"><i class="material-icons left">search</i>Pesquisar</a>
        <li><a href="relatorioFuncionarios.php" ><i class="material-icons left">print</i>Relatorio de Funcionários PDF</a>
    </ul>
<div>

<div>
     <ul>
          <li class="row"><a href="formIncluirFuncionarios.php"><i class="material-icons left">assignment_turned_in</i>Incluir</a>
          <li class="row"><a href="formAlterarFuncionarios.php"><i class="material-icons left">done</i>Alterar</a>
          <li class="row"><a href="formExcluirFuncionarios.php"><i class="material-icons left">delete</i>Excluir</a>
          <li class="row"><a href="menuPesquisarFuncionarios.php"><i class="material-icons left">search</i>Pesquisar</a>
     </ul>          
</div>
<?php
  include_once 'includes/rodape.php';
?>