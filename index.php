<?php
include "layout/header.php";
include("dados/receitas.php");
//var_dump($receitas);

?>
<div class="main">
  <div class="grid-container">
    <?php
    foreach ($receitas as $key => $value) {
    ?>
      <div class="grid-item">
        <a href="pagina2.php?id=<?= $value['id']; ?>"><img src=<?= $value['imagem']; ?> width="250" height="200"></a>
        <h4 class="tituloReceita"><?= $value['nome']; ?></h4>
        <p><?= substr($value['descricao'], 0, 150); ?>...</p>
      </div>
    <?php
    }
    ?>

  </div>
</div>




<?php
include "layout/footer.php";
?>