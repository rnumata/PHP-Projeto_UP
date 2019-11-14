<?php
require_once 'funcoesmysql.php';

    /* Caso selecionado botão excluir */
    if(!empty($_GET)){
        $id = $_GET['id'];
        $excluir = excluiritem($id);
        echo $excluir;
    }


?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listagem - Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>

</head>

<body>

    <h1 style="text-align: center">Lista de item cadastrado</h1><br><br>

    <div class="container">
        <div class="row">

            <table class="table">
                <tr>
                    <th>Imagem</th>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Tamanho</th>
                    <th>Valor R$</th>
                    <th></th>
                    <th></th>
                </tr>

            <?php

            $itens = listarproduto();
            foreach ($itens as $item) {

                ?>

                <tr>
                    <td> <img src="<?=$item['url'];?>" width="60px" height="60px"> </td>
                    <td> <?=$item['id'];?> </td>
                    <td> <?=$item['descricao'];?> </td>
                    <td> <?=$item['tamanho'];?> </td>
                    <td> <?=$item['valor'];?> </td>

                    <td><a class="btn btn-primary" href="produto.php?acao=alterar&id=<?= $item['id'] ?>">Alterar</a></td>
                    <td><a class="btn btn-danger" href="listagem.php?acao=excluir&id=<?= $item['id'] ?>">Excluir</a></td>
                </tr>

                <?php
            }
            ?>

            </table>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/jquery.validate.min.js"></script>


</body>

</html>