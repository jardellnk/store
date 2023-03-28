
<!-- Conecta ao banco de dados -->
<?php include_once("conexao.php"); ?>

<!-- Carrega as variaveis do banco de dados -->
<?php include_once("script/produtos.php"); ?>

<!-- carrega header basico -->
<?php include_once("includes/header.php"); ?>

<!-- Menu de navegação superior e botao de pesquisar -->
<?php include_once("includes/menu.php"); ?>

<!-- carrega promocional da loja Banner -->
<?php include_once("includes/banner.php"); ?>



<body>
  <!-- carrega VITRINE basica-->

    <div class="container theme-showcase" role="main">
      <div class="page-header">      </div>
        <div class="row">
          <?php while ($rows_produtos = mysqli_fetch_assoc($resultado_produtos)) { ?>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
              <!--  <img src="imagens/produtos/<?php echo $rows_produtos['imagem']; ?>.jpg" alt="..." height="250" width="250"> -->
                <img src="imagens/produtos/produtos.jpg" alt="..." height="250" width="250"> 
                <div class="caption text-center">
                  <a href="detalhes.php?id_produtos=<?php echo $rows_produtos['idProdutos']; ?>">
                    <h4><?php echo $rows_produtos['descricao']; ?></h4><?php echo 'Apartir de R$ ' . $rows_produtos['precoVenda']; ?><br><br>
                  </a>
                  <select class="custom-select custom-select-sm col-md-4" id="
                  <?php echo $rows_produtos['idProduto']; ?>" name="<?php echo $rows_produtos['idProduto']; ?>">
                    <?php for ($i = 1; $i <= $rows_produtos['estoque']; $i++) { ?>
                      <option value=" <?php echo $i ?> "> <?php echo $i ?></option>
                    <?php } ?>
                  </select>

                  <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $rows_produtos['idProdutos']?>" class="card-link" role="button">Add Carrinho</a> </p>
                <!--  <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $rows_produtos['idProdutos']?>" class="card-link">Comprar</a>
              -->  </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


<!-- CONTA AS PAGINAS DE PRODUTOS E COLOCA O NUMERO EM BAIXO -->
    <?php
      $pagina_anterior = $pagina - 1;
      $pagina_posterior = $pagina + 1;
    ?>
    
    <nav class="text-center">
      <ul class="pagination">
        <li>
          <?php
          if($pagina_anterior != 0){ ?>
            <a href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          <?php }else{ ?>
            <span aria-hidden="true">&laquo;</span>
        <?php }  ?>
        </li>
        <?php
        //Apresentar a paginacao
        for($i = 1; $i < $num_pagina + 1; $i++){ ?>
          <li><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php } ?>
        <li>
          <?php
          if($pagina_posterior <= $num_pagina){ ?>
            <a href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
              <span aria-hidden="true">&raquo;</span>
            </a>
          <?php }else{ ?>
            <span aria-hidden="true">&raquo;</span>
        <?php }  ?>
        </li>
      </ul>
    </nav>
  </div>


  <!-- Footer -->
  <?php include_once("includes/footer.php"); ?>
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
