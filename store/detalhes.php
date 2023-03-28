<?php include_once("conexao.php"); ?>

<!-- script superior -->
<?php include_once("script/produtos.php"); ?>
<!-- header -->
<?php include_once("includes/header.php"); ?>
<!-- Menu de navegação superior -->
<?php include_once("includes/menu.php"); ?>


<br><br>
</head>

<body>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-4">
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="imagens/produtos/produtos.jpg" alt="..." height="10" width="10">
          <!-- <img class="card-img-top img-fluid" src="imagens/produtos/<?php echo $row_produtos['imagem']; ?>.jpg" alt="..." height="10" width="10">-->
          <div class="card-body">
            <h3 class="card-title"><?php echo $row_produtos['descricao']; ?></h3>
            <h4 class="card-title"><?php echo 'R$ ' . $row_produtos['precoVenda']; ?> <?php echo 'por ' . $row_produtos['unidade']; ?></h4>

            <!--  <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 Estrelas -->
          </div>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-8">

        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Detalhes do produto
          </div>
          <div class="card-body">
           <p class="card-text"><?php echo $row_produtos['detalhes']; ?> 
          <p class="card-text"><?php echo $row_produtos['especificacao']; ?>
            <p class="card-text"><?php echo 'Esse é um texto de exemplo, para deixar funcionando adicione a coluna detalhes na tabela produtos e edite a linha 64' ?>
            </p>
            <hr>
            Selecione a quantidade: <select class="custom-select custom-select-sm col-md-2" id="<?php echo $row_produtos['idProduto']; ?>" name="<?php echo $row_produtos['idProduto']; ?>">
              <?php for ($i = 1; $i <= $row_produtos['estoque']; $i++) { ?>
                <option value=" <?php echo $i ?> "> <?php echo $i ?></option>
              <?php } ?>
            </select>
            <a href="#" class="btn btn-success">Adicionar ao carrinho</a>
            <a href="#" class="btn btn-primary" role="button">Adicionar ao carrinho</a>
          </div>
        </div>



        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer e Java script para todas as paginas-->
  <?php include_once("includes/footer.php"); ?>
</body>

</html>
