<?php
session_start();
require_once 'db.php';
$pdo = getDB();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    header("Location: welcome.php");
    exit();
} else {
    echo "ログイン失敗：ユーザ名またはパスワードが間違っています。";
}
?>
