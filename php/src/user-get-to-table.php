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
?>
    <h2>ユーザーリスト</h2>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>birth</th>
            <th>email</th>
        </thead>
        <tbody>
            <?php foreach ($result as $record) : ?>
                <tr>
                    <td><?php echo $record['id']; ?></td>
                    <td><?php echo $record['name']; ?></td>
                    <td><?php echo $record['birth']; ?></td>
                    <td><?php echo $record['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            color: white;
            border: solid 1px white;
            text-align: center;
            padding: 10px 0;
        }

        table thead th {
            background: #181B39;
            font-weight: bold;
            color: #fff;
        }

        table tbody td {
            color: #000;
        }

        /* 偶数行　１行ごとの色変えが不要なら削除 */
        table tr:nth-child(2n) td {
            background: #FBFBF6;
        }
    </style>
<?php

    // 接続を閉じる
    $st = null;
    $db = null;
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

?>