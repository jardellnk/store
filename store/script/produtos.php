<?php

//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os produtos da tabela
$result_produto = "SELECT * FROM produtos";
$resultado_produto = mysqli_query($conn, $result_produto);

//Contar o total de produtos
$total_produtos = mysqli_num_rows($resultado_produto);

//Seta a quantidade de produtos por pagina
$quantidade_pg = 8;

//calcular o número de pagina necessárias para apresentar os produtos
$num_pagina = ceil($total_produtos/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os produtos a serem apresentado na página
$result_produtos = "SELECT * FROM produtos limit $incio, $quantidade_pg";
$resultado_produtos = mysqli_query($conn, $result_produtos);
$total_produtos = mysqli_num_rows($resultado_produtos);

// Seleciona o produto que ira ser exibido na pagina detalhes
$row_produtos = mysqli_fetch_assoc($resultado_produtos);

?>