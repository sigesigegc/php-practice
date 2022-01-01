<?php

try {
    // MySQLへの接続
    $dsn = "mysql:host=container-mysql;dbname=test_database;";
    $db = new PDO($dsn, 'root', 'root');

    if ($_POST['formtype'] == 'insert') {
        $sql  = 'INSERT INTO user(id,name,birth,email) VALUES(:ID,:NAME,:BIRTH,:EMAIL)';
        $st = $db->prepare($sql);

        $st->bindParam(':ID', $_POST['id']);
        $st->bindParam(':NAME', $_POST['name'], PDO::PARAM_STR);
        $st->bindParam(':BIRTH', $_POST['birth']);
        $st->bindParam(':EMAIL', $_POST['email'], PDO::PARAM_STR);
        $st->execute();
        echo $_POST['formtype'];
    } else if ($_POST['formtype'] == 'delete') {
        $sql  = 'DELETE FROM user WHERE id = :ID';
        $st = $db->prepare($sql);

        $st->bindParam(':ID', $_POST['id']);
        $st->execute();
        echo $_POST['formtype'];
    }
    echo '処理に成功しました';
} catch (PDOException $e) {
    echo '処理に失敗しました：' . $e->getMessage();
}
