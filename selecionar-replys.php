<?php

    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=localhost; dbname=db_comment;', 'root', '');

    $stmt = $pdo->prepare('SELECT * FROM replys WHERE comment_id = :id;');
    $stmt->bindValue(':id', $_GET['comment_id']);
    $stmt->execute();
    
    if($stmt->rowCount() >= 1) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        echo json_encode('Nenhum resultado encontrado!');
    }
