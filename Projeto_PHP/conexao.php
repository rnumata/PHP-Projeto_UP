<?php


    try {
        $pdo = new PDO("mysql:host=localhost:3306; dbname=projeto_PHP", "root", " ");
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $stmt=$pdo->prepare("SELECT * FROM cadastro ");
    $stmt->execute();

    $listagem = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($listagem as $list){
        echo $list["id"]." -> ".$list["nome"]."<br />";
    }

    $stt=$pdo->prepare("UPDATE cadastro SET nome=:nome WHERE id='23'");
    $stt->bindValue(":nome", "titizinho");
    $stt->execute();



?>