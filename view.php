<?php require_once 'check.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿一覧</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>📜 投稿一覧</h1>
    <?php
    displayname();
    ?>
    <p><a href="form.php">← 投稿フォームへ戻る</a></p>
    <hr>
    <?php
    require_once 'db.php';
    $pdo=getDB();
    $sql='SELECT user.username, comment.content, comment.created_at FROM comment INNER JOIN user ON comment.user_id = user.id ORDER BY comment.created_at DESC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($result)) {
        foreach ($result as $row) {
            echo '<div class="post">';
            echo '<p><strong>'.$row['username'].'</strong> さん ('.$row['created_at'].')</p>';
            echo '<p>'.nl2br($row['content']).'</p>';
            echo '</div><hr>';
        }
        /*
        $lines = file($filename, FILE_IGNORE_NEW_LINES);
        foreach (array_reverse($lines) as $line) {
            [$time, $name, $comment] = explode("\t", $line);
            echo "<div class='post'>";
            echo "<p><strong>$name</strong> さん ($time)</p>";
            echo "<p>" . nl2br($comment) . "</p>";
            echo "</div><hr>";
        }*/
    } else {
        echo "<p>まだ投稿がありません。</p>";
    }
    ?>
</body>
</html>
