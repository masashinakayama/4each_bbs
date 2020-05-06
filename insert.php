<?php
mb_internal_encoding("utf8");
$pdo = new PDO('mysql:dbname=contactform;host=localhost;port=3306','root','root');
$pdo->exec("INSERT INTO 4each_bbs(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_bbs/index.php");
?>

<!-- select文を使うときの決まり文句 -->
<!-- $stmt = $pdo->query(); -->
<!-- insert,update,delete文を使うときの決まり文句 -->
<!-- $pdo->exec(); -->