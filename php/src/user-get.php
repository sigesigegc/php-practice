<?php
try {
    # hostには「docker-compose.yml」で指定したコンテナ名を記載
    // MySQLへの接続
    $dsn = "mysql:host=container-mysql;dbname=test_database;";
    $db = new PDO($dsn, 'root', 'root');

    // データを取得する（レコード全て）
    $st = $db->query('SELECT * from user');
    $st->execute();
    $result = $st->fetchAll(PDO::FETCH_ASSOC);

    // 取得結果を表示
    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    // 接続を閉じる
    $st = null;
    $db = null;
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
