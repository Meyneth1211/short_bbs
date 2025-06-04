<?php
session_start();
    
function displayname(){
    if ($_SESSION['userid']) {
        echo '<p>ようこそ、'.htmlspecialchars($_SESSION['username']).'さん！</p>';
    } else {
        echo '<p>ようこそ、ゲストさん！</p>';
    }
}

?>