<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="POST">
    <h1>ログイン</h1>
ユーザー名:<input type="text" name="username"><br>
パスワード:<input type="password" name="password"><br>
<input type="submit" value="ログイン">
    </form>
</body>
</html>