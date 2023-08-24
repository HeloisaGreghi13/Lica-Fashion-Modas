<?php

    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";
    require "src/Repositorio/ProdutoRepositorio.php";

    $produtosRepositorio = new ProdutoRepositorio($pdo);
    $dadosCroppeds = $produtosRepositorio->opcoesCroppeds();
    $dadosVestidos = $produtosRepositorio->opcoesVestidos();

    



?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/dress.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Lica Fashion</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-licafashion.png" class="logo" alt="logo Lica Fashion">
            </div>
        </section>
        <h2>Ofertas</h2>
        <section class="container-vestidos">
            <div class="container-vestidos-titulo">
                <h3>Vestidos</h3>
                <img class= "ornaments" src="img/cabide.png" alt="cabide">
            </div>
            <div class="container-vestidos-produtos">
                <?php foreach ($dadosVestidos as $vestidos):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $vestidos->getImagemDiretorio() ?>">
                        </div>
                        <p><?= $vestidos->getNome()?></p>
                        <p><?= $vestidos->getDescricao()?></p>
                        <p><?= $vestidos->getPrecoFormatado() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-cropped">
            <div class="container-cropped-titulo">
                <h3>Croppeds</h3>
                <img class= "ornaments" src="img/cabide.png" alt="cabide">
            </div>
            <div class="container-cropped-produtos">
                <?php foreach ($dadosCroppeds as $cropped):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $cropped->getImagemDiretorio()?>">
                        </div>
                        <p><?= $cropped->getNome()?></p>
                        <p><?= $cropped->getDescricao()?></p>
                        <p><?= $cropped->getPrecoFormatado()?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>
    </main>
</body>
</html>