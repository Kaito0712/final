<?php session_start(); ?>
<?php require 'header.php'; ?>
<p class="is-size-3 has-background-warning-light">更新</p><br>
<form action="kousin-2.php"method="post">
<?php echo  '<input type="hidden" name="id" value="',$_POST['id'],'">';?>
<p>店舗名<input type="text" name="name"></p>
<p>住所<input type="text" name="price" ></p>
<button type="submit" class="button is-info ">更新</button>
</form>
<?php require 'footer.php'; ?>
