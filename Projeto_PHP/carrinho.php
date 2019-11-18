    <?php
    require_once 'funcoesmysql.php';

    //Inicia a $_SESSION
        session_start();


    //Se a $_SESSION vazia cria um array $_SESSION com nome de carrinho
        if(empty($_SESSION)){
            $_SESSION['carrinho'] = array();
        }

    /*Se o $_GET estiver vazio faz acao = branco.
      Se o $_GET não estiver vazio inseri no array se acao = inserir e faz um unset se acao = excluir */
        if(empty($_GET)){
            $acao = "";
            
        } else
            if(!empty($_GET)){
                $acao = $_GET['acao'];
        }

            if($acao == "excluir"){
                $id = $_GET['id'];
                unset($_SESSION['carrinho'][$id]);

            } elseif ($acao == "inserir"){
                $id = $_GET['id'];
                $lista = listaritem($id);
                array_push($_SESSION['carrinho'], $lista);

                } elseif ($acao == "finalizar"){
                    foreach ($_SESSION['carrinho'] as $key => $final){
                        $usuario = "teste1";
                        $qtd =  "1";
                        $id = $final[0]['id'];
                        $tamanho =  $final[0]['tamanho'];

                        $final = finalizarcompra($usuario, $id, $tamanho, $qtd);
                    }
                    session_destroy();
                    header("location: carrinho.php");
                }

    //Variavel recebe o array carrinho para fazer um foreach
        $carrinho = $_SESSION['carrinho'];

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
        </div><br><br><br>


        <!-- Table -->
        <div class="container">

            <a href="compras.php">
                <button type="button" class="btn btn-light">Continuar Comprando <i class="fa fa-shopping-cart"></i></button>
            </a>
            <br><br>

            <div class="row">

                <table class="table">
                    <tr>
                        <th>Imagem</th>
                        <th>Item</th>
                        <th>Descrição</th>
                        <th>Tamanho</th>
                        <th>Valor R$</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>

                    <?php

                    //Foreach para popular e mostrar o carrinho
                        foreach ($carrinho as $key => $item) {

                            ?>

                            <tr>
                                <td><img src=" <?= $item[0]['url'] ?>" width="60px" height="60px"></td>
                                <td> <?= $item[0]['item'] ?> </td>
                                <td> <?= $item[0]['descricao'] ?> </td>
                                <td> <?= $item[0]['tamanho'] ?> </td>
                                <td> <?= $item[0]['valor'] ?> </td>
                                <td><input type="number" name="quantity" min="1" max="10" value="1"></td>
                                <td><a href="carrinho.php?acao=excluir&id=<?=$key?>"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>


                    <?php
                        }
                    ?>

                </table>
            </div>


            <a href="carrinho.php?acao=finalizar">
                <button type="button" class="btn btn-light">Finalizar<i class="fa fa-shopping-cart"></i></button>
            </a>

        </div>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.validate.min.js"></script>
    </body>
</html>

