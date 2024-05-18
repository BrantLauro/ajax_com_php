<?php

    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=localhost; dbname=db_comment;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO replys (name, comment, comment_id) VALUES (:na, :co, :id);');
    $stmt->bindValue(':na', $_POST['name']);
    $stmt->bindValue(':co',$_POST['comment']);
    $stmt->bindValue(':id', $_POST['comment_id']);
   
    if($stmt->execute()) {
        echo json_encode('Comentário salvo com Sucesso!');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }