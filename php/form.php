<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ユーザー登録フォーム：登録</h1>
    <form action="form-result.php" method="POST">
        <input type="text" name="formtype" value="insert" hidden>
        <input type="number" name="id">
        <input type="text" name="name">
        <input type="date" name="birth">
        <input type="mail" name="email">
        <input type="submit" value="登録">
    </form>
    <h1>ユーザー登録フォーム：削除</h1>
    <form action="form-result.php" method="POST">
        <input type="text" name="formtype" value="delete" hidden>
        <input type="number" name="id">
        <input type="submit" value="削除">
    </form>
</body>

</html>