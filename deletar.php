<?php

    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=localhost; dbname=db_comment;', 'root', '');

    $stmt = $pdo->prepare('DELETE FROM replys WHERE comment_id = :id;');
    $stmt->bindValue(':id', $_POST['comment_id']);
    $stmt->execute();

    $stmt = $pdo->prepare('DELETE FROM comments WHERE id = :id;');
    $stmt->bindValue(':id', $_POST['comment_id']);
    $stmt->execute();

    if($stmt->rowCount() >= 1) {
        echo json_encode('Excluído com sucesso!');
    } else {
        echo json_encode('Erro ao excluir!');
    }

