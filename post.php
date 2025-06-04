<?php
session_start();
$uid=$_SESSION['userid'];
$name = htmlspecialchars($_SESSION['username']);
$comment = htmlspecialchars($_POST['comment'] ?? '');
//$time = date('Y-m-d H:i:s');

if (trim($comment) === '' || empty($name)) {
    // コメントが空または名前が入力されていない場合はフォームにリダイレクト
    header("Location: form.php");
    exit;
}

require_once 'db.php';
$pdo = getDB();
$sql= 'INSERT INTO comment (user_id, content) VALUES (?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$uid, $comment]);
$pdo = null;


/*
$entry = "$time\t$name\t$comment\n";
file_put_contents('comments.txt', $entry, FILE_APPEND);
*/

header("Location: view.php");
exit;
?>
