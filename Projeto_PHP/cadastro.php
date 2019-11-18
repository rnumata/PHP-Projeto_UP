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


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>


    <!--Link css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>


</head>


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
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
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
    <!--
    <script>
       $(document).ready(function(){
        $('.cep').mask('00000-000');
        });
    </script>
    -->

</div>
</body>
</html>
