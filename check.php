<?php
session_start();
    
function displayname(){
    if (!empty($_SESSION['userid'])) {
        echo '<p>ようこそ、'.htmlspecialchars($_SESSION['username']).'さん！</p>';
    } else {
        echo '<p>ようこそ、ゲストさん！</p>';
    }
}

function login_logout(){
    if (!empty($_SESSION['userid'])) {
        echo '<p><a href="logout.php">ログアウト</a></p>';
    } else {
        echo '<p><a href="login.php">ログイン</a></p>';
    }
}

?>