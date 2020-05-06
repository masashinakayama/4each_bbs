<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4ezch_bbs</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- データベースとの連携 -->
<?php
mb_internal_encoding("utf8");
$pdo = new PDO('mysql:dbname=contactform;host=localhost;port=3306','root','root');
$stmt = $pdo->query("SELECT * FROM 4each_bbs");

?>


    <div class="wrap">

    <!-- header -->
    <header>
        <img src="./4eachblog_logo.jpg" alt="4eachlogのロゴ">
        <div class="header-in">
          <ul>
            <li><a href="">トップ</a></li>
            <li><a href="">プロフィール</a></li>
            <li><a href="">4eachについて</a></li>
            <li><a href="">登録フォーム</a></li>
            <li><a href="">問い合わせ</a></li>
            <li><a href="">その他</a></li>
          </ul>
        </div>
    </header>



    <!-- main -->
    <main>
        <!-- mainのleft -->
        <div class="left">
            <h1>プログラミングに役立つ書籍</h1>
        <!--  form  -->
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input class="text" type="text" size="55" name="handlename">
            </div>

            <div>
                <label>タイトル</label>
                <br>
                <input class="text" type="text" size="55" name="title">
            </div>

            <div>
                <label>コメント</label>
                <br>
                <textarea class="text" cols="75" rows="7" name="comments" ></textarea>
            </div>

            <div>
                <input type="submit" value="送信する" class="submit">
            </div>
        </form>


        <!-- formの出力結果 -->
        <?php while($row = $stmt->fetch()): ?>
        <div class="result">
            <h3><?php echo $row['title']; ?></h3>
            <p class="nai"><?php echo $row['comments']; ?></p>
            <p class="hname">posted by : <?php echo $row['handlename']; ?></p>
        </div>
        <?php endwhile; ?>


        </div>


        <!-- mainのright -->
        <div class="right">
            <div class="popular link">
                <h2>人気の記事</h2>
                <ul>
                    <li><a href="">PHPオススメ本</a></li>
                    <li><a href="">PHP MyAdminの使い方</a></li>
                    <li><a href="">今人気のエディタ Top5</a></li>
                    <li><a href="">HTMLの基礎</a></li>
                </ul>
            </div>
            <div class="Recommended link">
                <h2>オススメリンク</h2>
                <ul>
                    <li><a href="">インターノウス株式会社</a></li>
                    <li><a href="">XAMPPのダウンロード</a></li>
                    <li><a href="">Eclipseのダウンロード</a></li>
                    <li><a href="">Bracketsのダウンロード</a></li>
                </ul>
            </div>
            <div class="category link">
                <h2>カテゴリ</h2>
                <ul>
                    <li><a href="">HTML</a></li>
                    <li><a href="">PHP</a></li>
                    <li><a href="">MySQL</a></li>
                    <li><a href="">JavaScript</a></li>
                </ul>
            </div>
        </div>
    </main>




    <!-- footer -->
    <footer>
        <p>copyright © internous | 4each blog the which provides A to Z about programing.</p>
    </footer>


    </div>
</body>
</html>