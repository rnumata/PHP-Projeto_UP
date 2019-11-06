<?php


/* -- Conexão com BD -- */

    function conexao(){
        try {
            $pdo = new PDO("mysql:host=localhost:3306; dbname=projeto_PHP", "root", " ");
            return $pdo;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

/* -- Função para Cadastrar Cliente -- */

    function salvarcliente($nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado, $cep){

        $pdo = conexao();

        $stmt = $pdo->prepare ("INSERT INTO cadastro (nome, sobrenome, email, senha, endereco, complemento, cidade, estado, cep) VALUES (:nome, :sobrenome, :email, :senha, :endereco, :complemento, :cidade, :estado, :cep)");

        $stmt-> bindParam(":nome", $nome);
        $stmt-> bindParam(":sobrenome", $sobrenome);
        $stmt-> bindParam(":email", $email);
        $stmt-> bindParam(":senha", $senha);
        $stmt-> bindParam(":endereco", $endereco);
        $stmt-> bindParam(":complemento", $complemento);
        $stmt-> bindParam(":cidade", $cidade);
        $stmt-> bindParam(":estado", $estado);
        $stmt-> bindParam(":cep", $cep);

        if($stmt->execute()){
            return "<script>alert('Cadastro efetuado com sucesso!');</script>";
        } else {
            print_r($stmt->errorInfo());
            return "Não foi possível salvar as informações";
        }
    }


/* -- Função para Cadastrar Item -- */

    function salvarproduto($item, $descricao, $tamanho, $valor, $url){

        $pdo = conexao();

        $stmt = $pdo->prepare ("INSERT INTO item (item, descricao, tamanho, valor, url) VALUES (:item, :descricao, :tamanho, :valor, :url)");

        $stmt-> bindParam(":item", $item);
        $stmt-> bindParam(":descricao", $descricao);
        $stmt-> bindParam(":tamanho", $tamanho);
        $stmt-> bindParam(":valor", $valor);
        $stmt-> bindParam(":url", $url);

        if($stmt->execute()){
            return "<script>alert('Cadastro efetuado com sucesso!');</script>";
        } else {
            print_r($stmt->errorInfo());
            return "Não foi possível salvar as informações";
        }
    }



/* -- Função para listar os itens cadastrados --*/

    function listarproduto(){

        $pdo = conexao();

        $stmt = $pdo->prepare("SELECT * FROM item ORDER BY id");

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            print_r($stmt->errorInfo());
            return "Não foi possível realizar a consulta.";
        }

    }



/* -- Função para listar o item selecionado --*/

    function listaritem($id){

        $pdo = conexao();

        $stmt = $pdo->prepare("SELECT id, item, descricao, tamanho, valor, url FROM item WHERE id = :id");

        $stmt-> bindParam(":id", $id);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            print_r($stmt->errorInfo());
            return "Não foi possível realizar a consulta.";
        }
    }



/* -- Função para excluir o item selecionado --*/

    function excluiritem($id){

        $pdo = conexao();

        $stmt = $pdo->prepare("DELETE FROM item WHERE id = :id");

        $stmt-> bindParam(":id", $id);

        if ($stmt->execute()) {
            return "<script>alert('Exclusão efetuada com sucesso!');</script>";
            /*return $stmt->fetchAll(PDO::FETCH_ASSOC);*/
        } else {
            print_r($stmt->errorInfo());
            return "Não foi possível realizar a consulta.";
        }
    }







?>