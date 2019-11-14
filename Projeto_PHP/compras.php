<?php
require_once 'funcoesmysql.php';

    //Variavel $listaitens recebe um array associativo da função listarproduto
    $listaitens = listarproduto();



?>
    <html>

<head>
    <meta charset="UTF-8">
    <title>Listagem - Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white p"  href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p" href="carrinho.php">Carrinho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white p" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <br><br><br>

    <div class="container">
        <div class="row">

            <?php
                foreach ($listaitens as $item){
                    $id = $item['id'];
                    $desc = $item['descricao'];
                    $url = $item['url'];
                    $item = $item['item'];
            ?>


            <div class="card" style="width: 18rem; margin: 5px">
                <a href="produto.php"><img src="<?=$url?>" class="card-img-top" alt="Sem Foto"></a>
                <div class="card-body">
                    <h5 class="card-title"><?=$item?></h5>
                    <p class="card-text"><?=$desc?></p>
                    <a href="carrinho.php?acao=inserir&id=<?=$id?>">
                        <button class="w3-button w3-black">Adicionar<i class="fa fa-shopping-cart"></i></button>
                    </a>
                </div>
            </div>

            <?php
                }
             ?>



        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/jquery.validate.min.js"></script>


</body>

    </html>
