<?php
include "layout/header.php";
include("dados/receitas.php");

$receita_id = (int) $_GET["id"];
var_dump($receita_id)
?>



<div class="main-recipe">
  <div class="view-recipe">
    <?php
    foreach ($receitas as $key => $value) {

      if ($value['id'] == $receita_id) {
    ?>
        <div class="image">
          <img src=<?= $value['imagem']; ?> style="height: 360px;">
        </div>
        <div class="box-info">
          <div>
            <h1 class="tituloReceita"><?= $value['nome']; ?></h1>
          </div>
          <div class="descricao">
            <p> <?php echo $value['descricao'] ?></p>
          </div>
          <div class="tamanho">
            <p> <?php echo $value['tamanho'] ?></p>
          </div>
          <div>
            <p class="preco"> <?php echo $value['preco'] ?></p>
            <p class="preco"> <span><em>0800 777 7000 </em> <img src="img/whatsapp-icon-seeklogo.com.svg" alt="whatsapp icon" width="30px"></span></p>
          </div>
          <div class="voltar">
            <a href="javascript:history.back()" class="btn">Voltar</a>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</div>














<?php
include "layout/footer.php";
?>