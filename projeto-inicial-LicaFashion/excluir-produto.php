<?php

require "src/conexao-bd.php";
require "src/modelo/Produto.php";
require "src/repositorio/produtorepositorio.php";

$produtorepositorio = new produtorepositorio($pdo);
$produtorepositorio->deletar($_POST['id']);

header("Location: admin.php");
