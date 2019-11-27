<!DOCTYPE html>

<?php

    require_once "funcoesmysql.php";


    $nome = "";
    $sobrenome = "";
    $email = "";
    $senha = "";
    $endereco = "";
    $complemento = "";
    $cidade = "";
    $estado = "";
    $cep = "";


    if(empty($_POST)){


    } else {
        $nome = $_POST['cad_nome'];
        $sobrenome = $_POST['cad_sobrenome'];
        $email = $_POST['cad_email'];
        $senha = $_POST['cad_senha'];
        $endereco = $_POST['cad_endereco'];
        $complemento = $_POST['cad_complemento'];
        $cidade = $_POST['cad_cidade'];
        $estado = $_POST['cad_estado'];
        $cep = $_POST['cad_cep'];

        $cadastro = salvarcliente($nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado, $cep);
        echo $cadastro;

    }


    //Variavel $lista_estados recebe um array associativo da função listarestados
    $lista_estados = listarestados();

?>



<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Cadastro</title>


    <!--Link css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>


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
    </div><br>


    <div class="container">
            <br>
            <h1 style="text-align: center">Cadastro de Cliente</h1>

          <form id="cadastro" method="POST" action="cadastro.php" >

            <div class="form-row">
                <div class="col"><br>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="cad_nome" required="required">
                </div>
                <div class="col"><br>
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="cad_sobrenome" required="required">
                </div>
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="cad_email" name="cad_email" required="required">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="cad_senha" name="cad_senha" required="required">
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="cad_end" name="cad_endereco" required="required">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="cad_comple" placeholder="Apartamento, casa, ou andar" name="cad_complemento" required="required">
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="cad_cidade" name="cad_cidade" required="required">
                </div>
                <div class="form-group col-md-4">

                    <label for="inputState">Estado</label>

                    <select id="inputState" class="form-control" name="cad_estado" required="required">
                        <option selected>Selecionar</option>

                        <?php
                            foreach ($lista_estados as $estado){

                        ?>

                                <option value="<?=$estado['id'];?>"><?=$estado['estado']?></option>
                                
                        <?php
                           }
                        ?>

                    </select>
                </div>


                <div class="form-group col-md-2">
                    <label for="inputZip">CEP</label>
                    <input type="text" class="form-control cep" id="inputZip" name="cad_cep" required="required">
                </div>
            </div>


            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>


        <!-- script bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- src do js -->
        <script src = "_js/jquery.mask.js"></script>

        <!--copiar mask do jquery -->
        <script>
           $(document).ready(function(){
            $('.cep').mask('00000-000');
            });
        </script>

    </div>
</body>
</html>
