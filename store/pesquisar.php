<?php include_once("conexao.php"); ?>

<!-- script superior -->
<?php include_once("script/produtos.php"); ?>
<!-- script superior -->
<?php include_once("script/pesquisar.php"); ?>

<!-- header -->
<?php include_once("includes/header.php"); ?>
<!-- Menu de navegação superior -->
<?php include_once("includes/menu.php"); ?>

    <!-- Page Content -->

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<div class="row">
				</div>
			</div>
			<div class="row">
				<?php while($rows_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<!-- <img src="imagens/produtos/<?php echo $rows_produtos['imagem']; ?>.jpg" alt="..." height="250" width="250"> -->
							<img src="imagens/produtos/produtos.jpg" alt="..." height="250" width="250">
							<div class="caption text-center">
								<a href="detalhes.php?id_produtos=<?php echo $rows_produtos['idProdutos']; ?>"><h3><?php echo $rows_produtos['descricao']; ?></h3></a>
								<p><a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $rows_produtos['idProdutos']?>" class="card-link" role="button">Add Carrinho</a>  </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="pesquisar.php?pagina=<?php echo $pagina_anterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="pesquisar.php?pagina=<?php echo $i; ?>&pesquisar=<?php echo $valor_pesquisar; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="pesquisar.php?pagina=<?php echo $pagina_posterior; ?>&pesquisar=<?php echo $valor_pesquisar; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

		  <!-- Footer -->
		  <?php include_once("includes/footer.php"); ?>
	</body>
</html>
