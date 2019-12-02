<?php

    require_once "funcoesmysql.php";

    if(empty($_GET)){
        $id = "";

    } else {
        $id = $_GET['id'];
    }

    $itens = listaritem($id);

?>


<html>
<head>

    <meta charset="UTF-8">
    <title>Listagem - Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        .container{
            width: 1400px;
            height: 350px;
            margin: 0 auto;
        }

        .descricao{
            width: 600px;
            height: 350px;
            border: 1px solid #fff;
            margin-left: 10px;
            padding-top: 100px;
            text-align: left;
        }

        .image-content{
            width: 290px;
            height: 350px;
            padding: 50px;
        }

        .card-body{
            margin-left: 332px;
        }


    </style>

</head>
<body>

    <!-- Navbar -->
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
                        <a class="nav-link text-white p" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
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

    <div class="container marketing">
        <div class="row featurette">
            <div class="col-md-3 order-md-1 image-content">
                <a href="compras.php">
                    <img src="<?=$itens[0]['url']?>">
                </a>
            </div>
            <div class="col-md-7 descricao order-md-2">
                <p>
                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                </p>
            </div></br>
            <div class="row">
                <h1 class="featurette-heading">R$<?=$itens[0]['valor']?> </h1>
            </div>
        </div>
    </div>


    <div class="card-body">
        <a href="carrinho.php?acao=inserir&id=<?=$id?>">
            <button class="w3-button w3-black">Adicionar<i class="fa fa-shopping-cart"></i></button>
        </a>
    </div>

    <hr class="featurette-divider">












    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.validate.min.js"></script>


</body>
</html>
