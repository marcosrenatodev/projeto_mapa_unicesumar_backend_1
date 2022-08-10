<?php
include "layout/header.php";
include("dados/receitas.php");

$receita = (int) $_GET["id"];
$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$img = $_GET['imagem'];
?>


<div class="main">
  <div>
    <img src="<?php echo $img ?>" width="430" height="270" />
    <h3><?php echo $nome ?></h3>
    <p> <?php echo $descricao ?></p>
    <a href="javascript:history.back()">Voltar</a>
  </div>


</div>















<?php
include "layout/footer.php";
?>