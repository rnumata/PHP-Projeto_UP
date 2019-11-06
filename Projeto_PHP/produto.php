<!DOCTYPE html>

<?php

require_once "funcoesmysql.php";

    $id = "";
    $item = "";
    $descricao = "";
    $tamanho = "";
    $valor = "";
    $url = "";


/* ---  $_FILES  --------- */

    if(empty($_FILES)){

    } else {
        $arquivo = $_FILES['foto']['name'];

        move_uploaded_file($_FILES['foto']['tmp_name'], '_imagens/'.$arquivo);

        // Como a variavel $url não vai pelo $_POST tem que atribuir valor separadamente
        $url = "_imagens/".$arquivo;
    }



/* ---  $_POST  --------- */

    if(empty($_POST)){

    } else {
        $item = $_POST['cad_item'];
        $descricao = $_POST['cad_descricao'];
        $tamanho = $_POST['cad_tamanho'];
        $valor = $_POST['cad_valor'];

        $item = salvarproduto($item, $descricao, $tamanho, $valor, $url);
        echo $item;
    }



/* ---  $_GET  --------- */

    if(!empty($_GET)){
        $id = $_GET['id'];
        $acao = $_GET['acao'];

        if ($acao == "alterar"){
            $lista = listaritem($id);

            $item = $lista[0]['item'];
            $descricao = $lista[0]['descricao'];
            $tamanho = $lista[0]['tamanho'];
            $valor = $lista[0]['valor'];
            $url = $lista[0]['url'];
        }

        if ($acao == "excluir"){
            excluiritem($id);

        }


    }





?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produto</title>


    <!--Link css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>


</head>


<!----------------------------- NAV BAR -------------------------------->
<div class="header">
    <h2 class="logo">Camiceria</h2>

    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
        <a href="#">Home</a>
        <a href="#">Cliente</a>
        <a href="#">Produto</a>
        <a href="#">Manutenção</a>
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
    </ul>
</div>

<!---------------------------------------------------------------------->



<div class="container">
    <br>
    <h1 style="text-align: center">Cadastro de Produto</h1>


    <form id="cadastro" method="POST" action="produto.php" enctype="multipart/form-data">

        <div class="form-row">
            <div class="col-sm-3"><br>
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" value="<?=$id?>" name="cad_id" readonly="readonly"">
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-10"><br>
                <label for="item">Item</label>
                <input type="text" class="form-control" id="item" value="<?=$item?>" name="cad_item" required="required">
            </div>
        </div>


        <div class="form-row">
            <div class="col-sm-10"><br>
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" value="<?=$descricao?>" name="cad_descricao" required="required">
            </div>
        </div>


        <div class="form-row">
            <div class="col-sm-5"><br>
                <label for="select">Tamanho</label>
                <select class="form-control" id="select" name="cad_tamanho">
                    <option selected value="">Selecionar</option>
                    <option value="p">Pequeno</option>
                    <option value="m">Medio</option>
                    <option value="g">Grande</option>
                    <option value="gg">Extra grande</option>
                </select>
            </div>

            <div class="col-sm-5"><br>
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="valor" value="<?=$valor?>" name="cad_valor" required="required">
            </div>
        </div>
        <br>


        <!-- Este input gera uma super variavel $_FILES com um array associativo -->
        <input type="file" name="foto" />
        <br><br><br>

        <div>
            <button type="submit" class="btn btn-dark">Salvar</button>
        </div>

    </form>


    <!-- script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</div>
</body>
</html>

