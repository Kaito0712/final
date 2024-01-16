<?php session_start(); ?>
<?php require 'header.php'; ?>
<p class="is-size-3 has-background-warning-light">新規登録</p><br>
<form action="touroku-2.php"method="post">
<p>店舗名<input type="text" name="name"></p>
<p>住所<input type="text" name="price"></p>
<button type="submit" class="button is-info">決定</button>
</form>
<?php require 'footer.php'; ?>