<?php
include "layout/header.php";
include("dados/receitas.php");

$receita_id = (int) $_GET["id"];
var_dump($receita_id)
?>



<div class="main">
  <div class="view-recipe">
    <?php
    foreach ($receitas as $key => $value) {

      if ($value['id'] == $receita_id) {
    ?>
        <img src=<?= $value['imagem']; ?> width="430" height="270">
        <h4 class="tituloReceita"><?= $value['nome']; ?></h4>
        <p> <?php echo $value['descricao'] ?></p>
        <p> <?php echo $value['tamanho'] ?></p>
        <p> <?php echo $value['preco'] ?></p>
        <a href="javascript:history.back()">Voltar</a>

    <?php
      }
    }
    ?>
  </div>

</div>













<?php
include "layout/footer.php";
?>