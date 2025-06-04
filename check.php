<?php
session_start();
    if ($_SESSION['userid']) {
        echo '<p>ようこそ、'.htmlspecialchars($_SESSION['username']).'さん！</p>';
    } else {
        echo '<p>ようこそ、ゲストさん！</p>';
    }
?>