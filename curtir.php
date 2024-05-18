<?php

    header('Content-Type: application/json');


    $pdo = new PDO('mysql:host=localhost; dbname=db_comment;', 'root', '');


    if(($_POST['like_value']) != null) {
        $value = $_POST['like_value'] ? 1 : 0;
    } else {
        $value = null;
    }

    $stmt = $pdo->prepare('UPDATE comments SET like_val = :va WHERE id = :id;');
    $stmt->bindValue(':va', $value);
    $stmt->bindValue(':id', $_POST['comment_id']);
    $stmt->execute();


    if($stmt->rowCount() >= 1) {
        echo json_encode('Comentário curtido/descurtido com Sucesso!');
    } else {
        echo json_encode('Falha ao curtir/descurtir comentário');
    }