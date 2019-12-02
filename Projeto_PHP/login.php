<?php

    require_once "funcoesmysql.php";

    session_start();

    if(!empty($_POST)){

        $usuario = $_POST['username'];
        $senha = $_POST['password'];

        $user_pass = validarusuario($usuario);


        if(empty($user_pass)){

            echo "<script>alert('Usuario NÃO cadastrado ');</script>";

        } else {

            if($senha == $user_pass[0]['senha'] && $usuario == $user_pass[0]['nome']){

                $_SESSION['usuario'] = $user_pass[0]['id'];
                header ("location: index.php");

            } else {
                echo "<script>alert('Usuario e/ou Senha Inválido ');</script>";
            }
        }
    }

?>




<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>


<body class="corpo">
<div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">

                    <form id="login-form" class="form" action="login.php" method="POST">
                        <h3 class="text-center text-info">Login</h3>

                        <div class="form-group">
                            <label for="username" class="text-info">Nome:</label><br>
                            <input type="text" name="username" id="username" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>

                        <div id="register-link" class="text-right">
                            <a href="cadastro.php" class="text-info">Cadastre aqui</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>