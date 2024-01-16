<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518837-final;charset=utf8'
    ,'LAA1518837'
    ,'Kaito0712');
echo '<p class="is-size-3 has-background-warning-light">店舗一覧</p><br>';
echo '<a href="touroku.php" class="button is-danger">新規登録</a>';
echo '<table class="table is-bordered">';
echo '<tr class="is-selected"><th>店舗番号</th><th>店舗名</th><th>住所</th><th>更新</th><th>削除</th></tr>';
$sql=$pdo->query('select * from shohin');
foreach ($sql as $row){
echo '<tr>';
echo '<td>',$row['id'],'</td>';
echo '<td>',$row['name'],'</td>';
echo '<td>',$row['price'],'</td>';
echo '<td>';
echo '<form action="kousin.php"method="post">';
echo '<input type="hidden" name="id" value="',$row['id'],'">';
echo '<button type="submit" class="button is-info is-light is-small">更新</button>';
echo '</form>';
echo '</td>';
echo '<td>';
echo '<form action="delete.php"method="post">';
echo '<input type="hidden" name="id" value="',$row['id'],'">';
echo '<button type="submit" class="button is-danger is-light is-small">削除</button>';
echo '</form>';
echo '</td>';
echo '</tr>';
}
echo '</table>';

?>
 <?php require 'footer.php'; ?>