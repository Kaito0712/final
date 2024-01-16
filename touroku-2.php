<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518837-final;charset=utf8'
    ,'LAA1518837'
    ,'Kaito0712');
    $sql=$pdo->prepare('insert into shohin() values(null,?,?)');
    $sql->execute([$_POST['name'],$_POST['price']]);
?>
<p>店舗を登録しました。</p><br>
<a href="itiran.php" class="button is-info">一覧表</a>
<?php require 'footer.php'; ?>