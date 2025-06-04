<?php
    function getDB(){
        $dsn='mysql:host=mysql321.phy.lolipop.lan;dbname=LAA1557132-shortbbs;charset=utf8';
        $username='LAA1557132';
        $password='shortbbssd3b';
        $pdo=new PDO($dsn,$username,$password);

        return $pdo;
    }
    

?>