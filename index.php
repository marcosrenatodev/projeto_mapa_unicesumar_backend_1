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
        <a href="pagina.php?id=<?= $value['id']  ; ?>"><img src=<?= $value['imagem']; ?> width="320" height="180"></a>
        <h4 class="tituloReceita"><?= $value['nome']; ?></h4>
        
      </div>
    <?php
    $receita_clique = $value;
    }
    ?>
    <!-- array(4) { ["id"]=> string(1) "1" 
      ["nome"]=> string(28) "Arroz com Bolinhos de Batata" 
      ["descricao"]=> string(68) "Lorem Ipsum has been the industry standard dummy text ever since the" 
      ["imagem"]=> string(22) "img/arroz_bolinhos.jpg" } -->

  </div>
</div>




<?php
include "layout/footer.php";
?>