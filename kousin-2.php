<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518837-final;charset=utf8'
    ,'LAA1518837'
    ,'Kaito0712');
    $sql=$pdo->prepare(
        'update shohin set name=?,price=? where id=?');
        $sql->execute([$_POST['name'],$_POST['price'],$_POST['id']]);
?>
<p>店舗情報を更新しました。</p><br>
<a href="itiran.php" class="button is-info">一覧表</a>
<?php require 'footer.php'; ?>
